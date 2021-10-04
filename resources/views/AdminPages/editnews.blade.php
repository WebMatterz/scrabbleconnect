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
                                      
                                            <li class="breadcrumb-item active">Edit</li><li class="breadcrumb-item active">{{$news->news_title}}</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->







  <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: teal;">
          
            <form id="upload_news_form" method="POST" enctype="multipart/form-data">
 
 {{ csrf_field() }}

<div class="form-group">
          <label style="color: #fff;">Edit News Title</label>
           <input type="test" class="form-control" id="news_title" name="news_title" placeholder="Enter News Title" value="{{$news->news_title}}">
         <small style="color: #fff; font-weight: 700;"></small>
        </div>

 



    <div class="form-group">
          <label style="color: #fff;">News Content</label>
        
           <textarea class="form-control" id="news" name="news">{!! $news->news !!}</textarea>
         <small style="color: #fff; font-weight: 700;"></small>
        </div>

       
        <input type="hidden" name="news_id" id="news_id" value="{{$news->news_id}}">
     
   


         
    

   <div class="loader"></div>
 <button class="btn btn-warning" id="create_task_btn">Update News</button>




      </form>
    
              
              
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



 <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace('news');
  
</script>
    

<script type="text/javascript">
    
    $(document).ready(function(){

var _tokens = $('input[name=_token]').val();


function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }






    $('#upload_news_form').on('submit', function(e){

   for (instance in CKEDITOR.instances) 
{
    CKEDITOR.instances[instance].updateElement();
}

e.preventDefault();
 var data = $(this).serialize();
      var url = $(this).attr('action');
      var post = $(this).attr('method');

      var news_title = $('#news_title').val();
      var news = $('#news').val();
      

      if (news_title == '') {
swal("News Title!", "Field is Required", "error");
      }else if (news == '') {
swal("News Content!", "Field is Required", "error");
      }else{



      if (confirm("Are you sure")) {


$('.overlays').show();


       $.ajax({
    url:"{{route('admin.updatenews')}}",
    method:"POST",
    data:new FormData(this),
    dataType:'JSON',
    contentType:false,
    cache:false,
    processData:false,
    success:function(data){


console.log(data);

if (data == 'success') {


    swal({
    title: "Success!",
    text: "updated successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false
  })


 $('#upload_news_form').trigger('reset');
  // CKEDITOR.instances['news'].setData('');
  $('.overlays').hide();

  
}else{


    swal({
    title: "Oppss!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false
  })


  $('.overlays').hide();
}


    }


  });

         

}

      
   


      }




  });









    });
</script>            







@endsection 