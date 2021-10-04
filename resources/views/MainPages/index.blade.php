@extends('MainLayouts.app')
@section('content')






<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner.jpg" class="w-100" alt="..."> <!--global -->

      
      <div class="carousel-caption d-block">
                    <h1>Finding <span>Scrabble Player(s)</span> around you?</h1>
                    <p>We are professionally fast, accurate and reliable.
                   <br> 
                   @guest
<a class="btn btn-unique" href="/register" data-toggle="modal" data-target="#quoteModal">Sign Up <i class="fa fa-exchange"></i></a>
                   @else

                   @endguest
                    </p>
                 </div> 
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="w-100" alt="..."> <!--istock -->
      <div class="carousel-caption d-block">
      <h1><span>Scrabble </span> Connect</h1>
                    <p>The platform not only connect you with scrabble players around your location <br> but also equip you with resources that would improve your game.
                    <br>                   @guest
<a class="btn btn-unique" href="/register" data-toggle="modal" data-target="#quoteModal">Sign Up <i class="fa fa-exchange"></i></a>
                   @else

                   @endguest</p>
                    
            </div>
    </div>
  </div>
  
</div>



<div id="indexWelcome">
	<div class="container-fluid">
		<div class=".col-md-6 .offset-md-3 text-center">
			<h2> About <span>Scrabble Connect</span></h2>
			
			<p> Scrabble Connect was birthed out of a hunger for scrabble. I moved into a new country where I knew no one and really wanted to play scrabble. So I thought of how best to make use of technology. I figured there will be other people like me, looking to bond/meet with people in their environment through sports.
Whether you are a traveller or a local, once a player, it's always in you. You can connect with players in different parts of the world or those who are in same country and possibly same location for a game or two, a connection is made.
Travel is beyond sight-seeing, it involves experiencing the people, the food, the culture.
Scrabble is competitive and enjoyable. It is mentally stimulating and improves analytical thinking. Let the fun continue!.</p>
		</div>
	</div>
</div>

@if(count($news) > 0)

<div id="indexNews">
	<div class="container-fluid">
		<div class="text-center col-md">
			<h1> UPCOMING <span>NEWS</span></h1>
	 </div>
   	<div class="row service">

      @foreach($news as $new)

            <div class="col-mb-3">
                <div class="card one" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"> {{$new->news_title}} </h5>
                  <hr>
                  <p class="card-text">{!! substr($new->news, 0, 200) !!}......</p>
                  <a href="/news" class="btn btn-primary">Read More</a>	<span>Date Posted: {{date('M d, Y',strtotime($new->created_at)) }}</span>
                </div>
              </div>
		        </div>
		  
      @endforeach
            
       
    
        </div>
	</div>
</div>

@else


@endif

<div id="indexSignup">
	<div class="container-fluid">
    <div class="row">
@guest

  <div class="mb-6 logo_wrapper">

        <div id="signup_carousel">
        <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title"> Login Form </h5>
                  <hr>
                  <form  method="POST" action="{{ route('login') }}"> 
                    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
            
              <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required placeholder="Enter Email">

               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              
            </div>
   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
             
              <input type="password" name="password" class="form-control" required placeholder="Password">
                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit </button>
    </div>
    <span><a href="{{route('password.request')}}"> Forget password? </a> <br> Don't have an account? <a href='/register' style="text-decoration: underline;"> Register here. </a></span> 
  </div>
</form>
                </div>
              </div>
        </div>
    </div>

@else



<div class="mb-6 logo_wrapper">

        <div id="signup_carousel">
        <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title"> Hi, </h5>
                  <hr>

                  <h4>{{auth()->user()->name}} {{auth()->user()->lastname}}</h4>
  
                </div>
              </div>
        </div>
    </div>

@endguest


  <div class="mb-6 quality"> 
                  <h2><span>1000<sup>+</sup></span><br>Scrabble Players</h2>
                    <br>
                    <h2><span>500<sup>+</sup></span><br>Rated Players</h2>
                    <br>
                    <h2><span>50<sup><i class="fa fa-map"></i></sup></span><br>Countries Database</h2>
                    <br>

  </div>
</div>
</div>
</div>

<div id="indexDownload">
	<div class="container">
    <div class="text-center">
			<h1> <i class="fa fa-download" aria-hidden="true"></i>
 Download <span>Resources</span></h1>
	 </div>
		<div class="row">
		<div class="col-md-2">
			<a href="images/gallery/threewtdef.doc" target="_blank" ><i class="fa fa-folder" aria-hidden="true"></i>
<br/> 3 letter words </a>
		</div>
		
		<div class="col-md-2">
			<a href="images/gallery/CSW15_4_Letters.pdf" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i>
<br/> 4 letter words </a>
		</div>
		
		<div class="col-md-2">
			<a href="images/gallery/CSW15_5_Letters.pdf" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i>
<br/> 5 letter words </a>
		</div>

    <div class="col-md-2">
			<a href="#" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i>
<br/> 7 letter words </a>
		</div>
		
		<div class="col-md-2">
			<a href="images/gallery/thescrabbleplayershandbook.pdf" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i>
<br/> Scrabble Player's Handbook </a>
		</div>
		
		<div class="col-md-2">
			<a href="images/gallery/rulesv3.pdf" target="_blank"><i class="fa fa-folder" aria-hidden="true"></i>
<br/> Wespa Rules </a>
		</div>

</div>
</div>










@endsection