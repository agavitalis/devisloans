<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ReferralBonus;
use App\Models\Referre;

use Illuminate\Http\Request;

class ReferralBonusController extends Controller
{
    public function bonus(Request $request){
        if($request->isMethod('GET')){

            $bonus = ReferralBonus::all();
            return view('admin.referralbonus',compact('bonus'));

        }
        else if($request->isMethod('POST')){
           
            ReferralBonus::where(['id'=> 1])->update(['bonus'=>$request->bonus]);
            return back()->with('success', 'Referral Bonus Updated');

        }
      
    }

    public function manage_referral_bonus(Request $request){

        if($request->isMethod('POST')){

            if($request->action == "mark_paid"){

                Referre::where(['id'=> $request->id])->update(['request_status'=>1]);
                return back()->with('success', 'Referral Bonus Paid');

            }
            else if($request->action == "mark_delete"){

                Referre::where(['id'=> $request->id])->delete();
                return back()->with('success', 'Referral Bonus Deleted');
            }
           
           

        }

    }
}
