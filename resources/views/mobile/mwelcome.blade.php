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
 
       <!-- Main Group -->  
    <div id="mainViewDiv">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="container-fluid h-100">
                <div class="row text-center pt-3" style="height: 30%;">
                    <div class="col-4 text-center">
                        <a href="/Product/mindex" class="linkText rotateLeft navLink navButton" onclick="showHidePrductsView()">PRODUCTS</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="/mcontact" class="linkText navLink navButton" onclick="showHideContactsView()">CONTACT</a>
                    </div>
                    <div class="col-4 text-center">
                        <a href="/Project/mindex" class="linkText rotateRight navLink navButton" onclick="showHidePortfolioView()">PORTFOLIO</a>
                    </div>
                </div>
                <div class="row" style="height: 50%;">
                    <div class="col-1"></div>
                    <div class="col-10 text-center">
                      <img src="storage/img/logo.png" class="brandLogo">
                         <p class="brandText text-capitalize">ANTERIORE</p>
                    </div>
                    <div class="col-1"></div>
                </div>
                <div class="row" style="height: 20%;">
                    <div class="col text-center">
                      <p class="scrollText text-capitalize">SCROLL DOWN</p>
                      <img src="storage/img/scrolldown.png" class="scrollIcon">
                    </div>
                </div>
            </div>
        </section>
        <section class="mainSection">
<!--            <div class="darkFilter"></div>-->
            <div class="container-fluid h-100">
                <div class="row h-50">
                    <div class="col-12 p-3 pr-3 pl-3">
                        <div class="box shadow-lg h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <p class="headerText text-capitalize m-1">
                                MISSION
                            </p>
                            <p class="descText text-center m-4">
                                Anteriore was founded with an ardent vigor and a thriving intent: to enable businesses in the Philippines to reach their full potential by equipping them with software solutions that will greatly aid their growth and development.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row h-50">
                    <div class="col-12 p-3">
                        <div class="box shadow-lg h-100 d-flex flex-column align-items-center justify-content-center p-3">
                            <p class="headerText text-capitalize m-1">
                                VISION
                            </p>
                            <p class="descText text-justify m-4">
                                Anteriore strives to flourish with tenacity and integrity, while working hand in hand with our partners and clients towards a more wired and industrial Philippines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mainSection">
<!--            <div class="darkFilter"></div>-->
            <div class="container-fluid h-100">
                <div class="d-flex flex-column align-items-center justify-content-between p-5" style="height: 100%;">
                    <p class="headerText text-capitalize">APPROACH</p>
                    <div class="approachGroup text-center">
                        <div class="box shadow-lg p-3">
                            <img src="storage/img/ideate.png" class="approachIcon">
                        </div>
                        <p class="approachText mt-1">IDEATE</p>
                    </div>
                    <div class="approachGroup text-center">
                        <div class="box shadow-lg p-3">
                            <img src="storage/img/imagine.png" class="approachIcon">
                        </div>
                        <p class="approachText mt-1">IMAGINE</p>
                    </div>
                    <div class="approachGroup text-center">
                        <div class="box shadow-lg p-3">
                            <img src="storage/img/design.png" class="approachIcon" style="padding-top: 10%;padding-bottom: 10%;">
                        </div>
                        <p class="approachText mt-1">DESIGN</p>
                    </div>
                    <div class="approachGroup text-center">
                        <div class="box shadow-lg p-3">
                            <img src="storage/img/develop.png" class="approachIcon">
                        </div>
                        <p class="approachText mt-1">DEVELOP</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
<!--            <div class="darkFilter"></div>-->
            <div class="container-fluid h-100">
                <div class="d-flex flex-column align-items-center justify-content-between pt-5" style="height: 100%;">
                    <p class="headerText text-capitalize">SERVICES OFFERED</p>
                    <div class="box shadow-lg h-100 d-flex flex-column align-items-center justify-content-between p-3 mt-3">
                        <img src="storage/img/websites.png" class="serviceIcon m-2">
                        <p class="linkText text-capitalize m-2">
                            WEBSITES AND APPS
                        </p>
                        <p class="descText text-center mr-4 ml-4">
                            Need a website or mobile application for your organization and business need? Anteriore will be with you every step of the way in making these possible. Translate your ideas into formidable websites and mobile applications.
                        </p>
                    </div>
                    <div class="box shadow-lg h-100 d-flex flex-column align-items-center justify-content-between p-3 mt-3 mb-3">
                        <img src="storage/img/system.png" class="serviceIcon m-2">
                        <p class="linkText text-capitalize m-2">
                            MANAGEMENT SYSTEMS
                        </p>
                        <p class="descText text-center mr-4 ml-4">
                            Looking for a more efficient and less costly system? Anteriore’s database management systems provides an integrated platform that includes finance, inventory, human resource, and point of sales tailor fit for your business.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Portfolio Group -->
<!--
    <div id="portfolioSection">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="row p-3" style="height: 25%;">
                <div class="col">
                    <p class="linkText navLink" onclick="showHidePortfolioView()">BACK</p>
                </div>
                <div class="col">
                    <p class="text-center linkText navLink">PORTFOLIO</p>
                </div>
                <div class="col"></div>
            </div>
        </section>
    </div>
-->
    
    <!-- Products Group -->
<!--
    <div id="productsSection">
        <section class="mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="row p-3" style="height: 20%;">
                <div class="col">
                </div>
                <div class="col">
                    <p class="text-center linkText navLink">PRODUCTS</p>
                </div>
                <div class="col">
                    <p class="text-right linkText navLink" onclick="showHideProductsView()">BACK > </p>
                </div>
            </div>
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
        </section>
    </div>
-->
    
    <!-- Optional JavaScript -->
   <script>
    function showHideContactsView() {
     var x = document.getElementById("mainViewDiv");
     var y = document.getElementById("contactsSection")
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
          } else {
              x.style.display = "none";
              y.style.display = "block";
                  }
        hideMissionVission();
        }

    function showHidePortfolioView(){
        var x = document.getElementById("mainViewDiv");
        var y = document.getElementById("portfolioSection")

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none"
        }
        else{
            x.style.display = "none";
            y.style.display = "block";
        }

    }

     function showHidePrductsView(){
        var x = document.getElementById("mainViewDiv");
        var y = document.getElementById("productsSection")

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none"
        }
        else{
            x.style.display = "none";
            y.style.display = "block";
        }

    }

    function showHideMissionDesc(){
        var x = document.getElementById("missionDesc");
        var y = document.getElementById("arrowMission");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "block"
        }
        else if(x.style.display != null && x.style.display != "block"){
            x.style.display = "block";
            y.style.display = "block";
        }
        else if (x.style.display === "block"){
            x.style.display = "none";
            y.style.display = "none";
        }
    }

    function showHideVisionDesc(){
        var x = document.getElementById("visionDesc");
        var y = document.getElementById("arrowVision");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "block"
        }
        else if(x.style.display != null && x.style.display != "block"){
            x.style.display = "block";
            y.style.display = "block";
        }
        else if (x.style.display === "block"){
            x.style.display = "none";
            y.style.display = "none";
        }
    }

    function hideMissionVission(){
        var w = document.getElementById("arrowVision");
        var x = document.getElementById("visionDesc");
        var y = document.getElementById("missionDesc");
        var z = document.getElementById("arrowMission");

            w.style.display = "none";
            x.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
    }
  </script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src={{ asset('js/jquery-3.3.1.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>  
  </body>
</html>