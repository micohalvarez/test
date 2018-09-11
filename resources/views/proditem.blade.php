<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    <title>Anteriore</title>
  </head>
  <body>
 
       <!-- Main Group -->  
    <div id="mainViewDiv">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="container-fluid h-100">
                <img src="{{ asset('images/' . $product->webBgImage)}}" style="position: absolute;height: 100vh;width: 57vw;left: 0;z-index: 1">
                <img src="{{ asset('storage/img/wheel.png') }}" style="position: absolute;height: 30vh;right: 8%; top: 8%; z-index: 1">
                     @if($product->id < '10')         
                     <p class="rightNumberBG">0{{$product->id}}</p>
                    @else
                    <p class="rightNumberBG"> {{$product->id}}</p>
                    @endif
                  <div class="row p-4" style="height: 30%;">
                    <div class="col-8">
                    </div>
                    <div class="col-4 text-right">
                    <a href="/Products/index" class=" navButton"> <span class="linkText">BACK</span></a>
                    <img src="{{ asset('storage/img/arrowright.png') }}" style="height: 4vh;">
                    </div>
                </div>
                <div class="row" style="height: 40%;">
                    <div class="col-1"></div>
                    <div class="col text-right d-flex flex-column justify-content-center">
                        <p class="pHeader text-capitalize text-right">{{$product->title}}</p>
                        <p class="pSubheader text-capitalize text-right">{{$product->type}}</p>
                        <div>
                        <button class="btn pButton mt-4 shadow-lg text-capitalize" style="z-index: 3;">VISIT THE WEBSITE</button>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
<!--
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-4 text-right pr-5">
                        <p class="scrollText">SCROLL DOWN</p>
                        <img src="storage/img/scrolldown.png" class="scrollIcon">
                    </div>
                </div>
-->
            </div>
        </section>
        <section style="background-color: #F5F5F5">
            <div class="container-fluid">
                <div class="row" style="padding-left: 8%;padding-right: 8%;padding-top:20vh;">
                    <div class="col">
                        <p class="itemHeader">overview</p>
                        <p class="itemDesc">
                        {{$product->overview}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="position: relative">
                        <img src="{{ asset('storage/img/sunmi.png') }}" style="width: 80%;">
                        <img src="{{ asset('images/' . $product->monitorImage)}}" style="position: absolute; width: 60%; left:20%; top: 21%;">
                    </div>
                </div>
                <div class="row" style="padding-left: 8%;padding-right: 8%;">
                    <div class="col">
                        <p class="itemHeader">concept</p>
                        <p class="itemDesc">
                        {{$product->concept}} </p>
                    </div>
                </div>
                <div class="row text-center" style="padding-top: 15vh;padding-bottom: 15vh;">
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png') }}" style="width: 100%;">
                        <img src="{{ asset('images/' . $product->conceptImage1)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png') }}" style="width: 100%;">
                        <img src="{{ asset('images/' . $product->conceptImage2)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png') }}" style="width: 100%;">
                        <img src="{{ asset('images/' . $product->conceptImage3)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png') }}" style="width: 100%;">
                        <img src="{{ asset('images/' . $product->conceptImage4)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                </div>
                <div class="row" style="padding-left: 8%;padding-right: 8%;">
                    <div class="col">
                        <p class="itemHeader">features</p>
                        <p class="itemDesc">
                        {{$product->feature}}
                     </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="position: relative">
                        <img src="{{ asset('storage/img/sunmi.png') }}" style="width: 80%;">
                        <img src="{{ asset('images/' . $product->featureImage)}}" style="position: absolute; width: 60%; left:20%; top: 21%;">
                    </div>
                </div>
                <div class="row text-center" style="padding-bottom: 25vh">
                    <div class="col">
                    <a href="/Products/index" class="navButton itemHeader">GO BACK</a>

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