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
                    </div>
                    <div class="col-4">
                        <p class="text-center linkText navLink">PRODUCTS</p>
                    </div>
                    <div class="col-4">
                       <a href="/"  class="text-right linkText navLink navButton">BACK > </a>
                    </div>
                </div>
                <div id="productList" class="carousel slide" data-interval="false" data-ride="carousel" style="height: 80%;">
                  <ol class="carousel-indicators">
                  @foreach ($products as $indexKey => $product)
                    @if($indexKey =='0')         
                     <li data-target="#productList" data-slide-to="{{ $indexKey}}" class="active">$indexKey</li>   
                    @else
                    <li data-target="#productList" data-slide-to="{{$indexKey}}">$indexKey</li>
                    @endif
                    @endforeach
                    </ol>
                  <div class="carousel-inner h-100">
                  @foreach ($products as $product)
                     @if($product->id =='1') 
                     <div class="carousel-item h-100 active text-center">
                     @else
                     <div class="carousel-item h-100 text-center">  
                     @endif
                        <div class="row" style="height: 70%;">
                            <img src="{{ asset('images/' . $product->mobileBgImage)}}" class="productBG">
                            <div class="col d-flex flex-column justify-content-center align-items-end pr-5">
                                <p class="pHeader text-capitalize text-right" style="z-index: 3;">{{$product->title}}</p>
                                <p class="pSubheader text-capitalize text-right" style="z-index: 3;">{{$product->type}}</p>
                                <form action="/Product/mproductItem/{{ $product->id }}">
                                <button class="btn pButton mt-4 p-2 pr-3 pl-3 shadow-lg text-capitalize" style="z-index: 3;">EXPLORE THE PRODUCT</button>
                                </form>
                            </div>
                        </div>
                    </div>
             
                  @endforeach
                </div>
            </div>
<!--
            <div class="row" style="height: 60%;">
                <img src="img/armada.png" class="productBG">
                <div class="col d-flex flex-column justify-content-center align-items-end pr-5">
                    <p class="pHeader" style="z-index: 3;">ARMADA</p>
                    <p class="pSubheader" style="z-index: 3;">FLEET MANAGEMENT SYSTEM</p>
                    <button class="btn pButton mt-4 p-2 pr-3 pl-3 shadow-lg" style="z-index: 3;">EXPLORE THE PRODUCT</button>
                </div>
            </div>
            <div class="row" style="height: 20%; align-items: flex-end;">
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
                    </ul> 
                </div>
            </div>
-->
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