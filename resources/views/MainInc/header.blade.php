<div class="container-fluid"> 
<nav id="nav" class="navbar navbar-expand-lg">
<div class="row" style="width:100%;"> 
  <div class="col-md-3" style="width:100%;">
<a class="navbar-brand" href="{{ URL::to('index') }}" >
  <img alt="Scrabble Connect" class="img-responsive" src="{{asset('images/logo.png')}}" title="Scrabble Connect" /> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>

 <div class="col-md-7">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
    <!--   <li class="nav-item">
        <a class="nav-link" href="/aboutus">About Us</a>
      </li> -->

      @guest
  <li class="nav-item">
        <a class="nav-link" href="login">Find Players</a>
      </li>
      @else 
  <li class="nav-item">
        <a class="nav-link" href="/user/findplayer">Find Players</a>
      </li>
      @endguest
      
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
<div class="col-md-2 login">
    <ul class="navbar-nav">
    @guest
  <li class="nav-item">
        <a class="nav-link" href="/login">Log In </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Sign Up</a>
      </li>
    @else
 <li class="nav-item">
        <a href="/user/dashboard" class="btn btn-primary btn-sm" style="color: #fff;">Dashboard</a>
      </li>
    <li class="nav-item">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #fff;" class="btn btn-sm btn-success">Logout
                                                       {{csrf_field()}}
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{csrf_field()}}
                                        </form>
                                                 </a>
      </li>

    @endguest
    </ul>
    </div>
</div>

</nav>
 </div>