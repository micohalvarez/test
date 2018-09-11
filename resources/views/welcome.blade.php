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

<div class="main">
<div class="wrapper">
       <!-- Main Group -->  
    <div id="mainViewDiv" >
        <section class= "mainSection cloudBG">
            <div class="darkFilter"></div>
            <div class="container-fluid h-100">
                <div class="row text-center pt-3" style="height: 25%;">
                    <div class="col">
                    </div>
                    <div class="col">
                    <a href="/contactus" class="linkText navLink navButton" >CONTACT</a>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="row h-50" style="height: 55%;">
                    <div class="col-1">
                         <a href="/Products/index"  class="linkText rotateLeftIndex navLink navButton" >PRODUCTS</a>
                    </div>
                    <div class="col-10 text-center">
                         <img src="storage/img/logo.png" class="brandLogo">
                         <p class="brandText text-capitalize">ANTERIORE</p>
                    </div>
                    <div class="col-1">
                         <a href="/Portfolio/index" class="linkText rotateRightIndex navLink navButton" >PORTFOLIO</a>
                    </div>
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
            <div class="container h-100">
               <div class="row" style="height: 20%"></div>
               <div class="row text-center" style="height: 60%">
                   <div class="col-6">
                       <div class="mvBox shadow-lg p-5 d-flex flex-column align-items-center justify-content-center">
                           <button class="headerText navButton" onclick="showHideMissionDesc()">MISSION</button>
                           <p class="descText m-2 hidden" id="missionDesc" style="display:none;">Anteriore was founded with an ardent vigor and a thriving intent: to enable businesses in the Philippines to reach their full potential by equipping them with software solutions that will greatly aid their growth and development.</p>
                       </div>
                   </div>
                   <div class="col-6">
                       <div class="mvBox shadow-lg p-5 d-flex flex-column align-items-center justify-content-center">
                           <button class="headerText navButton" onclick="showHideVisionDesc()">VISION</button>
                           <p class="descText m-2 pb-4 hidden" id="visionDesc" style="display:none;">Anteriore strives to flourish with tenacity and integrity, while working hand in hand with our partners and clients towards a more wired and industrial Philippines.</p>
                       </div>
                   </div>
               </div>
               <div class="row" style="height: 20%"></div>
           </div>
        </div>
        <section class="mainSection">
            <div class="container h-100">
                <div class="row" style="height: 20%"></div>
                <div class="row" style="height: 60%">
                    <div class="col h-100">
                        <div class="row text-center" style="height: 30%;">
                            <div class="col">
                                <p class="headerText">APPROACH</p>
                            </div>
                        </div>
                        <div class="row h-50 text-center">
                            <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                                <div class="approachBox shadow-lg d-flex align-items-center justify-content-center" style="height: 60%; width: 60%">
                                    <img src="storage/img/ideate.png" class="approachIcon">
                                </div>
                                <p class="approachText m-2">IDEATE</p>
                            </div>
                            <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                                <div class="approachBox shadow-lg d-flex align-items-center justify-content-center" style="height: 60%; width: 60%">
                                    <img src="storage/img/imagine.png" class="approachIcon">
                                </div>
                                <p class="approachText m-2">IMAGINE</p>
                            </div>
                            <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                                <div class="approachBox shadow-lg d-flex align-items-center justify-content-center" style="height: 60%; width: 60%">
                                    <img src="storage/img/design.png" class="approachIcon">
                                </div>
                                <p class="approachText m-2">DESIGN</p>
                            </div>
                            <div class="col-3 d-flex flex-column align-items-center justify-content-center">
                                <div class="approachBox shadow-lg d-flex align-items-center justify-content-center" style="height: 60%; width: 60%">
                                    <img src="storage/img/develop.png" class="approachIcon">
                                </div>
                                <p class="approachText m-2">DEVELOP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 20%"></div>
            </div>
        </section>
        <section class="mainSection">
            <div class="container h-100">
                <div class="row text-center" style="height: 15vh">
                    <div class="col">
                        <p class="headerText">SERVICES OFFERED</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="serviceBox shadow-lg d-flex flex-column align-items-center justify-content-center" style="height: 75vh">
                            <img src="storage/img/websites.png" class="serviceIcon m-4">
                            <p class="serviceText m-2">WEBSITES AND APPS</p>
                            <p class="descText m-4" >Need a website or mobile application for your organization and business need? Anteriore will be with you every step of the way in making these possible. Translate your ideas into formidable websites and mobile applications.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="serviceBox shadow-lg d-flex flex-column align-items-center justify-content-center" style="height: 75vh">
                            <img src="storage/img/system.png" class="serviceIcon m-4">
                            <p class="serviceText m-2">MANAGEMENT SYSTEMS</p>
                            <p class="descText m-4" >Looking for a more efficient and less costly system? Anteriore’s database management systems provides an integrated platform that includes finance, inventory, human resource, and point of sales tailor fit for your business.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 20vh"></div>
            </div>
        </section>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
   <script>
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
    <script>
        $(document).ready(function(){
         $(".main").onepage_scroll({
         sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
         easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
         animationTime: 700,             // AnimationTime let you define how long each section takes to animate
         pagination: false,                // You can either show or hide the pagination. Toggle true for show, false for hide.
         updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
         beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
         afterMove: function(index) {},   // This option accepts a callback function. The function will be called after the page moves.
         loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
         responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
         direction: "vertical"      
            });
        });
     
    </script>

  </body>
</html>