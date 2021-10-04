<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;
use Mail;
use App\Mail\ContactUsMail;

class MainController extends Controller
{
    public function index(){


    	$title = "Home";
$news = News::orderBy('news_id','DESC')->take(4)->get();
    	return view('MainPages.index')->with('title',$title)->with('news',$news);
    }


public function aboutus(){

	$title = "About Us";

    	return view('MainPages.about')->with('title',$title);


}



public function news(){

	$title = "News";
$news = News::orderBy('news_id','DESC')->paginate(10);
    	return view('MainPages.news')->with('title',$title)->with('news',$news);
}


public function resources(){

	$title = "Resources";

    	return view('MainPages.resources')->with('title',$title);
}




public function contact(){

	$title = "Contact Us";

    //Mail::to('lasisisaheed5@gmail.com', 'ScrabbleConnect')->send(new ContactUsMail('dd', 'dsfasd','sdfasd', 'asdfasf', 'admin'));

    	return view('MainPages.contact')->with('title',$title);
}




public function contactus(Request $request){

    if ($request->ajax()) {
     
        Mail::to($request->email, $request->name)->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->message, 'user'));

         Mail::to('lasisisaheed5@gmail.com', 'ScrabbleConnect')->send(new ContactUsMail($request->email, $request->name,$request->phone_no, $request->message, 'admin'));

         return response('success');


    }
}









}
