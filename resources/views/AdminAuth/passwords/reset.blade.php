<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
  
<head>
    <meta charset="utf-8">
       <title>{{ config('app.name', 'Scrabble Connect') }} | Admin Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Reset Password" name="Scrabble Connect" />
      

      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
       <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

  
  </head>
  <body>



  <div class="home-btn d-none d-sm-block">
            <!-- <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a> -->
        </div>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary" style="background: teal !important;">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary" style="color: #fff !important;"> Reset Password</h5>
                                            <p style="color: #fff;">Admin</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="javascript:void(0);">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ asset('assets/images/logoo.png') }}" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="p-2">
                                    @if (session('status'))
                        <div class="alert alert-success text-center mb-4" role="alert">
                                     
                            {{ session('status') }}
                        </div>
                    @endif
                                     
                  <form class="form-horizontal" action="{{ route('admin.password.request') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Your Email Address" required autofocus >

                                               @if ($errors->has('email'))
                          
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                             
                        @endif
                                        </div>




                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required >

                                             @if ($errors->has('password'))
                                               <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                  
                                         @endif

                                        </div>







                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="userpassword">Password Confirmation</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Enter Your Password Again" required >

                                             @if ($errors->has('password_confirmation'))
                                               <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                                  
                                         @endif

                                        </div>






                    
                                        <div class="form-group row mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-success w-md waves-effect waves-light" type="submit">Reset</button>
                                            </div>
                                        </div>

                                         <div class="mt-4 text-center">
                                            <a href="{{route('admin.login')}}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Back to login</a>
                                        </div>
    
                                    </form>
                                </div>
            
                            </div>
                        </div>
                         <div class="mt-5 text-center">
                            
                            <div>
                             
                                <p>?? 2020 - {{date('Y')}} Scrabble Connect</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




       <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

  </body>


</html>

