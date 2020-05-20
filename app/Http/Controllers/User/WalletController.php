<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Referre;
use Auth;
use DB;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }

    public function index(Request $request){

        if($request->isMethod('GET')){
            
            $roi = $balance_total = $diff_days = $balance_withdrawable = 0;
            //get his number of referrals
            $referral_count = DB::table('users')->where(['referral'=>Auth::user()->email])->count();
    
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
  
            return view('user.wallet', compact('investor','referral_count','roi','balance_total','diff_days','balance_withdrawable','referral_bonus'));
        }
        else if($request->isMethod('POST')){

            if($request->action == "inquary"){
                //check if his profile is complete
                $profile_check = DB::table('portfolios')->where(['user_id'=>Auth::user()->id])->count();
                if($profile_check == 0){

                    return response()->json(array('message' =>10));

                }

                //check if his profile picture is there        
                if(Auth::user()->picture == null){

                    return response()->json(array('message' =>10));

                }

                //check if he have anything with us
                $investor = DB::table('investors')->where(['user'=>Auth::user()->id])->count();
                if($investor == 0){

                    return response()->json(array('message' =>0));

                }else{
                    
                    //now check to know if his brokerage is due for withdrawal
                    $investor = DB::table('investors')->where(['user'=>Auth::user()->id])->first();
                
                    $date_today = Carbon::now();
                    $date_invested = Carbon::parse($investor->date_cashout);
        
                    $diff_days = $date_invested->diffInDays($date_today,false);
                    $diff_minutes = $date_invested->diffInMinutes($date_today,false);
                    $diff_hours = $date_invested->diffInHours($date_today,false);
                    //$diff_days = 28;

                    if($diff_days <= 0){

                        return response()->json(array('message' =>1,'days'=>$diff_days,'hours'=>$diff_hours,'minutes'=>$diff_minutes));
                    }

                    //now allow the investor to withdraw
                    return response()->json(array('message'=>2));
                }

            }
            else if($request->action == "proceed"){

                //referral
                if($request->withdraw_by == "maturity" || $request->withdraw_by == "referral" ){

                    if($request->withdraw_by == "referral"){
                        //reset the referral count
                        $investor = DB::table('referres')->where(['email'=>Auth::user()->email])->update(['referral_paid_count'=>0]);
                        
                    }
                    
                    //now update the cashout request table
                    $investor = DB::table('investors')->where(['user'=>Auth::user()->id])->update(['cashout_request'=>1,'cashout_mode'=>$request->cashout_mode]);
                    //now allow the investor to withdraw
                    return response()->json(array('message'=>1));
                }
              
               
            }

        }
    }


    public function withdraw_by_referal(Request $request){

       if($request->isMethod('POST')){

            if($request->action == "inquary"){
                //check if his profile is complete
                $profile_check = DB::table('portfolios')->where(['user_id'=>Auth::user()->id])->count();
                if($profile_check == 0){

                    return response()->json(array('message' =>10));

                }

                //check if his profile picture is there        
                if(Auth::user()->picture == null){

                    return response()->json(array('message' =>10));

                }

                //check if he have anything with us
                $investor = DB::table('investors')->where(['user'=>Auth::user()->id])->count();
                if($investor == 0){

                    return response()->json(array('message' =>0));

                }else{
                    
                    //now check to know how many people he has referred
                    $referre_count = Referre::where(['email'=>Auth::user()->email])->first();
                   if(isset($referre_count)){
                        if($referre_count->referral_paid_count < 5){

                            return response()->json(array('message' =>1));
                        }else{

                            //now allow the investor to withdraw
                            return response()->json(array('message'=>2));
                        }
                   }
                    
                   return response()->json(array('message' =>1));
                    
                }

            }
           

        }
    }


    public function bonus_withdraw_request(Request $request){

        if($request->isMethod('POST')){

            //check if his profile is complete
            $profile_check = DB::table('portfolios')->where(['user_id'=>Auth::user()->id])->count();
            if($profile_check == 0){

                return back()->with('errors','Please complete your account information. Your passport photo must be on white background');

            }

            //check if his profile picture is there        
            if(Auth::user()->picture == null){

                return back()->with('errors','Please complete your account information. Your passport photo must be on white background');

            }
            
            //check if the guy have any referral
            $check = DB::table('referres')->where(['email'=>Auth::user()->email])->count();
            if($check < 1){
              
                return back()->with('errors','You have no bonuses to withdraw');
            }

            //check if the guy has the minimum withdrawable amount
            $check_amount = DB::table('referres')->where(['email'=>Auth::user()->email])->first();
            if($check_amount->bonus < 50000){
              
                return back()->with('errors','You can only withdraw bonuses above 50000');
            }

            else{

                //update the admin on cashout request
                DB::table('referres')->where(['email'=>Auth::user()->email])->update(['withdrawal_request'=>1,'mode_of_payment'=>$request->cashout_mode]);
                return back()->with('success',"Sell order is in progress. You'll be credited in less than 48 hours");
            }

        }

    }
}
