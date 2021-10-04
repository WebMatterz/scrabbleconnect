@extends('AdminLayouts.app')
@section('content')

 <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
   		

   <!-- start page title -->
   <div class="row">
       <div class="col-12">
           <div class="page-title-box d-flex align-items-center justify-content-between">
               <h4 class="mb-0 font-size-18">Password</h4>

               <div class="page-title-right">
                   <ol class="breadcrumb m-0">
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                       <li class="breadcrumb-item active">Password Reset</li>
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
      <!--   <div class="card-header">
        <h4 class="card-title">Players</h4>
      </div> -->
          <div class="card-body" style="background: #fff;">
          
            





 <form>
 {{ csrf_field() }}
    

  <div class="row">
                                                
    <div class="col-md-6">
    <div class="form-group">
    <label for="formrow-email-input">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    </div>
    </div>

    <div class="col-md-6">
     <div class="form-group">
     <label for="formrow-password-input">Password Again</label>
    <input type="password" class="form-control" id="password_again" name="password_again">
     </div>
    </div>
    </div>
 
<div>
    <div class="loader"></div>
    <button type="submit" class="btn btn-primary w-md" id="change_password">Reset</button>


    </div>
 </form>





    
              
              
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


$('#change_password').click(function(event){

  event.preventDefault();

  var password = $('#password').val();

  var password_again = $('#password_again').val();

  if (password == '') {
swal("Password!", "Field is Required", "info");

}else if (password_again == '') {
swal("Password Again!", "Field is Required", "info");
  }else if (password_again != password) {
swal("Password Not Match!", "Field is Required", "error");
  }else{

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

        $('.overlays').show();
         
   $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('admin.passwordreset')}}",
        method:"POST",
        data:{password:password,password_again:password_again,_tokens:_tokens},
        success:function(data){

    //console.log(data);


    if (data == 'success') {

   swal({
    title: "Success!",
    text: "Password Reset Successfully",
    icon: "success",
    timer: 3000,
    showConfirmButton: false
  });

   $('#password').val('');
   $('#password_again').val('');
   $('.overlays').hide();

    }else{

   swal({
    title: "Opps!",
    text: data,
    icon: "error",
    timer: 3000,
    showConfirmButton: false
  });

    }




          }
        
         })


      
      } else {
        swal("Cancelled", "No data was sent to database" ,"info");
      }
    })

  }



});





      });

</script>
                        

                       


			


@endsection