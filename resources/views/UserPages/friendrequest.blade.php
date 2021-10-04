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
                                    <h4 class="mb-0 font-size-18">Friend Request</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Dashboard</li><li class="breadcrumb-item active">Friend Request</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->







  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: #fff;">
          
            





<div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="players_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        
                                                        <th>Time</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        
                                                        <th>Time</th>
                                                        <th>Action</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                    @foreach($friendrequest as $friend)

                                                    <tr>
                                                        <td>{{$no}}</td>
                                                        <td>{{$friend->name}} {{$friend->lastname}}</td>
                                                        <td>@<?php echo $friend->username;?></td>
                                                        <td>{{ Carbon\Carbon::parse($friend->time_created)->diffForHumans()}}</td>
                                                        <td><button class="btn btn-primary btn-sm" data-id="{{$friend->id}}" id="accept_request">Accept</button> <button class="btn btn-danger btn-sm" data-id="{{$friend->id}}" id="decline_request">Decline</button></td>
                                                    </tr>

                                                    <?php $no++;?>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>







    
              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->






                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
             
            </div>
            <!-- end main content-->




<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

$('#players_datatable').DataTable();



$('body').delegate('#accept_request', 'click', function(event){


    event.preventDefault();

    var sender_id = $(this).data('id');
    



        swal({
      title: "Are you sure?",
      text:"",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {


$.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.acceptrequest')}}",
        method:"POST",
        data:{sender_id:sender_id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "Accepted Successfully", "success");
        window.location.reload();

            }else{

                swal("Opps!", data, "error");

            }


          }
        
         }) 

            } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })



});












$('body').delegate('#decline_request', 'click', function(event){


    event.preventDefault();

    var sender_id = $(this).data('id');
  



        swal({
      title: "Are you sure?",
      text:"",
      icon: "warning",
      buttons: [
        'No, cancel it!',
        'Yes, I am sure!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) {
      if (isConfirm) {


$.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.declinerequest')}}",
        method:"POST",
        data:{sender_id:sender_id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "Declined Successfully", "success");
       window.location.reload();
            }else{

                swal("Opps!", data, "error");

            }


          }
        
         }) 

            } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })



});





	});
</script>            







@endsection 