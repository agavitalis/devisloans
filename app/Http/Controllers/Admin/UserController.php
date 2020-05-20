<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Requesting;

class UserController extends Controller
{
    public function manage_users(Request $request, $id = null){

        if($id == null){

            $users = User::all();
            return view('admin.manage_users',compact('users'));
            
        }else{

            $user = User::where(['users.id'=>$id])
            ->join('portfolios', 'portfolios.user_id', '=', 'users.id')
            ->first();
            return view('admin.user_profile',compact('user'));

        }
      
    }


    public function manage_requests(Request $request, $id = null){

        if($id == null){

            $requestings = Requesting::paginate(50);
            return view('admin.manage_requests',compact('requestings'));

        }else{

            Requesting::where(['id'=>$id])->delete();
            return back()->with('success','Request successfully deleted');

        }
      
    }

    
    public function delete_user(Request $request){

        User::where(['id'=>$request->id])->delete();
        return back()->with('success','User successfully deleted');
      
    }

}
