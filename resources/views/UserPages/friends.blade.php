@extends('layouts.app')
@section('content')

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Friends</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Dashboard</li><li class="breadcrumb-item active">Chat</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
<input type="hidden" name="my_id" id="my_id" value="{{auth()->user()->id}}">










<div class="d-lg-flex">
                            <div class="chat-leftsidebar mr-lg-4">
                                <div class="">
                                    <div class="py-4 border-bottom">
                                        <div class="media">
                                            <div class="align-self-center mr-3">
                                                <img src="{{ asset('assets/images/users/noimage.jpg') }}" class="avatar-xs rounded-circle" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h5 class="font-size-15 mt-0 mb-1">{{auth()->user()->username}}</h5>
                                                <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active</p>
                                            </div>

                                            <div>
                                                <!-- <div class="dropdown chat-noti-dropdown active">
                                                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-bell bx-tada"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                      <a class="dropdown-item" href="#">Action</a>
                                                      <a class="dropdown-item" href="#">Another action</a>
                                                      <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="search-box chat-search-box py-4">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div> -->

                                    <div class="chat-leftsidebar-nav">
                                        <ul class="nav nav-pills nav-justified">
                                       <!--      <li class="nav-item">
                                                <a href="#chat" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                    <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Friends</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#group" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    <i class="bx bx-group font-size-20 d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Group</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#contact" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Contacts</span>
                                                </a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content py-4">
                                            <div class="tab-pane show active" id="chat">
                                                <div>
                                                    <h5 class="font-size-14 mb-3">Friends</h5>
                                                    <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;" id="friend_list">
                                                        

                                                        
                                           
                                                    </ul>
                                                </div>
                                            </div>

                                           

                                      
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="w-100 user-chat">
                                <div class="card">
                                    <div class="p-4 border-bottom ">
                                        <div class="row">
                                            <div class="col-md-4 col-9">
                                                <h5 class="font-size-15 mb-1" id="chat_name"> </h5>
                                                <p class="text-muted mb-0" id="chat_username"> </p>
                                            </div>
                                            <div class="col-md-8 col-3">
                                                <ul class="list-inline user-chat-nav text-right mb-0">
                                      
                                              
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    <div>
                                        <div class="chat-conversation p-3">
                                            <ul class="list-unstyled" data-simplebar style="max-height: 470px;scroll-behavior: smooth; overflow-y: auto;" id="chat_list">
                                               
                                                
    
                                                
                                                
                                            </ul>
                                        </div>
                                        <div class="p-3 chat-input-section" id="box_area" style="display: none; background: teal;">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control chat-input" placeholder="Enter Message..." id="msg" name="msg">
                                                 
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="hidden" name="receiver_id" id="receiver_id">
                                                    <button type="submit" class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light" id="send_btn"><span class="d-none d-sm-inline-block mr-2">Send</span> <i class="mdi mdi-send"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                          </div>





















































































































                </div>
                <!-- End Page-content -->
              </div>
            <!-- end main content-->
          </div>




<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();


FetchFriends();

function FetchFriends(search_friend=""){

var my_id = $('#my_id').val();
$.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.getfriends')}}",
        method:"POST",
        data:{search_friend:search_friend,_tokens:_tokens},
        success:function(data){

    console.log(data);

    $('#friend_list').empty();

    if (data == '') {
$('#friend_list').html('<center><p>NO RECORD FOUND</p></center>');
    }else{

       $.each(data, function(i, value){


        if (my_id == value.sender_id) {


 var friend_list = '<li><a href="#" id="open_chat" data-name="'+value.receiver_name+'" data-lastname="'+value.receiver_lastname+'" data-username="'+value.receiver_username+'" data-id="'+value.receiver_id+'"><div class="media"><div class="align-self-center mr-3"></div><div class="align-self-center mr-3"><img src="/assets/images/users/noimage.jpg" class="rounded-circle avatar-xs" alt=""></div><div class="media-body overflow-hidden"><h5 class="text-truncate font-size-14 mb-1">'+value.receiver_name+' '+value.receiver_lastname+'</h5><p class="text-truncate mb-0"> @'+value.receiver_username+'</p></div><div class="font-size-11">12 min</div></div></a></li>';
        }else{
var friend_list = '<li><a href="#" id="open_chat" data-name="'+value.sender_name+'" data-lastname="'+value.sender_lastname+'" data-username="'+value.sender_username+'" data-id="'+value.sender_id+'"><div class="media"><div class="align-self-center mr-3"></div><div class="align-self-center mr-3"><img src="/assets/images/users/noimage.jpg" class="rounded-circle avatar-xs" alt=""></div><div class="media-body overflow-hidden"><h5 class="text-truncate font-size-14 mb-1">'+value.sender_name+' '+value.sender_lastname+'</h5><p class="text-truncate mb-0"> @'+value.sender_username+'</p></div><div class="font-size-11">12 min</div></div></a></li>';

        }

        $('#friend_list').append(friend_list);

 
      });

    }


  }


});

}




$('body').delegate('#open_chat','click',function(event){

  event.preventDefault();

  var name = $(this).data('name');
  var username = $(this).data('username');
  var id = $(this).data('id');
  var lastname = $(this).data('lastname');


  $('#chat_name').html(name+' '+lastname);
  $('#chat_username').html('@'+username);
  $('#receiver_id').val(id);

  $('#box_area').show();
  fetchMessage(id)


});




$('#send_btn').click(function(event){

    event.preventDefault();

    var msg = $('#msg').val();
    var receiver_id = $('#receiver_id').val();

    if (msg == '') {


    }else{

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.sendmessage')}}",
        method:"POST",
        data:{msg:msg,receiver_id:receiver_id,_tokens:_tokens},
        success:function(data){

    console.log(data);

    if (data == 'success') {
        fetchMessage(receiver_id);
        $('#msg').val('');
    }else{

        swal("Opps!", data, "error");
    }

                }
        
         })

    }

});




function fetchMessage(friend_id){
var my_id = $('#my_id').val();
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.fetchmessages')}}",
        method:"POST",
        data:{friend_id:friend_id,_tokens:_tokens},
        success:function(data){

    //console.log(data);
$('#chat_list').empty();


    if (data == '') {

$('#chat_list').html('<li><div class="conversation-list"><div class="ctext-wrap"><p>NO MESSAGE FOUND</p></div></div></li>');
    }else{

         $.each(data, function(i, value){

            if (value.sender_id == my_id) {

var chat_list = '<li class="right"><div class="conversation-list"><div class="ctext-wrap"><p>'+value.msg+'</p><p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> '+value.time_sent+'</p></div></div></li>';

            }else{

                if (value.status == 1) {
var status = '<p class="chat-time mb-0" style="color:green; font-weight: 700;"><i class="bx bx-time-five align-middle mr-1"></i> '+value.time_sent+'</p>';
                }else{

                  var status = '<p class="chat-time mb-0"><i class="bx bx-time-five align-middle mr-1"></i> '+value.time_sent+'</p>';  
                }

var chat_list = '<li><div class="conversation-list"><div class="ctext-wrap"><p>'+value.msg+'</p>'+status+'</div></div></li>';
            }

            $('#chat_list').append(chat_list);
 
});


    }



                }
        
         })

}













	});
</script>            







@endsection 