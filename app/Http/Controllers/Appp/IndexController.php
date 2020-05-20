<?php

namespace App\Http\Controllers\Appp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   
    public function index()
    {
        return view('appp.index');
    }

    public function how_it_works()
    {
        return view('appp.how_it_works');
    }

    public function about()
    {
        return view('appp.about');
    }

    public function faq()
    {
        return view('appp.faq');
    }

    public function plans()
    {
        return view('appp.plans');
    }

    public function contact()
    {
        return view('appp.contact');
    }  


}
