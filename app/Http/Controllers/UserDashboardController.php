<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\FriendRequest;

class UserDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */




    public function index(){


        $title = "Dashboard";

         return view('UserPages.index')->with('title', $title);
    }



    public function settings(){

        $title = "Settings";

         return view('UserPages.settings')->with('title', $title);
    }



    public function settingsupdate(Request $request){

        if ($request->ajax()) {
           

           $update = User::find(auth()->user()->id);
           $update->name = $request->name;
           $update->lastname = $request->lastname;
           $update->phone_no = $request->phone_no;
           $update->email = $request->email;
           $update->state = $request->state;
           $update->country = $request->country;
           $update->category = $request->category;
           $update->dictionary = $request->dictionary;

           if ($request->password == '') {
             //
           }else{

            $update->password = bcrypt($request->password);

           }

           $save = $update->save();

           if ($save) {
              
return response('success');

           }else{

return response('Error, Try Again Later');

           }

           // return response($request->name);






        }

    }









    public function findplayer()
    {
        $title = "Find Player";

        return view('MainPages.findplayer')->with('title', $title);
    }






}
