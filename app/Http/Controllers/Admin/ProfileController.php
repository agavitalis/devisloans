<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Auth;
use App\Models\Portfolio;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminGuard');
    }
    
    public function index(Request $request)
    {
        if($request->isMethod('GET')){

            //get his number of referrals
            $referrals = DB::table('users')->where(['referral'=>Auth::user()->email]);
            $referral_count =  $referrals->count();
            $referrals =  $referrals->get();

            //Profile Completion
            $profile = DB::table('portfolios')->where(['user_id'=>Auth::user()->id]);
            $profile_completion =  $profile->count();
            $profile =  $profile->first();

            //Amount Invested
            $investor = DB::table('investors')->where(['user'=>Auth::user()->id])->first();

            //completed transactions
            $completed = DB::table('investors')->where(['user'=>Auth::user()->id, 'visibility'=>0])->get();

            return view('admin.profile', compact('referrals','referral_count','profile_completion','investor','profile','completed'));
        }
        else if($request->isMethod('POST')){
            if($request->action == "password"){
                if($request->new_password !== $request->password_confirm){
                    return back()->with('errors','New Password Mismatch');
                }
                //grab the user 
                $user = DB::table('users')->where(['email'=>Auth::user()->email])->first();
                $check = Hash::check($request->current_password, $user->password);

                if(!$check){
                    return back()->with('errors','Current Password given is incorrect');
                }else{
                   
                    $password = bcrypt($request->new_password);
                    $user = DB::table('users')->where(['email'=>Auth::user()->email])->update(['password'=>$password]);
                    return back()->with('success','Password changed successfully');
                }
            }
            else{
                
                $check = Portfolio::where(['user_id'=>Auth::user()->id])->count();
                if($check == 0){
                    //crete a new portofolio
                    Portfolio::create(['user_id'=>Auth::user()->id,'bank'=>$request->bank_name,'account_name'=>$request->account_name,
                    'account_number'=>$request->account_number,'bitcoin_wallet'=>$request->bitcoin_wallet,'street'=>$request->address,
                    'state'=>$request->state,'country'=>$request->country]);

                    return back()->with('success','Profile information updated successfully');

                }else{
                    //crete a new portofolio
                    Portfolio::where(['user_id'=>Auth::user()->id])->update(['user_id'=>Auth::user()->id,'bank'=>$request->bank_name,'account_name'=>$request->account_name,
                    'account_number'=>$request->account_number,'bitcoin_wallet'=>$request->bitcoin_wallet,'street'=>$request->address,
                    'state'=>$request->state,'country'=>$request->country]);

                    return back()->with('success','Profile information updated successfully');
                }

            }
        }

    }
}
