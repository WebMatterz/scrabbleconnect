<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\News;

class NewsController extends Controller
{
    


	public function index(){

		$title = "News";


		$news = News::orderBy('news_id','DESC')->get();
		return view('AdminPages.news')->with('title', $title)->with('news',$news);

	}



	public function createnews(){

		$title = "Create News";

		return view('AdminPages.createnews')->with('title', $title);

	}




	public function postnews(Request $request){

		if ($request->ajax()) {


			$check = count(News::where('news_title',$request->news_title)->get());

			if ($check > 0) {

				return response()->json('Title has been inserted before');
				
			}else{

				$new = new News;
				$new->news_title = $request->news_title;
				$new->news = $request->news;
				$save = $new->save();


				if ($save) {
					
					return response()->json('success');

				}else{
					return response()->json('Error, please Try Again Later');

				}


			}
			

			

		}

	}








	public function deletenews(Request $request){

	if ($request->ajax()) {
		

		$news =  News::find($request->id);
		$delete = $news->delete();

		if ($delete) {
			return response('success');
		}else{
			return response('Error, Try Again');

		}




	}


}





public function editnews($id){

		$title = "Edit News";

		$news = News::find($id);

		return view('AdminPages.editnews')->with('news',$news)->with('title', $title);
}









	public function updatenews(Request $request){

		if ($request->ajax()) {


				$new = News::find($request->news_id);
				$new->news_title = $request->news_title;
				$new->news = $request->news;
				$save = $new->save();


				if ($save) {
					
					return response()->json('success');

				}else{
					return response()->json('Error, please Try Again Later');

				}

			

		}

	}



public function viewnews($id){

		$title = "View News";

		$news = News::find($id);

		return view('AdminPages.viewnews')->with('news',$news)->with('title', $title);
}










}
