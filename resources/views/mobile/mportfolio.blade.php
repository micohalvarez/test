<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mstyle.css') }}" type="text/css">

    <title>Anteriore</title>
  </head>
  <body>
    <!-- Products Group -->
    <div id="productsSection">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="container-fluid h-100">
                <div class="row p-3" style="height: 20%;">
                    <div class="col-4">
                        <a href="/" class="text-left linkText navLink navButton" onclick="showHideProductsView()"> < BACK</a>
                    </div>
                    <div class="col-4">
                        <p class="text-center linkText navLink">PORTFOLIO</p>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div id="portfolioList" class="carousel slide" data-interval="false" data-ride="carousel" style="height: 80%;">
                  <ol class="carousel-indicators">
                      @foreach ($projects as $indexKey => $project)
                     @if($indexKey =='0')         
                     <li data-target="#portfolioList" data-slide-to="{{$indexKey}}" class="active">$indexKey</li>   
                      @else
                      <li data-target="#portfolioList" data-slide-to="{{$indexKey}}">$indexKey</li>
                      @endif
                     @endforeach 
                  </ol>
                  <div class="carousel-inner h-100">
                      @foreach ($projects as $project)
                     @if($project->id =='1') 
                      <div class="carousel-item h-100 active text-center">
                     @else
                     <div class="carousel-item h-100 text-center">  
                     @endif
                        <div class="row" style="height: 70%;">
                            <img src="{{ asset('images/' . $project->mobileBgImage)}}" class="portfolioBG">
                            <div class="col d-flex flex-column justify-content-center align-items-start pl-5">
                                <p class="pHeader text-capitalize text-left" style="z-index: 3;">{{$project->title}}</p>
                                <p class="pSubheader text-capitalize text-left" style="z-index: 3;">{{$project->type}}</p>
                                <form action="/Project/mprojectItem/{{ $project->id }}">
                                <button class="btn pButton mt-4 p-2 pr-3 pl-3 shadow-lg text-capitalize" style="z-index: 3;">EXPLORE THE PROJECT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                </div>
          
        </section>
    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src={{ asset('js/jquery-3.3.1.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>   
  </body>
</html>