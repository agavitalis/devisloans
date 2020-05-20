<?php

namespace App\Http\Controllers\User;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class CompleteRegistration extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function complete_registration(Request $request){

        if($request->isMethod('GET')){

            return view('user.complete_registration');

        }else if($request->isMethod('POST')){

            $password = Hash::make($request->password);
            User::where(['id'=>Auth::user()->id])->update(['first_name'=>$request->first_name, 
            'last_name'=>$request->last_name, 'password'=>$password]);
            
            return redirect('user_dashboard');
        
        }
    }
}
