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
                    <div class="col">
                        <a href="/Project/mindex" class="text-left linkText navLink navButton" onclick="showHideProductsView()"> < BACK</a>
                    </div>
                    <div class="col">
                        <p class="text-center linkText navLink ">PORTFOLIO</p>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div style="height: 80%;">
                    <div class="carousel-item h-100 active text-center">
                        <div class="row" style="height: 70%;">
                            <img src="{{ asset('images/' . $project->mobileBgImage)}}" class="portItemBG">
                            <div class="col d-flex flex-column justify-content-center align-items-start pl-5">
                                <p class="pHeader text-capitalize text-left" style="z-index: 3;">{{$project->title}}</p>
                                <p class="pSubheader text-capitalize text-left" style="z-index: 3;">{{$project->type}}</p>
                                <button class="btn pButton mt-4 p-2 pr-3 pl-3 shadow-lg text-capitalize" style="z-index: 3;">VISIT THE WEBSITE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="background-color: #F5F5F5">
            <div class="container">
                <div class="row" style="padding: 8%; padding-top:13vh;">
                    <div class="col">
                        <p class="itemHeader">overview</p>
                        <p class="itemDesc">
                        {{$project->overview}} 
                           </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="position: relative">
                        <img src="{{ asset('storage/img/desktop.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->monitorImage)}}" style="position: absolute; width: 70%; left:15%; top: 19%;">
                    </div>
                </div>
                <div class="row" style="padding: 8%;">
                    <div class="col">
                        <p class="itemHeader">concept</p>
                        <p class="itemDesc">
                        {{$project->concept}}
                         </p>
                    </div>
                </div>
                <div class="row text-center" >
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 90%;">
                        <img src="{{ asset('images/' . $project->conceptImage1)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 90%;">
                        <img src="{{ asset('images/' . $project->conceptImage2)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 90%;">
                        <img src="{{ asset('images/' . $project->conceptImage3)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 90%;">
                        <img src="{{ asset('images/' . $project->conceptImage4)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                </div>
                <div class="row" style="padding: 8%;">
                    <div class="col">
                        <p class="itemHeader">features</p>
                        <p class="itemDesc">
                        {{$project->feature}}
                          </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="position: relative">
                        <img src="{{ asset('storage/img/laptop.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->featureImage)}}" style="position: absolute; width: 58%; left:21%; top: 30%;">
                    </div>
                </div>
                <div class="row text-center" style="padding-bottom: 13vh">
                    <div class="col">
                        <a href="/Project/mindex" class="itemHeader navButton">GO BACK</a>
                    </div>
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