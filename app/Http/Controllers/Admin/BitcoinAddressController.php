<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BitcoinAddress;

class BitcoinAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminGuard');
    }
    
    public function index(Request $request){
        if($request->isMethod('GET')){

            $address = BitcoinAddress::all();
            return view('/admin/bitcoin_address',compact('address'));

        }else if($request->isMethod('POST') && $request->action == "create"){
          
            BitcoinAddress::create(['wallet_address'=>$request->wallet_address,'wallet_type'=>$request->wallet_type,'active'=>0]);
            return back()->with('success', 'Bitcoin address successfully added');

        
        }else if($request->isMethod('POST') && $request->action == "activate"){
           
            try {

                $check_type = BitcoinAddress::where(['id'=>$request->id])->first();
                
                if($check_type->wallet_type == "Bitcoin"){
                    BitcoinAddress::where(['active'=>1,'wallet_type'=>'Bitcoin'])->update(['active' => 0]);
                }else{
                    BitcoinAddress::where(['active'=>1,'wallet_type'=>'Ethereum'])->update(['active' => 0]);
                }
                
            } finally {
                //set another to be active
                BitcoinAddress::where(['id'=>$request->id])->update(['active' => 1]);
                return back()->with('success', 'Bitcoin address made active');
            }
                   
        }else if($request->isMethod('POST') && $request->action == "delete"){
                
            BitcoinAddress::find($request->id)->delete();
            return back()->with('success', 'Bitcoin address deleted');

        }
    }
}
