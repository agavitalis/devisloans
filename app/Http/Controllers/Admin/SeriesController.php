<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Series;
use DB;

class SeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminGuard');
    }
    
    public function index(Request $request){
        if($request->isMethod('GET')){

            $series = Series::all();
            return view('/admin/manage_series',compact('series'));

        }else if($request->isMethod('POST')){

            if($request->action == "create"){

                $interest_rate = $request->interest / $request->duration;

                Series::create([ 'series_name'=>$request->series_name,'amount'=>$request->amount,
                'interest_rate'=>$interest_rate, 'total_interest'=>$request->interest,'duration'=>$request->duration, 'maintenance_fee'=>$request->maintenance_charge]);
               
                return back()->with('success', 'Series Successfully Created');

            }
            else if($request->action == "inquary"){
               
                $series = DB::table('series')->where(['id'=>$request->id])->first();
                return response()->json($series);
            }
            else if($request->action == "edit"){
               
                Series::where(['id'=>$request->id])->update([ 'series_name'=>$request->series_edit,
                'amount'=>$request->amount_edit,
                'maintenance_fee'=>$request->maintenance_fee_edit, 'total_interest'=>$request->interest_edit,'duration'=>$request->duration_edit]);

                return back()->with('success', 'Series Successfully Updated');
            }
            else if($request->action == "delete"){
               
                $series = DB::table('series')->where(['id'=>$request->id])->delete();
                return response()->json($series);
            }
          
          

        }
    }
}
