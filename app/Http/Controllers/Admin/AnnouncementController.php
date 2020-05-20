<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Announcement;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('GET')){

            $announcements = Announcement::all();
            return view('admin.announcements',compact('announcements'));

        }
        else if($request->isMethod('POST')){
           
            Announcement::create(['heading'=>$request->title,'content'=>$request->content,'picture'=>$request->picture]);
            return back()->with('success', 'Announcement Created');

        }
      
    }

    public function delete(Request $request, $id = null){

        Announcement::where(['id'=>$id])->delete();
        return back()->with('success', 'Announcement Successfully Deleted');

    }


}
