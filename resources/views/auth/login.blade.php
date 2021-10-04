
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Scrabble Connect, info@scrabbleconnect.com" />
<meta name="keywords" content="Scrabble, connect, Scrabble Connect, wespa, English words" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <link href="css/myglyphicons2.css" rel="stylesheet" />
<link href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
<link href="css/main.css" rel="stylesheet" media="screen, projection">


<title>Scrabble Connect: Sign Up </title>




</head>

<body> 

<div class="container-fluid"> 
<nav id="nav" class="navbar navbar-expand-lg">
<div class="row" style="width:100%;"> 
  <div class="col-md-6" style="width:100%;">
<a class="navbar-brand" href="index.php" >
  <img alt="Scrabble Connect" class="img-responsive" src="images/logo.png" title="Scrabble Connect" /> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

 <div class="col-md-6">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
   <!--    <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li> -->
     <!--  <li class="nav-item">
        <a class="nav-link" href="/user/findplayer">Find Players</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="/news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/resources">Resources</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>
    </ul>
    </div>
</div>

</div>

</nav>
 </div>


<div id="innerSignup" style="height:600px;">
  <div class="container-fluid">
    <form class=".col-md-6 .offset-md-3" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
  <div class="row justify-content-center">
    <div class="col-sm-8">
      <div class="row justify-content-center bg-white rounded-sm cform p-3">
          <div class="col-sm-12" style="margin-bottom:70px;">
            <div class="card mb-3">
              <div class="card-header">
              <h3 class="text-white  text-center">Login Up Form</h3>
              </div>  
            </div>
          </div>


<div class="col-sm-6" >
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="fname">Email:</label>
              <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required >

               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              
            </div>


             <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="fname">Password:</label>
              <input type="password" name="password" class="form-control" required>
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>

<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                     <button class="sub-btn" type="submit">Submit</button>
                     <br/>
                     <small>Don't have an account? <a href="/register" class="btn btn-primary btn-sm">sign up</a></small>

        </div>
      </div>
    </div>
  </form>
</div>
        </div>
     </div>
            </div>
<footer>
<div class="container-fluid">
  <div class="row">
  <div class="col-md-8">
    <p>&copy; 2021. All rights reserved Scrabble Connect</p>
  </div>

  <div class="col-md-4">
    <p class="text-right">Developed by: <a href="#" target="_blank" title="scrabbleconnect">Febisola Olanipekun</a></p>
    </div>
</div>

</div>

</footer>

</body>

<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</html>