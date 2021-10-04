@extends('MainLayouts.app')
@section('content')


<div id="bannerInner">  
  <div class="container-fluid">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <h2> Contact Us  </h2>
      </div>
  </div>
</div>

<div id="innerContent">
  <div class="container-fluid">
    <div class="row">
    <div class="col-md">
      <h1>  <span>  </span> </h1>

      <div id="map" style="text-align:center;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6167286495206!2d5.58746281476961!3d6.313974295430471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d24762072059%3A0xf2ee48883635be40!2sEdiae%20St%2C%20Ogogugbo%2C%20Benin%20City!5e0!3m2!1sen!2sng!4v1601305307267!5m2!1sen!2sng" width="80%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>          
    
    </div>
    </div>
</div>
   
<div id="mainContact">
  <div class="container-fluid"> 
  <div class="row">
    <div class="col-md-6">
      <h3> Drop your message here </h3>
      <form>
         {{ csrf_field() }}
  <div class="form-group row">
    <label for="name" class="col-md-2 col-form-label-md">Name</label>
    <div class="col-md-10">
      <input type="text" class="form-control form-control-md" id="name" id="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="phone" class="col-md-2 col-form-label-md">Telephone</label>
    <div class="col-md-10">
      <input type="number" class="form-control form-control-md" id="phone_no" name="phone_no" >
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-md-2 col-form-label-md">Email</label>
    <div class="col-md-10">
      <input type="email" class="form-control form-control-md" id="email" name="email">
    </div>
  </div>
  <div class="form-group row">
    <label for="validationTextarea" class="col-md-2 col-form-label-md">Comments</label>
    <div class="col-md-10">
    <textarea class="form-control form-control-sm" id="message" name="message"></textarea>
   
    </div>
  </div>
    <div class="form-group row">
    <div class="col-md-10">
      <button type="submit" class="btn btn-success" id="mail_btn">Submit </button> <span id="status"></span>
    </div>
  </div>
</form>
  </div>
    
    <div class="col-md row2">
            <h3> Contact Address </h3>
            
     <label> Office Address <i class="fa fa-building" aria-hidden="true"></i>  </label>
    <p> National College of Ireland, Mayor Street Lower, Dublin, Ireland</p>  
    <br>
    <label> Email Address <i class="fa fa-envelope" aria-hidden="true"></i> </label> 
    <p> support@scrabbleconnect.com </p> 
  <!--   <br>
    <label> Telephone <i class="fa fa-phone-square" aria-hidden="true"></i>  </label> 
    <p> <span>Hotline:</span> +2347080554162 </p>
    <p> <span>Whatsapp:</span> +234800000000 </p>  -->
    </div>
    
        </div>
  </div>
</div>
    </div>

<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript">
  
  $(document).ready(function(){

var _tokens = $('input[name=_token]').val();



function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }


$('#mail_btn').click(function(event){

event.preventDefault();

  var name = $('#name').val();
  var phone_no = $('#phone_no').val();
  var email = $('#email').val();
  var message = $('#message').val();
  
  if (name == '') {

alert("Name field is Required");
  }else if (phone_no == '') {
alert("Phone Number field is Required");

  }else if (email == '') {

alert("Email field is Required");
  }else if (validateEmail(email) == false) {

 alert("Invalid Email Address");

  }else if (message == '') {

alert("Message field is Required");
  }else{

$('#status').html('<i>Sending.....</i>');

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('contactus')}}",
        method:"POST",
        data:{name:name,phone_no:phone_no,email:email,message:message,_tokens:_tokens},
        success:function(data){

    //console.log(data);

    if (data == 'success') {
      alert('Sent Successfully');

  $('#name').val('');
  $('#phone_no').val('');
$('#email').val('');
  $('#message').val('');
$('#status').html('<b>Sent</b>');
    }else{

      alert(data);

    }

          }
        
         })




  }
  


});




  });

</script>


@endsection