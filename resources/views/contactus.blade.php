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
                <div class="row p-4" style="height: 30%;">
                    <div class="col-4">
                        <img src="{{ asset('storage/img/arrowleft.png') }}" style="height: 4vh;">
                        <a href="/" class=" navButton"><span class="linkText">BACK</span></a>
                    </div>
                    <div class="col-4 text-center">
                        <p class="linkText">CONTACT</p>
                    </div>
                </div>
                <div class="row text-center" style="height: 45%;">
                    <div class="col-1">
                    </div>
                    <div class="col-10">
                        <p class="contactHeader">GOT AN IDEA?</p>
                   
                        <button class="btn contactButton shadow-lg" style="width: 30%;"><a href="/form" class="navButton">CLICK HERE</a</button>
                    
                    </div>
                </div>
                <div class="row fixed-bottom m-3">
                    <div class="col pl-5 pr-5 text-center">
                        <div class="row pl-5 pr-5">
                            <div class="col">
                                <img src="{{ asset('storage/img/facebook.png') }}" style="max-width: 10%;">
                                <span class="footerText ml-2 mr-3">ANTERIORE, INC.</span>
                                <img src="{{ asset('storage/img/twitter.png') }}" style="max-width: 10%;">
                                <span class="footerText ml-2 mr-3">@ANTERIOREINC</span>
                                <img src="{{ asset('storage/img/instagram.png') }}" style="max-width: 10%;">
                                <span class="footerText ml-2">@ANTERIOREINC</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('storage/img/mail.png') }}" style="max-width: 2%;">
                                <span class="footerText ml-2 mr-3">HELLO@ANTERIORE.COM</span>
                                <img src="{{ asset('storage/img/location.png') }}" style="max-width: 2%;">
                                <span class="footerText ml-2 mr-3">@UNIT L2 L17-08, PHILIPPINE STOCK EXCHANGE TOWER, BONIFACIO GLOBAL CITY</span>
                                <img src="{{ asset('storage/img/phone.png') }}" style="max-width: 2%;">
                                <span class="footerText ml-2">0917 316 0007</span>
                            </div>
                        </div>
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