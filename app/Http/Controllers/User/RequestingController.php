<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use App\Models\Requesting;

class RequestingController extends Controller
{
    public function requesting(Request $request){

        Requesting::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'phone'=>$request->phone,
        'email'=>$request->email,'country'=>$request->country,'business_name'=>$request->business_name,'body'=>$request->message,
        'profession'=>$request->profession,'request_type'=>$request->request_type]);

        return back()->with('success','Your request was successfully sent');

    }
}
