<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/onepage-scroll.css') }}>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src={{ asset('js/jquery-3.3.1.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ URL::asset('css/jquery.onepage-scroll.js') }}></script>
    <script src={{ URL::asset('css/jquery.onepage-scroll.min.js') }}></script>

    <title>Anteriore</title>
  </head>
  <body> 

  <div id="mainViewDiv">
    <form action="/contacting" method="POST">
    {{ csrf_field() }}
    <div class="mainSection">
            <div class="darkFilterFixed"></div>
            <div class="fixed-cloudBG"></div>
            <div class="container-fluid h-100">
                <nav class="row p-4 fixed-top">
                    <div class="col-4">
                        <img src="storage/img/arrowleft.png" style="height: 4vh;">
                        <a href="/contactus" class=" navButton"><span class="linkText">BACK</span></a>
                    </div>
                    <div class="col-4 text-center">
                        <p class="linkText">CONTACT</p>
                    </div>
                </nav>
                <nav class="fixed-left d-flex flex-column justify-content-center">
                    <div class="itemNumber active" id="1">01</div>
                    <div class="itemNumber" id="2">02</div>
                    <div class="itemNumber" id="3">03</div>
                    <div class="itemNumber" id="4">04</div>
                    <div class="itemNumber" id="5">05</div>
                    <div class="itemNumber" id="6">06</div>
                </nav>
                <div class="main">
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText">WHAT IS YOUR NAME?</p>
                        <input type="text" name="name" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText">ENTER YOUR EMAIL ADDRESS</p>
                        <input type="text" name="email" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText">WHAT IS YOUR COMPANY’S NAME?</p>
                        <input type="text" name="company" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText">WHAT KIND OF PROJECT DO YOU WANT US TO WORK ON?</p>
                        <input type="text" name="type" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText">WHAT IS YOUR BUDGET FOR THIS CERTAIN PROJECT?</p>
                        <input type="text" name="budget" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
                <section>
                <div class="row text-center" style="height: 100vh;">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <p class="formText" style="opacity: 0;">GET A QUOTATION</p>
                        <input type="submit" value="GET A QUOTATION" class="formInput shadow-lg text-center mb-5">
                    </div>
                </div>
                </section>
            </div>
            </div>
        </div>
    </form>
    </div>

    <!--End of contact section-->
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        $(document).ready(function(){
            
       
         $(".main").onepage_scroll({

         sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
         easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
         animationTime: 700,             // AnimationTime let you define how long each section takes to animate
         pagination: false,                // You can either show or hide the pagination. Toggle true for show, false for hide.
         updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
         beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
         afterMove: function(index) {
            $('.itemNumber.active').removeClass('active');
            $('#'+index).addClass('active');
         },   // This option accepts a callback function. The function will be called after the page moves.
         loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
         responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
         direction: "vertical"      
            });
        });

        $(document).keypress(function(e) {
         if(e.which == 13) {
            $(".main").moveDown();
         }
        });
        
    </script>
  </body>
</html>