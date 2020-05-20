<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }

    public function dashboard()
    {
        $roi = $balance_total = $diff_days = $balance_withdrawable = 0;
        //get his number of referrals
        $referral_count = 0;

        //get his investment details
        $investor = DB::table('investors')->where(['user'=>Auth::user()->id,'visibility'=>1])
        ->join('series', 'investors.series', '=', 'series.id')
        ->select('series.*','investors.*');

        if($investor->count() > 0){
            //get the guy and start calculation
            $investor = $investor->first();

            $date_today = Carbon::now();
            $date_invested = Carbon::parse($investor->date_invested);

            $diff_days = $date_invested->diffInDays($date_today);

            if($diff_days > 28){
                $diff_days = 28;
            }

            $percentage =$investor->interest_rate * $diff_days;
            $roi = $investor->amount_invested * ($percentage/100);
            $balance_total = $investor->amount_invested + $roi;

            //mainteenance charge
            $maintain_charge = $balance_total *  ($investor->maintenance_fee/100);
            $balance_withdrawable =  $balance_total - $maintain_charge;

           
        }

        //get his referral bonus
        $referral_bonus = DB::table('referres')->where(['email'=>Auth::user()->email])->first();


        return view('user.dashboard', compact('investor','referral_count','roi','balance_total','diff_days','balance_withdrawable','referral_bonus'));
    }


    public function email_invite(Request $request){

        try{
            //invite to elife
            $to_email = $request->email;
            $to_email = "Friend";

            Mail::send('email.invite', function($message) use ($to_name,$to_email) {
                $message->to($to_email,$to_name)
                        ->subject('Invitation to Elife');
                $message->from('elifeseries@gmail.com','Elifeseries');
            });

        }catch(Exception $e){
            
            //dd(array('message' =>$e->getMessage()));
        }
        finally{
            return back()->with('success',"User Successfully Invited");
        }

    }
}
