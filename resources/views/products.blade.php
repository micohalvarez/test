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
 
       <!-- Main Group -->  
    <div id="mainViewDiv">
        <div class="mainSection">
            <div class="darkFilterFixed"></div>
            <div class="fixed-cloudBG"></div>
            <div class="container-fluid h-100">
                <nav class="row p-4 fixed-top">
                    <div class="col-8">
                    </div>
                    <div class="col-4 text-right">
                    <a href="/" class=" navButton"><span class="linkText">BACK</span></a>
                        <img src="{{ asset('storage/img/arrowright.png') }}" style="height: 4vh;">
                    </div>
                </nav>
                <nav class="fixed-left d-flex flex-column justify-content-center">
                @foreach ($products as $product)
                    @if($product->id == '1' && $product->id < '10')
                        <div class="itemNumber active {{$product->id}}">0{{$product->id}}</div>
                    @elseif($product->id < '10')         
                       <div class="itemNumber {{$product->id}}">0{{$product->id}}</div>
                    @else
                      <div class="itemNumber {{$product->id}}" >{{$product->id}}</div>
                    @endif
                 @endforeach
                </nav>
                <nav class="fixed-right d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <p class="linkText rotateRight">PRODUCTS</p>
                    </div>
                </nav>
                <div class="main" >
                 @foreach ($products as $product)
                <section class="row" style="height: 100%;">
                    <img src="{{ asset('images/' . $product->webBgImage)}}" style="filter: brightness(40%); position:absolute;height:80vh;margin-top:10vh;width: 50vw;left:10vw;z-index:-1;border-radius:3%;">
                    <img src="{{ asset('images/' . $product->productLogo)}}" class="wheelBG">
                    @if($product->id < '10') 
                    <div class="rightNumberBG">0{{$product->id}}</div>
                    @else
                    <div class="rightNumberBG">{{$product->id}}</div>
                    @endif
                    <div class="col-1">
                    </div>
                    <div class="col text-right d-flex flex-column justify-content-center">
                        <p class="pHeader text-capitalize text-right">{{$product->title}}</p>
                        <p class="pSubheader text-capitalize text-right">{{$product->type}}</p>
                        <div>
                        <button class="btn pButton mt-4 shadow-lg text-capitalize" style="z-index: 3;"><a href="/products/productItem/{{$product->id}}" class="navButton">EXPLORE THE PRODUCT</a></button>
                       </div>
                    </div>
                    <div class="col-2">
                    </div>
                    </section>
             @endforeach
            </div>
            </div>
        </div>
    </div>
    
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
               $('.'+index).addClass('active');
            },   // This option accepts a callback function. The function will be called after the page moves.
            loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
            responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
            direction: "vertical"      
               });
           });
  </script>

  </body>
</html>