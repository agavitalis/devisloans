<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProInvestor;
use App\Models\InvestorMatch;
use Auth;
use DB;
use Illuminate\Http\Request;

class FinalizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('userGuard');
    }

    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {

            //Check if he has an investment
            $investment = DB::table('pro_investors')->where(['user' => Auth::user()->id])->get();

            if ($investment->count() < 1) {
                return redirect("/user_dashboard")->with('errors', 'You have no transaction to finalize. Please initiate a transaction using the initiate button');
            } else {

                //get the assumed
                $investment = DB::table('pro_investors')->where(['user' => Auth::user()->id])->first();

                $matches = DB::table('investor_matches')->where(['pro_investor' => $investment->id])
                ->join('investors', 'investor_matches.investor', '=', 'investors.id')
                ->join('users', 'investors.user', '=', 'users.id')
                ->select('users.email', 'users.first_name', 'users.last_name', 'investor_matches.*')->get();
            

                return view('/user/finalize_transaction', compact('matches'));
            }

        } else if ($request->isMethod('POST') && $request->action == "delete") {

            //ProInvestor::find($request->id)->delete();
            return back()->with('success', 'Transaction successfully terminated');

        } else if ($request->isMethod('POST') && $request->action == "pop") {

            $image_name = $this->uploadImage($request);

            InvestorMatch::find($request->id)->update(['evidence' => $image_name]);
            return back()->with('success', 'Your payment was completed and is now on review. Please contact the borrower to confirm your payment as soon as possible.');
        }
    }

    public function uploadImage($request)
    {

        //upload discription image and create garden
        $extension = $request->file('pop')->getClientOriginalExtension();
        $new_name = round(microtime(true)) . '.' . $extension;

        $request->file('pop')->storeAs(
            'public/uploads', $new_name
        );

        return $new_name;
    }

    public function get_investor_details(Request $request){

        //get the assumed
        $investor_details = DB::table('users')->where(['email' => $request->email])
        ->join('portfolios', 'portfolios.user_id', '=', 'users.id')
        ->select('portfolios.*','users.*')->first();
        
        return response()->json(array("details"=>$investor_details));
    }
}
