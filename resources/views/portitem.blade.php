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
                <img src="{{ asset('images/' . $project->webBgImage)}}" style="position: absolute;height: 100vh;width: 57vw;right: 0;z-index: 1">
                  @if($project->id < '10')         
                     <p class="leftNumberBG">0{{$project->id}}</p>
                    @else
                    <p class="leftNumberBG"> {{$project->id}}</p>
                    @endif
                     <div class="row p-4" style="height: 30%;">
                    <div class="col-4 text-left">
                        <a href="/Portfolio/index" class="linkText navButton">< BACK</a>
                    </div>
                    <div class="col-8">
                    </div>
                </div>
                <div class="row" style="height: 40%;">
                    <div class="col-2"></div>
                    <div class="col text-left">
                        <p class="pHeader text-capitalize text-left">{{$project->title}}</p>
                        <p class="pSubheader text-capitalize text-left">{{$project->type}}</p>
                        <button class="btn pButton mt-4 shadow-lg text-capitalize" style="z-index: 3;">EXPLORE THE PROJECT</button>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </section>
        <section style="background-color: #F5F5F5">
            <div class="container-fluid">
                <div class="row" style="padding-left: 8%;padding-right: 8%;padding-top:20vh;">
                    <div class="col">
                        <p class="itemHeader">overview</p>
                        <p class="itemDesc">
                        {{$project->overview}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-right" style="position: relative;">
                        <img src="{{ asset('storage/img/desktop.png')}}" style="width: 85%;">
                        <img src="{{ asset('images/' . $project->monitorImage)}}" style="position: absolute; width: 64.5%; height: 43.5%; left:25%; top: 18%; border-radius: 13px 13px 0px 0px;">
                        <img src="{{ asset('storage/img/smartphone.png')}}" style="position: absolute; left: 0; bottom: 0; margin-bottom: 6%; height: 70%;">
                        <img src="{{ asset('images/' . $project->mobileImage)}}" style="position: absolute; left: 20.3%; bottom: 18%; margin-bottom: 6%; height: 35.5%; width: 17%;">
                    </div>
                </div>
                <div class="row" style="padding-left: 8%;padding-right: 8%;">
                    <div class="col">
                        <p class="itemHeader">concept</p>
                        <p class="itemDesc">
                        {{$project->concept}}  </p>
                    </div>
                </div>
                <div class="row text-center" style="padding-top: 15vh;padding-bottom: 15vh;">
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->conceptImage1)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->conceptImage2)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->conceptImage3)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                    <div class="col-xs-12 col-sm-3" style="position: relative">
                        <img src="{{ asset('storage/img/frame.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->conceptImage4)}}" style="position: absolute; width: 70%; left:15%; top: 15%;">
                    </div>
                </div>
                <div class="row" style="padding-left: 8%;padding-right: 8%;">
                    <div class="col">
                        <p class="itemHeader">features</p>
                        <p class="itemDesc">
                        {{$project->feature}}  </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="position: relative">
                        <img src="{{ asset('storage/img/laptop.png')}}" style="width: 100%;">
                        <img src="{{ asset('images/' . $project->featureImage)}}" style="position: absolute; width: 61.2%; height: 40.1%; left:19.4%; top: 28.9%; border-radius: 13px 13px 0px 0px;">
                    </div>
                </div>
                <div class="row text-center" style="padding-bottom: 25vh">
                    <div class="col">
                        <a href="/Portfolio/index" class="navButton itemHeader">GO BACK</a>
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