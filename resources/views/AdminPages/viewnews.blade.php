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
                                      
                                            <li class="breadcrumb-item active">View</li><li class="breadcrumb-item active">{{$news->news_title}}</li>
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

<!-- <div class="form-group">
          <label style="color: #fff;"> News Title</label>
           <input type="test" class="form-control" value="{{$news->news_title}}" readonly>
         <small style="color: #fff; font-weight: 700;"></small>
        </div> -->

 
<div class="card">
  <div class="card-header">
    <h4 class="card-title">{{$news->news_title}}</h4>
  </div>
  <div class="card-body">
    {!! $news->news !!}
  </div>
</div>


    <!-- <div class="form-group">
          <label style="color: #fff;">News Content</label>
        
           <textarea class="form-control" id="news" name="news">{!! $news->news !!}</textarea>
         <small style="color: #fff; font-weight: 700;"></small>
        </div> -->

       
        


         
    

<!--    <div class="loader"></div>
 <button class="btn btn-warning" id="create_task_btn">Update News</button>

 -->


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









    });
</script>            







@endsection 