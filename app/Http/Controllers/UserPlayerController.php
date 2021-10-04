<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\FriendRequest;
use App\Chat;

class UserPlayerController extends Controller
{


	public function index(){

		$title = "Find Player";

		return view('UserPages.findplayer')->with('title', $title);


	}



public function find(Request $request){

	if ($request->ajax()) {
		
		$user_id = auth()->user()->id;

		$users = User::with(['sender'=> function ($query) use ($user_id) {

   $query->where('receiver_id', $user_id);

}])->with(['sender_status'=> function ($query) use ($user_id) {

   $query->where('receiver_id', $user_id)->where('status', 1);

}])->with(['receiver'=> function ($query) use ($user_id) {

   $query->where('sender_id', $user_id);

}])->with(['receiver_status'=> function ($query) use ($user_id) {

   $query->where('sender_id', $user_id)->where('status',1);

}])->where('country', $request->country)->where('category', $request->category)->where('id','!=',auth()->user()->id)->get();

		return response($users);



	}
}





public function addfriend(Request $request){

	if ($request->ajax()) {
		

		$new = new FriendRequest;
		$new->sender_id = auth()->user()->id;
		$new->receiver_id = $request->receiver_id;
		$new->status = 0;
		$save = $new->save();

		if ($save) {
			return response('success');
		}else{
			return response('Error, Try Again');

		}




	}


}




public function cancelrequest(Request $request){

	if ($request->ajax()) {
		

		$delete = FriendRequest::where('sender_id', auth()->user()->id)->where('receiver_id', $request->receiver_id)->delete();

		if ($delete) {
			
			return response('success');
		}else{
			return response('Error, Try Again');

		}


	}

	}
	



	public function declinerequest(Request $request){

	if ($request->ajax()) {
		

		$delete = FriendRequest::where('sender_id', $request->sender_id)->where('receiver_id',auth()->user()->id)->delete();

		if ($delete) {
			
			return response('success');
		}else{
			return response('Error, Try Again');

		}


	}

	}





public function acceptrequest(Request $request){

	if ($request->ajax()) {
		

		$accept = FriendRequest::where('sender_id', $request->sender_id)->where('receiver_id',auth()->user()->id)->update(['status'=>1]);

		if ($accept) {
			
			return response('success');
		}else{
			return response('Error, Try Again');

		}


	}

	}






public function unfriend(Request $request){


	if ($request->ajax()) {
	
$delete = FriendRequest::where('sender_id', auth()->user()->id)->where('receiver_id', $request->id)->get();




	if (count($delete)) {

$delete = FriendRequest::where('sender_id', auth()->user()->id)->where('receiver_id', $request->id)->delete();

	if ($delete) {
			
			return response('success');
		}else{
			return response('Error, Try Again');

		}

		
	}else{


		$delete = FriendRequest::where('sender_id', $request->id)->where('receiver_id',auth()->user()->id)->delete();

	if ($delete) {
			
			return response('success');
		}else{
			return response('Error, Try Again');

		}


	}




	}

}






public function friendrequest(){


$title = "Friend Request";


	$friendrequest = FriendRequest::join('users','users.id','=','friend_request.sender_id')->where('receiver_id',auth()->user()->id)->where('status',0)->select('*', 'friend_request.created_at As time_created')->get();

return view('UserPages.friendrequest')->with('title', $title)->with('friendrequest',$friendrequest);

}





public function friends(){

	$title = "Friends";

	 //return FriendRequest::join('users As Sender','Sender.id','=','friend_request.sender_id')->join('users As Receiver','Receiver.id','=','friend_request.receiver_id')->where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->select('Sender.name as sender_name','Receiver.name As receiver_name','Sender.username As sender_username','Receiver.username As receiver_username','sender_id', 'receiver_id')->where('status',1)->with(['sender_message'=> function ($query) {

//    $query->where('sender_id', auth()->user()->id)->where('status',1);

// }])->with(['receiver_message'=> function ($query) {

//    $query->where('receiver_id', auth()->user()->id)->where('status',1);

// }])->get();

		// 	$new = new Chat;
		// $new->sender_id = auth()->user()->id;
		// $new->receiver_id = 2;
		// $new->msg = 'adsfas';
		// $new->time_sent = date('H:i');
		// $new->status = 1;
		// $save = $new->save();

// 	$id = auth()->user()->id;
	
// 		return $chat = Chat::where(function($query) use ($id){
// 	$query->where('sender_id', $id)->where('receiver_id', 2);

// })->orWhere(function($query) use ($id){
// 	$query->where('sender_id', 2)->where('receiver_id', $id);
// })->get();
	return view('UserPages.friends')->with('title',$title);

	
}


public function getfriends(Request $request){

	if ($request->ajax()) {
		
		if ($request->search_friend == '') {
			$friends = FriendRequest::join('users As Sender','Sender.id','=','friend_request.sender_id')->join('users As Receiver','Receiver.id','=','friend_request.receiver_id')->where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->select('Sender.name as sender_name','Receiver.name As receiver_name','Sender.username As sender_username','Receiver.username As receiver_username','sender_id', 'receiver_id','Sender.lastname As sender_lastname', 'Receiver.lastname As receiver_lastname')->where('status',1)->get();
		}else{


		}

		return response($friends);






	}

}




public function sendmessage(Request $request){

	if ($request->ajax()) {
		
		$new = new Chat;
		$new->sender_id = auth()->user()->id;
		$new->receiver_id = $request->receiver_id;
		$new->msg = $request->msg;
		$new->time_sent = date('H:i');
		$new->status = 1;
		$save = $new->save();

		if ($save) {
			return response('success');
		}else{
return response('Error, Try Again');
		}

		//return response($request->msg);

	}
}






public function fetchmessages(Request $request){

	if ($request->ajax()) {


		$id = $request->friend_id;

		Chat::where('sender_id',$id)->where('receiver_id',auth()->user()->id)->update(['status'=>0]);
	
		$chats = Chat::where(function($query) use ($id){ $query->where('sender_id', $id)->where('receiver_id', auth()->user()->id); })->orWhere(function($query) use ($id){
	$query->where('sender_id', auth()->user()->id)->where('receiver_id', $id);
})->get();

return response($chats);

	}

}









    
}
