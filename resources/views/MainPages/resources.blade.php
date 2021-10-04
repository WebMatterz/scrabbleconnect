@extends('MainLayouts.app')
@section('content')


<div id="bannerInner">  
  <div class="container-fluid">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <h2> Resources</h2>
      </div>
  </div>
</div>

<div id="resources">
  <div class="container">
    
  <div class="row">     
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Rules and Score Sheets
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <p> <a href="images/gallery/rulesv3.pdf" target="_blank">Wespa Rules </a> </p>
        <p> <a href="images/gallery/v3summary.pdf" target="_blank">Wespa Rules Summary </a> </p>
        <p> <a href="images/gallery/procedures4players.pdf" target="_blank"> Tournament Etiquette </a> </p>
         <p> <a href="images/gallery/wesparesultsheet.pdf" target="_blank"> Wespa Result Slip </a> </p>   
       <p> <a href="images/gallery/score1.pdf" target="_blank"> Score sheet 1 </a> </p>
       <p> <a href="images/gallery/score2.pdf" target="_blank"> Score sheet 2 </a> </p>
       <p> <a href="images/gallery/score3.pdf" target="_blank"> Score sheet 2 </a> </p>
    </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Players Resources
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
    <p> <a href="images/gallery/thescrabbleplayershandbook.pdf" target="_blank"> Scrabble players handbook </a> </p>
       <p> <a href="images/gallery/beginnerscsw2015.pdf" target="_blank"> Beginners Guide To Playing Scrabble </a> </p>
       <p> <a href="images/gallery/glossary.pdf" target="_blank"> Scrabble Glossary </a> </p>
      <p> <a href="images/gallery/threewtdef.doc" target="_blank"> Three Letter words with definitions</a> </p>
      <p> <a href="images/gallery/CSW15_3_Letters.pdf" target="_blank">  Three Letter words front and back hooks</a> </p>
      <p> <a href="images/gallery/CSW15_4_Letters.pdf" target="_blank"> Four Letter words front and back hooks </a> </p>
    </div>
    </div>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Tutorial &amp; Quizzes
        </button>
      </h5>
    </div>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
    <p> <a href="http://www.absp.org.uk/words/study3lwgame.shtml" target="_blank"> Take Three letter words quiz </a> </p>
       <p> <a href="http://www.absp.org.uk/words/study4lwgame.shtml" target="_blank"> Take Four letter words quiz </a> </p>

      </div>
    </div>
  </div>
</div>
      </div>  
    </div>
  </div>
</div>

<div id="product">
  <div class="container-fluid">
    <div class="text-center col-md">
      <h3></br>
      Product <span>Sales</span> (You will be redirected to another website)</h3>
   </div>
    <div class="row service">
            <div class="col-mb-6">
                <div class="card one" style="width: 18rem;">
         <img class="card-img-top" src="images\samtimer1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Samtimer </h5>
                  <hr>
                  <p class="card-text">Revolving boards with topnotch quality. Available in wooden and plastic. The compact board can easily fit into your travel luggage or work bag. Also idel for tournaments. </p>
                  <a href="http://www.compactboard.com/samtimer---clocks.html" class="btn btn-primary">Purchase</a> 
                </div>
              </div>
            </div>
    
            <div class="col-mb-4">
                <div class="card one" style="width: 18rem;">
        <img class="card-img-top" src="images\Protiles2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"> Protiles </h5>
                  <hr>
                  <p class="card-text">High Quality, smooth tiles that make scrabble more enjoyable. Comes with 4 racks. You can order a customized rack with your name when purchasing. </p>
                  <a href="http://protiles.net/" class="btn btn-primary">Purchase</a> 
                </div>
              </div>
            </div>

            <div class="col-mb-6">
                <div class="card one" style="width: 18rem;">
         <img class="card-img-top" src="images\samtimer2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"> RedBubble </h5>
                  <hr>
                  <p class="card-text">Get awesome Scrabble merch and gift items for yourself and loved ones.</p>
                  <a href="https://www.redbubble.com/shop/scrabble" class="btn btn-primary">Purchase</a>
                </div>
              </div>
            </div>

          
    
        </div>
  </div>
</div>





@endsection