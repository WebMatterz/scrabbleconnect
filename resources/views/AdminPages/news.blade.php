@extends('AdminLayouts.app')
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
                                    <h4 class="mb-0 font-size-18">News</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Create</li><li class="breadcrumb-item active">News</li>
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
                                                        <th>Title</th>
                                                        
                                                        
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                        <th>Title</th>
                                                        
                                                        
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                </tfoot>
                                                <tbody>

                                                    <?php $no = 1;?>
                                                    
                                                    @foreach($news as $new)

                                                    <tr>
                                                        <td>{{$no}}</td>
                                                        <td>{{$new->news_title}}</td>
                                                       
                                                        <td>{{$new->created_at}}</td>
                                                        <td><a href="viewnews/{{$new->news_id}}" class="btn btn-success btn-sm">view</a> <a href="editnews/{{$new->news_id}}" class="btn btn-info btn-sm">edit</a> <a href="javascript:void(0);" class="btn btn-danger btn-sm" id="delete_news" data-id="{{$new->news_id}}" >delete</a></td>
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

    

<script type="text/javascript">
	
	$(document).ready(function(){

var _tokens = $('input[name=_token]').val();

$('#players_datatable').DataTable();


$('body').delegate('#delete_news', 'click', function(event){


    event.preventDefault();

    var id = $(this).data('id');
  



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
        url:"{{route('admin.deletenews')}}",
        method:"POST",
        data:{id:id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "Deleted Successfully", "success");
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