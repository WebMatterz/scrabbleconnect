@extends('layouts.app')
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
                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                       <li class="breadcrumb-item active">Dashboard</li>
                   </ol>
               </div>

           </div>
       </div>
   </div>
   <!-- end page title -->
 @include('UserInc.message')
 @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif







 <div class="row">
  <div class="col-lg-12">
      <div class="card shadow">
          <div class="card-body" style="background: teal;">

    




<div id="indexWelcome">
  <div class="">
    <div class=".col-md-6 .offset-md-3 text-center">
      <h2 style="color: #fff;"> Find <span>Scrabble Players</span> &amp; Connect.</h2>
                <h4 style="color: #fff;"><i>Search through over 500,000 players in the World.</i></h4> 
    </div>
  
    <form >

 {{ csrf_field() }}
  <div class="" style="margin: 3em 0em 0em 1em;">
  <div class="row">
    <div class="col">
  <select name="country" class="form-control" id="country" class="ui dropdown">
    <option value="">Select Country</option>
    <option value="AF">Afghanistan</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of The</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote d&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="TP">East Timor</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and The South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="YU">Yugoslavia</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
  </select>
    </div>

    <div class="col">
  <select name="category" class="form-control" onchange="" id="category" class="ui dropdown">
    <option value="">Select a Category</option>
    <option value="smaster">Super Masters</option>
    <option value="master">Master</option>
    <option value="intermediate">Intermediate</option>
    <option value="open">Opens</option>
    <option value="newbie">Newbie/Unrated</option>
    </select>
    </div>

  <button class="btn btn-primary mb-2" id="find_player">Find Players</button>
</div>
  </div>
</form>

  </div>
</div>






              
              
              </div>
               <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->



































                    </div> <!-- container-fluid -->




















<div class="row" id="show_result" style="display: none;">
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
                                                        
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot style="background: teal; color: #fff;">
                                                    <th>#</th>
                                                        <th>Player Name</th>
                                                        <th>UserName</th>
                                                        
                                                        
                                                        <th>Action</th>
                                                </tfoot>
                                                <tbody id="players_list">
                                                    
                                  
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
</div>
</div>

                        

                       
<script src="{{asset('js/app.js')}}"></script>

 <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    

<script type="text/javascript">
  
  $(document).ready(function(){

var _tokens = $('input[name=_token]').val();


$('#find_player').click(function(event){

    event.preventDefault();

    var country = $('#country').val();
    var category = $('#category').val();



    if (country == '') {
swal("Country!", "Field is required", "info");
    }else if (category == '') {
swal("Category!", "Field is required", "info");
    }else{


    //     swal({
    //   title: "Are you sure?",
    //   text:"",
    //   icon: "warning",
    //   buttons: [
    //     'No, cancel it!',
    //     'Yes, I am sure!'
    //   ],
    //   dangerMode: true,
    // }).then(function(isConfirm) {
    //   if (isConfirm) {

        $('#show_result').show();
    // $('.overlays').show();
    // $('#settings_button').hide();   

ListPlayers(country,category);


      
    //   } else {
    //     swal("Cancelled", "No data was sent to database" ,"info");
    //   }
    // })


    }






});







function ListPlayers(country,category){

         $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},        
        url:"{{route('user.searchplayer')}}",
        method:"POST",
        data:{category:category,country:country,_tokens:_tokens},
        success:function(data){

    console.log(data);


    $('#players_list').empty();

    if (data == '') {

         $('#players_list').html('<center><h4>NO RECORD FOUND!</h4></center>');

    }else{


        var no = 1;

         $.each(data, function(i, value){

            //console.log(value.sender.length)

            if (value.sender.length == 0 && value.receiver.length == 0) {

              
                var button = '<button class="btn btn-success btn-sm" data-id="'+value.id+'" id="add_friend">Add Friend</button>';

            }else if (value.sender.length == 1 && value.sender_status.length == 0) {


 var button = '<button class="btn btn-primary btn-sm" data-id="'+value.id+'" id="accept_request">Accept</button> <button class="btn btn-danger btn-sm" data-id="'+value.id+'" id="decline_request">Decline</button>';

            }else if (value.sender.length == 1 && value.sender_status.length == 1){

                var button = '<i>Friends</i>, <button class="btn btn-danger btn-sm" data-id="'+value.id+'" id="un_friend">UnFriend</button>';
                
            }else if (value.receiver.length == 1 && value.receiver_status.length == 1){

                var button = '<i>Friends</i>, <button class="btn btn-danger btn-sm" data-id="'+value.id+'" id="un_friend">UnFriend</button>';
                
            }else{

                 var button = '<button class="btn btn-danger btn-sm" data-id="'+value.id+'" id="cancel_request">Cancel Request</button>';
            }


            var players_list = '<tr><td>'+no+'</td><td>'+value.name+' '+value.lastname+'</td><td>@'+value.username+'</td><td>'+button+'</td></tr>';
            $('#players_list').append(players_list);


no++; 
$('#players_datatable').DataTable();
});

    }




          }


        
         })  




}





$('body').delegate('#add_friend', 'click', function(event){


    event.preventDefault();

    var receiver_id = $(this).data('id');
    var country = $('#country').val();
    var category = $('#category').val();



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
        url:"{{route('user.addfriend')}}",
        method:"POST",
        data:{receiver_id:receiver_id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "Sent Successfully", "success");
        ListPlayers(country,category);

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














$('body').delegate('#cancel_request', 'click', function(event){


    event.preventDefault();

    var receiver_id = $(this).data('id');
    var country = $('#country').val();
    var category = $('#category').val();



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
        url:"{{route('user.cancelrequest')}}",
        method:"POST",
        data:{receiver_id:receiver_id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "Cancelled Successfully", "success");
        ListPlayers(country,category);

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
    var country = $('#country').val();
    var category = $('#category').val();



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
        ListPlayers(country,category);

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









$('body').delegate('#accept_request', 'click', function(event){


    event.preventDefault();

    var sender_id = $(this).data('id');
    var country = $('#country').val();
    var category = $('#category').val();



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
        ListPlayers(country,category);

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











$('body').delegate('#un_friend', 'click', function(event){


    event.preventDefault();

    var id = $(this).data('id');
    var country = $('#country').val();
    var category = $('#category').val();



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
        url:"{{route('user.unfriend')}}",
        method:"POST",
        data:{id:id,_tokens:_tokens},
        success:function(data){

            console.log(data);

            if(data == 'success'){

swal("Success!", "UnFriend Successfully", "success");
        ListPlayers(country,category);

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