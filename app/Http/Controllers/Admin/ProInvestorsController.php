<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investor;
use App\Models\InvestorMatch;
use App\Models\ProInvestor;
use DB;
use Exception;
use Illuminate\Http\Request;

class ProInvestorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminGuard');
    }

    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {

            $investors = DB::table('pro_investors')->where('status', null)
                ->join('series', 'pro_investors.series', '=', 'series.id')
                ->join('users', 'pro_investors.user', '=', 'users.id')
                ->select('series.*', 'users.*', 'pro_investors.*')->paginate(200);

            return view('/admin/manage_pro_investors', compact('investors'));

        }
    }

    public function details(Request $request)
    {

        if ($request->isMethod('POST')) {

            try {

                //get the pro-investor and details of the series
                $investor = ProInvestor::where('pro_investors.id', $request->pro_investor_id)
                    ->join('users', 'pro_investors.user', '=', 'users.id')
                    ->join('series', 'pro_investors.series', '=', 'series.id')
                    ->select('users.email', 'series.*', 'pro_investors.*')->first();

                //get amount matched so far
                $amount_matched = InvestorMatch::where('pro_investor', $request->pro_investor_id)->pluck('amount')->sum();

                //get all investors that requested loans
                $requests = Investor::where(['investors.cashout_request' => 1, 'investors.fully_merged' => 0])
                    ->join('users', 'investors.user', '=', 'users.id')
                    ->select('users.email', 'users.first_name', 'users.last_name', 'investors.*')->get();

                return response()->json(array("investor" => $investor, "requests" => $requests, "amount_matched" => $amount_matched));

            } catch (Exception $e) {

                return response()->json($e->getMessage());
            }

        }

    }

    public function investor_match_details(Request $request)
    {
        if ($request->isMethod('POST')) {

            try {

                //get the pro-investor and details of the series
                $amount_matched = InvestorMatch::where('investor', $request->borrower_id)->pluck('amount')->sum();
                $investor_match_history = InvestorMatch::where('investor', $request->borrower_id)->get();

                return response()->json(array("amount_matched" => $amount_matched, "investor_match_history" => $investor_match_history));

            } catch (Exception $e) {

                return response()->json($e->getMessage());
            }

        }
    }

    public function perform_investor_match(Request $request)
    {
        if ($request->isMethod('POST')) {
           
            try {

                //get the pro-investor and details of the series
                InvestorMatch::create(['investor' => $request->borrower_id, 'pro_investor' => $request->lender_id,
                    'amount' => $request->amount]);
                
                    return back()->with('success','Borrower and Lender Maped');

            } catch (Exception $e) {

                return response()->json($e->getMessage());
            }

        }
    }
}
