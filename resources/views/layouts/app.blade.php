<!DOCTYPE html>
<html lang="en">

    

<head>
        
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Scrabble Connect') }} | {{$title}}</title>
                  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="{{ config('app.name', 'Scrabble Connect') }} | {{$title}}" name="{{$title}}" />
        <meta content="I-Tech" name="irawo_inyass" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


      <link rel="stylesheet" type="text/css" href="{{asset('css/progress.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('css/overlay.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">
<style type="text/css">
    

    #button_filter{

      display: flex;
      flex-flow: wrap;
      flex-direction: row;


    }


    .numberCircle {
    border-radius: 50%;
    width: 29px;
    height: 29px;
    padding: 0px;

    background: #fff;
    border: 4px solid lightgray;
    color: #666;
    text-align: center;
  
    font: 14px Arial, sans-serif;

    display: flex;
      flex-flow: wrap;
      flex-direction: row;
}


  #chat_list {
        scrollbar-3dlight-color:gold;
        scrollbar-arrow-color:blue;
        scrollbar-base-color:;
        scrollbar-darkshadow-color:blue;
        scrollbar-face-color:;
        scrollbar-highlight-color:;
        scrollbar-shadow-color:
    }

/*.numberCircle .dot li{
  height: 21px;
  width: 21px;
  background-color: #fff;
  border-radius: 50%;
  display: inline-block;
  cursor: pointer;


      display: flex;
      flex-flow: wrap;
      flex-direction: row;
}


.numberCircle .active {
  height: 21px;
  width: 21px;
  background-color: lightblue;
  border-radius: 50%;
  display: inline-block;
  cursor: pointer;
  color: #fff;
}*/


    
</style>

    </head>

    <body data-sidebar="dark">

 <!-- Begin page -->
<div id="layout-wrapper">

@include('UserInc.header')
@include('UserInc.sider')
<div class="overlays"><div class="loaders"></div></div>
     @yield('content')

@include('UserInc.footer')
</div>





      <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

         <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{asset('js/app.js')}}"></script>


        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{asset('js/moment.js')}}"></script>
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

       <script src="{{ asset('DataTables/datatables.js') }}" defer ></script>

         
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

     
    </body>



</html>
