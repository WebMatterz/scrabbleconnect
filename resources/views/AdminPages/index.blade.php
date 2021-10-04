@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Dashboard</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Dashboard</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 @include('AdminInc.message')


 @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif







                   























  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
        <div class="card-header">
        <h4 class="card-title">Players</h4>
      </div>
          <div class="card-body" style="background: #fff;">
          
            





<div class="table-responsive">
  <table class="table table-centered table-nowrap table-hover table-stripped" id="players_datatable">
                                                <thead>
                                                    <tr style="background: teal; color: #fff;">
                                                        <th>#</th>
                                                         <th>Player Name</th>
                                                        <th>UserName</th>
                                                        <th>Email</th>
                                                        <th>Gender</th>
                                                        <th>Phone Number</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th>Citizenship</th>
                                                        <th>Category</th>
                                                        <th>Dictionary</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        <th>Email</th>
                                                        <th>Gender</th>
                                                        <th>Phone Number</th>
                                                        <th>State</th>
                                                        <th>Country</th>
                                                        <th>Citizenship</th>
                                                        <th>Category</th>
                                                        <th>Dictionary</th>
                                                        <th>Created At</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                    @foreach($players as $player)

                                                    <tr>
                                                        <td>{{$no}}</td>
                                                        <td>{{$player->name}} {{$player->lastname}}</td>
                                                        <td>@<?php echo $player->username;?></td>
                                                        <td>{{$player->email}}</td>
                                                        <td>{{$player->gender}}</td>
                                                        <td>{{$player->phone_no}}</td>
                                                        <td>{{$player->state}}</td>
                                                        <td>{{$player->country}}</td>
                                                        <td>{{$player->citizenship}}</td>
                                                        <td>{{$player->category}}</td>
                                                        <td>{{$player->dictionary}}</td>
                                                        <td>{{$player->created_at}}</td>

                                                       
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















</div>
</div>
</div>

<script src="{{asset('js/app.js')}}"></script>

<script type="text/javascript">
 $(document).ready(function(){
var _tokens = $('input[name=_token]').val();


$('#players_datatable').DataTable();





      });

</script>
                        

                       


			


@endsection