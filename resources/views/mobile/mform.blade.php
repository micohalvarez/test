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
    
    <!-- Contact Group -->
    <div id="contactSection">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="container-fluid h-100">
                <div class="row p-3" style="height: 30%;">
                    <div class="col">
                    <a href="/mcontact" class="scrollText navLink navButton" onclick="showHideContactsView()">< BACK</a>
                    </div>
                    <div class="col">
                        <p class="text-center linkText navLink">CONTACT</p>
                    </div>
                    <div class="col"></div>
                </div>
<!--
                <div class="row text-center" style="height: 50%;">
                    <div class="col">
                        <p class="formText">WHAT IS YOUR NAME?</p>
                        <input type="text" class="formBox shadow-lg text-center">
                    </div>
                </div>
-->
                <div id="contactForm" class="carousel vert slide" data-interval="false" style="height: 70%" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#contactForm" data-slide-to="0" class="active">01</li>
                    <li data-target="#contactForm" data-slide-to="1">02</li>
                    <li data-target="#contactForm" data-slide-to="2">03</li>
                    <li data-target="#contactForm" data-slide-to="3">04</li>
                    <li data-target="#contactForm" data-slide-to="4">05</li>
                    <li data-target="#contactForm" data-slide-to="5">06</li>
                  </ol>
                  <form class="carousel-inner h-100"action="/contacting"  method="POST">
                 {{ csrf_field() }}
                  <div class="carousel-inner h-100">
                 
                    <div class="carousel-item h-100 active text-center">
                        <p class="formText">WHAT IS YOUR NAME?</p>
                        <input type="text" name="name" class="formBox shadow-lg text-center">
                    </div>
                    <div class="carousel-item h-100 text-center">
                        <p class="formText">ENTER YOUR EMAIL ADDRESS</p>
                        <input type="text" name="email" class="formBox shadow-lg text-center">
                    </div>
                    <div class="carousel-item h-100 text-center">
                        <p class="formText">WHAT IS YOUR COMPANY NAME?</p>
                        <input type="text" name="company" class="formBox shadow-lg text-center">
                    </div>
                    <div class="carousel-item h-100 text-center">
                        <p class="formText">WHAT KIND OF PROJECT IS IT?</p>
                        <input type="text" name="project" class="formBox shadow-lg text-center">
                    </div>
                    <div class="carousel-item h-100 text-center">
                        <p class="formText">WHAT IS YOUR BUDGET?</p>
                        <input type="text" name="budget" class="formBox shadow-lg text-center">
                    </div>
                    <div class="carousel-item h-100 text-center">
                    <p class="formText" style="opacity: 0">GET A QUOTATION</p>
                    <button class="btn contactButton shadow-lg" style="height: 11%;">GET A QUOTATION</button> </div>
                  </div>
                 
                </div>
                </form>
<!--            
                <div class="row fixed-bottom">
                    <div class="col">
                        <ul class="nav justify-content-center">
                          <li class="nav-item">
                            <p class="nav-link active">01</p>
                          </li>
                          <li class="nav-item">
                            <p class="nav-link">02</p>
                          </li>
                          <li class="nav-item">
                            <p class="nav-link">03</p>
                          </li>
                          <li class="nav-item">
                            <p class="nav-link">04</p>
                          </li>
                          <li class="nav-item">
                            <p class="nav-link">05</p>
                          </li>
                          <li class="nav-item">
                            <p class="nav-link">06</p>
                          </li>
                        </ul> 
                    </div>
                </div>
-->
            </div>
        </section>
    </div>
    
 

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    // all custom jQuery will go here

  $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});
});
    </script>
    <script src={{ asset('js/jquery-3.3.1.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script> 
  </body>
</html>