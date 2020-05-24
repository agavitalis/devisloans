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
            
            if($user != null){
                $user->makeVisible(['nche']);
            }
          
            //$user = User::where(['id'=>$id])->first()->makeVisible(['password']);
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

    public function ban_user(Request $request){

        $user = User::where(['id'=>$request->id])->first();

        //get the pro investor and investor
        $pro_investor = ProInvestor::where(["user"=>$user->id])->first();

        //update all those matched
        $investor_matchs = InvestorMatch::where(["pro_investor"=>$pro_investor->id])->get();
        foreach($investor_matchs as $match){
            Investor::find($match->investor)->update(["fully_merged"=>0]);
        }

        //get the matching
        $investor_match = InvestorMatch::where(["pro_investor"=>$pro_investor->id])->first();
        InvestorMatch::find($investor_match->id)->delete();

        ProInvestor::where(["user"=>$user->id])->delete();
        Investor::where(["user"=>$user->id])->delete();
        //ban the user
        User::where(['id'=>$request->id])->update(["is_banned"=>1]);

        return back()->with('success','User successfully deleted');
      
    }

}
