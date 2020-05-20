<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Auth;
use App\Models\User;
use App\Models\Portfolio;
use App\Models\Announcement;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }
    
    public function index(Request $request)
    {
        if($request->isMethod('GET')){

            //get all the announcements
            $announcements = Announcement::all();

            //get his number of referrals
            $referrals = DB::table('users')->where(['referral'=>Auth::user()->email]);
            $referral_count =  $referrals->count();
            $referrals =  $referrals->get();

            //Profile Completion
            $profile = DB::table('portfolios')->where(['user_id'=>Auth::user()->id]);
            $profile_completion =  $profile->count();
            $profile =  $profile->first();
            //Amount Invested
            $investor = DB::table('investors')->where(['user'=>Auth::user()->id,'visibility'=>1])->first();

            //completed transactions
            $completed = DB::table('investors')->where(['user'=>Auth::user()->id, 'visibility'=>0])->get();

            return view('user.profile', compact('referrals','referral_count','profile_completion','investor','profile','completed','announcements'));
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

                    self::checkPortofolio();
                   
                    $password = bcrypt($request->new_password);
                    $user = DB::table('users')->where(['email'=>Auth::user()->email])->update(['password'=>$password]);
                    return back()->with('success','Password changed successfully');
                }
            }
            else if($request->action == "profile_update"){
                
                $check = Portfolio::where(['user_id'=>Auth::user()->id])->count();
                if($check == 0){
                    //crete a new portofolio
                    Portfolio::create(['user_id'=>Auth::user()->id,'bank'=>$request->bank_name,'phone'=>$request->phone,'account_name'=>$request->account_name,
                    'account_number'=>$request->account_number,'bitcoin_wallet'=>$request->bitcoin_wallet,'ethereum_wallet'=>$request->ethereum_wallet,'street'=>$request->address,
                    'state'=>$request->state,'country'=>$request->country]);

                    return back()->with('success','Profile information updated successfully');

                }else{
                    //update the previous portofolio
                    Portfolio::where(['user_id'=>Auth::user()->id])->update(['bank'=>$request->bank_name,'phone'=>$request->phone,'account_name'=>$request->account_name,
                    'account_number'=>$request->account_number,'bitcoin_wallet'=>$request->bitcoin_wallet,'ethereum_wallet'=>$request->ethereum_wallet,'street'=>$request->address,
                    'state'=>$request->state,'country'=>$request->country]);

                    return back()->with('success','Profile information updated successfully');
                }

            }
            else if($request->action == "other_details"){

                if($request->social_handle != ""){

                    self::checkPortofolio();
                    Portfolio::where(['user_id'=>Auth::user()->id])->update(['social'=>$request->social_handle]);
                }

                if($request->hasFile('profile_picture')){

                    self::checkPortofolio();
                    $profile_picture = self::uploadImage($request,'profile_picture');
                    User::where(['id'=>Auth::user()->id])->update(['picture'=>$profile_picture]);

                }

                if($request->hasFile('id_card')){
                    self::checkPortofolio();

                    $id_card = self::uploadImage($request,'id_card');
                    // $id_card_back = self::uploadImage($request,'id_card_back');
                    Portfolio::where(['user_id'=>Auth::user()->id])->update(['id_card'=>$id_card]);

                }

                if($request->hasFile('id_card_back')){
                    self::checkPortofolio();

                   // $id_card = self::uploadImage($request,'id_card');
                    $id_card_back = self::uploadImage($request,'id_card_back');
                    Portfolio::where(['user_id'=>Auth::user()->id])->update(['id_card_back'=>$id_card_back]);

                }

                return back()->with('success','Additional Information Added');

            }

        }

    }

    public function uploadImage($request,$file_name)
    {

        //upload discription image and create garden
        $extension = $request->file($file_name)->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;
        
        $request->file($file_name)->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }

    public function checkPortofolio()
    {

        $check = Portfolio::where(['user_id'=>Auth::user()->id])->count();
        if($check == 0){
            //crete a new portofolio
            Portfolio::create(['user_id'=>Auth::user()->id]);
        }
    }
}
