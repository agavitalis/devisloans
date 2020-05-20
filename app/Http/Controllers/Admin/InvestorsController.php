<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Investor;
use DB;

class InvestorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminGuard');
    }
    
    public function index(Request $request){
        
        if($request->isMethod('GET')){

            $investors = DB::table('investors')->where('request_status','=','0')
            ->join('series', 'investors.series', '=', 'series.id')
            ->join('users', 'investors.user', '=', 'users.id')
            ->select('series.*','users.*','investors.*')->paginate(200);
            return view('/admin/manage_investors',compact('investors'));

        }else if($request->isMethod('POST')){
          
            
        }
    }

    public function withdraw__request(Request $request){

        if($request->isMethod('GET')){

            $investors = DB::table('investors')->where(['cashout_request'=>1])
            ->join('portfolios', 'investors.user', '=', 'portfolios.user_id')
            ->join('users', 'users.id', '=', 'portfolios.user_id')
            ->select('portfolios.*','users.*','investors.*')->get();
            

            return view('/admin/withdrawal_request',compact('investors'));

        }
        if($request->isMethod('POST')){

            if($request->action == "mark_paid"){

                
                DB::table('investors')->where(['id'=>$request->id])->update(['request_status'=> 1]);
                return back()->with('success','Transaction status successfully updated');

            }else if($request->action == "mark_delete"){

                $finalized_on = Carbon::now();
                Investor::where(['id'=>$request->id])->delete();
                return back()->with('success','Transaction successfully deleted');

            }

        }
        
    }

    public function bonus__request(Request $request){

        if($request->isMethod('GET')){

            $investors = DB::table('referres')
            ->join('users', 'users.email', '=', 'referres.email')
            ->join('portfolios', 'users.id', '=', 'portfolios.user_id')
            ->select('users.*','portfolios.*','referres.*')->get();
            
            return view('/admin/bonus_request',compact('investors'));

        }
    }
}
