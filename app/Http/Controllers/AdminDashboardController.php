<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Admin;

class AdminDashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('admin');

    }




public function index(){

	$title = "Dashboard";

	$players = User::orderBy('id','DESC')->take(10)->get();

	return view('AdminPages.index')->with('title',$title)->with('players', $players);

}




public function players(){

	$title = "Players";

	$players = User::orderBy('id','DESC')->get();

	return view('AdminPages.players')->with('title',$title)->with('players', $players);

}




public function resetpassword(){

    $title = "Password Reset";

    return view('AdminPages.passwordreset')->with('title',$title);

}



public function passwordreset(Request $request){

    if ($request->ajax()) {


        $update = Admin::find(auth()->guard('admin')->user()->id);
        $update->password = bcrypt($request->password);
        $save = $update->save();

        if ($save) {
            
            return response('success');

        }else{

            return response('Error, Please Try Again.');

        }
        
        
    }
}







}
