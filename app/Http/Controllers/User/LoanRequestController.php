<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProInvestor;
use App\Models\Investor;
use App\Models\ReferralBonus;
use App\Models\Referre;
use App\Models\User;
use App\Models\InvestorMatch;
use Carbon\Carbon;
use Auth;
use DB;

class LoanRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }
    
    public function index(Request $request){
        if($request->isMethod('GET')){

             //Check if he has an investor
             $investor = DB::table('investors')->where(['user' => Auth::user()->id, 'cashout_request'=> '1'])->get();

             if ($investor->count() < 1) {
                 return redirect("/user_dashboard")->with('errors', 'You have active an request. Please initiate a lend process using the borrow button from your wallet');
             } else {
 
                 //get the assumed
                 $investment = DB::table('investors')->where(['user' => Auth::user()->id])->first();
 
                 $matches = DB::table('investor_matches')->where(['investor' => $investment->id])
                 ->join('pro_investors', 'investor_matches.pro_investor', '=', 'pro_investors.id')
                 ->join('users', 'pro_investors.user', '=', 'users.id')
                 ->select('users.email', 'users.first_name', 'users.last_name', 'investor_matches.*')->get();
             
 
                 return view('/user/loan_request', compact('matches'));
             }


        }else if($request->isMethod('POST') && $request->action == "confirm-payment"){

            //get the pro-investor and details of the series
            $investor = ProInvestor::where('pro_investors.id', $request->pro_investor)
            ->join('series', 'pro_investors.series', '=', 'series.id')
            ->select( 'series.*','pro_investors.*')->first();

            $date_invested = Carbon::now();
            $date_cashout = Carbon::now()->addDays(13);

            //cashout amount calculation
            $roi = $investor->amount * ($investor->total_interest / 100);
            $roi = $roi +  $investor->amount;

            $maintenace_charge = $roi * ($investor->maintenance_fee/ 100);
            $withdrawable_bal = $roi -  $maintenace_charge;

            Investor::create(['user'=>$investor->user,'series'=>$investor->series,'date_invested'=>$date_invested,
            'date_cashout'=>$date_cashout,'amount_invested'=>$investor->amount,'rate'=>$investor->total_interest ,
            'maintenace_fee'=>$investor->maintenance_fee,'roi'=>$roi,'withdrawable_bal'=>$withdrawable_bal ]);


            //update his referral on the referres table
            $user = User::where(['id'=>$investor->user])->first();
            $bonus = ReferralBonus::where(['id'=>1])->first();
            $referre = Referre::where(['email'=>$user->referral])->count();

            $referral_bonus = ($bonus->bonus / 100) * $investor->amount;

            if($referre < 1){
                //create a new refree and record his bonus
                Referre::create(['email'=>$user->referral,'bonus'=>$referral_bonus,'referral_paid_count'=>1]);
            }else{

                //just update his records
                $referre = Referre::where(['email'=>$user->referral])->first();
                $new_bonus = $referre->bonus + $referral_bonus;
                $new_count = $referre->referral_paid_count + 1;
                Referre::where(['email'=>$user->referral])->update(['bonus'=>$new_bonus,'referral_paid_count'=>$new_count]);
            }

            //then delete thee guy from pro-investor
            ProInvestor::where('id', $request->pro_investor)->delete();

            //update this payment and check if this investor has received all his payments
            InvestorMatch::where(['investor'=>$request->investor, 'pro_investor'=>$request->pro_investor])->update(['status'=>1]);
            $investor = Investor::where('id', $request->investor)->first();

            if($investor->fully_merged == 1){

                //check if he has received all his payments
                $amount_paid = InvestorMatch::where(['investor'=> $request->investor, "status"=>1])->pluck('amount')->sum();
                if($amount_paid >= $investor->withdrawable_bal ){

                    InvestorMatch::where('investor', $request->investor)->delete();
                    Investor::where('id', $request->investor)->delete();
                }

            }

            return back()->with('success', 'Investor Successfully Upgraded');

        }
    }
}
