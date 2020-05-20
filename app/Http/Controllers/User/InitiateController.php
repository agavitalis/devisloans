<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Series;
use App\Models\ProInvestor;
use App\Models\Investor;
use App\Models\BitcoinAddress;

class InitiateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }

    public function index(Request $request){

        if($request->isMethod('GET')){

            $series = Series::where(['active'=>1])->get();
            return view('/user/initiate_transaction',compact('series'));

        }else if($request->isMethod('POST')){
            
            //check previous loans
            $count = ProInvestor::where(['user'=>Auth::user()->id])->count();
            $count2 = Investor::where(['user'=>Auth::user()->id, 'visibility'=>'1'])->count();
            if($count > 0 || $count2 > 0){
                return back()->with(['errors'=>'You have a pending transaction to complete. Please finalize the transaction first or cancel the previous transaction to initiate a new one']);
            }

            $check_series = Series::where(['id'=>$request->series_id])->first();
            ProInvestor::create(['series'=>$request->series_id,'amount'=>$check_series->amount,'user'=>Auth::user()->id]);
            return back()->with(['success'=>'Luvion have been notified on your interest to lend. Click on the finalize to see the account details of who to lend']);

            
        }
        
    }
}
