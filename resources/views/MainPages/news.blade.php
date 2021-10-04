@extends('MainLayouts.app')
@section('content')


<div id="bannerInner">  
  <div class="container-fluid">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <h2> News And Events  </h2>
      </div>
  </div>
</div>

<div id="indexWelcome">
  <div class="container">
    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <h2 style="margin:1.2em 0em 0.5em;"> Latest <span>News</span></h2>
      
      <div id="accordion">



        @if(count($news) > 0)

@foreach($news as $new)
        
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#{{str_replace(' ','',$new->news_title) }}" aria-expanded="true" aria-controls="{{str_replace(' ','',$new->news_title) }}">
         {{$new->news_title}} #{{$new->news_id}}
        </button>
      </h5>
    </div>

    <div id="{{str_replace(' ','',$new->news_title) }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       {!! $new->news !!}
      </div>
    </div>
  </div>

  @endforeach
  {{$news->links()}}
@else 
<center><h4>NO RECORD FOUND</h4></center>



@endif



</div>

    </div>


    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <h2 class="text-center" style="font-size: 2.2em; margin:1em 0em 0.4em;"> Tournament <span> Schedules </span></h2>
      <table class="table table-striped table-bordered table-hover text-capitalize" style="text-align:center;">   
        <thead> 
          <tr> 
            <th> Date</th>
            <th> Location </th>
            <th> Event </th>
            <th> Contact </th>
          </tr>
        </thead>
<tr> 
            <td style="background-color:#CFC;"> October 2nd-3rd, 2021</td>
            <td style="background-color:#CFC;"> Ireland </td>
            <td style="background-color:#CFC;"> Waterford Scrabble Tournament </td>
            <td style="background-color:#CFC;"> events@irishscrabble.org </td>
          </tr>
          
          <tr> 
            <td style="background-color:#CFC;"> November 5th-11th, 2021</td>
            <td style="background-color:#CFC;"> Malta </td>
            <td style="background-color:#CFC;"> Malta International Scrabble Open </td>
            <td style="background-color:#CFC;"> operations@scrabblemalta.com </td>
          </tr>

          <tr> 
            <td style="background-color:#CFC;"> February 2nd-7th, 2022</td>
            <td style="background-color:#CFC;"> South Africa </td>
            <td style="background-color:#CFC;"> Capetown International </td>
            <td style="background-color:#CFC;"> gerald@hlr.co.za </td>
          </tr>
          
      </table>
      <div>
    </div>
</div>
  </div>
  
  </div>
</div>





@endsection