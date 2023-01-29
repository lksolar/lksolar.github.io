<!DOCTYPE html>
 
<html lang="en">
  <head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XMCMYLZC7L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XMCMYLZC7L');
</script>
<!-- End of GTAG-->
    <title>Vision Solar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {font-family: "Lato", sans-serif; margin: 0;}
    </style>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <script> 
      $(function(){
        $("#header").load("/assets/header.html"); 
        $("#privacy-policy").load("/assets/privacy_policy.html"); 
        $("#footer").load("/assets/footer.html"); 
      });
    </script> 
    <link rel="icon" type="image/png" href="images/Vision_solar_logo_eye_sun_small.png">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="javascript/slideshow.js"></script>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/bootstrap.css">

  </head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XMCMYLZC7L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XMCMYLZC7L');
</script>
<body>
<?php include 'assets/header.php';?>
<!-- <?php include 'assets/privacy-policy.php';?> -->

    <!-- <div id="header"></div> -->
    <div id="privacy-policy"></div>

    <div>
      <div>
        <div class="full-container" style="width:100%">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <div class="carousel-inner">
              <!-- First image, dots, text and buttons -->
              <div class="item active">
                <span class="info-dot dot-position-1 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 1</p></span>
                <span class="info-dot dot-position-1-2 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 1-2</p></span>
                <img src="/images/solar_1.png" alt="Solar 1" style="width:100%;">
              </div>
              <!-- Second image, dots, text and buttons -->
              <div class="item">
                <span class="info-dot dot-position-2 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 2</p></span>
                <span class="info-dot dot-position-2-2 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 2-2</p></span>
                <img src="/images/solar_2.png" alt="Solar 2" style="width:100%;">
              </div>
              <!-- Third image, dots, text and buttons -->
              <div class="item">
                <span class="info-dot dot-position-3 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 3</p></span>
                <span class="info-dot dot-position-3-2 myDIV"></span>
                <span class="dot-position-4 hide-custom" id="show-box"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 3-2</p></span>
                <img src="/images/solar_3.png" alt="Solar 3" style="width:100%;">
              </div>
              <a href="/pages/instant_quote_calculator.php">
                <button class="carousel-button-quote" type="button"><p class=quote_button_text>Get an Instant Quote! <i class="fa-solid fa-arrow-right"></i></p></button>
              </a>
              <!-- <a href="/pages/grant_calculator.html">
                <button class="carousel-button-other" type="button">Grant Calculator!</button>
              </a> -->
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <i class="fa fa-chevron-left prev" style="font-size:36px"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <i class="fa fa-chevron-right next" style="font-size:36px"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="parent-content">
          <!-- <div class="parent-content text-content-centered">
            <h2 class="text-center">About Us!</h2>
            <p class="text-center"><i>Needs Designs</i></p>
            <p class="text-center">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
              ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div> -->
          <br />

          <div class="parent-content text-content-centered">
            <h2 class="text-center">Why Vision Solar</h2>
            <div class="why-vs-boxes-container">
              <div>
                <!-- Box 1 of 3 -->
                <a class="save-env-box">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/save_the_environment.html';" class="why-boxes box-float-left">
                    <h2 class="box-heading">Save the environment</h2>
                    <span class="box-text-content"><p>Installing solar PV panels can mean an average Irish family produces half a tonne less Co2 per year.</p></span>
                    <a class="box-learn-more" href="pages/why/save_the_environment.html">...learn more!</a>
                  </div>
                </a>
                <!-- Box 2 of 3 -->
                <a class="save-money">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/save_money.html';" class="why-boxes box-float-center">
                    <h2 class="box-heading">Save money</h2>
                    <span class="box-text-content"><p>In Ireland, installing a well located 3kW system could save you €1,118 per year.</p></span>
                    <a class="box-learn-more" href="pages/why/save_money.html">...learn more!</a>
                  </div>
                </a>
                <!-- Box 3 of 3 -->
                <a class="next-btn">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/energy_security.html';" class="why-boxes box-float-right">
                    <h2 class="box-heading">Energy Security</h2>
                    <span class="box-text-content"><p>Installing a solar PV system will give you control over your own electricity, making you less reliant on the national grid. You will be able to use your own power even during power outages.</p></span>
                    <a class="box-learn-more" href="pages/why/energy_security.html">...learn more!</a>
                  </div>
                </a>
              </div>
            </div>
            <span class="box-spacer-y"></span>
            <div class="why-vs-boxes-container">
              <div>
                <!-- Box 1 of 3 -->
                <a class="next-btn">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/inflation_busters.html';" class="why-boxes box-float-left">
                    <h2 class="box-heading">Inflation Busters</h2>
                    <span class="box-text-content"><p>Fight inflation by investing in money saving assets like solar panels. In Ireland, solar panels typically pay for themselves in 5-10 years. At the current European rate of 9% inflation €5000 is estimated to be worth … in 5 years time.</p></span>
                    <a class="box-learn-more" href="pages/why/inflation_busters.html">...learn more!</a>
                  </div>
                </a>
                <!-- Box 2 of 3 -->
                <a class="next-btn">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/quality_service.html';" class="why-boxes box-float-center">
                    <h2 class="box-heading">Quality Service</h2>
                    <span class="box-text-content"><p>Vision Solar is an SEAI registered installer and is one of Irelands fastest growing installers of solar PV panels. We use only the highest quality products from the worlds leading solar PV manufacturers such as Longi and Q-Cells. All of our panels come with a 25 year warranty.</p></span>
                    </p>
                    <a class="box-learn-more" href="pages/why/quality_service.html">...learn more!</a>
                  </div>
                </a>
                <!-- Box 3 of 3 -->
                <a class="next-btn">
                  <div style="cursor: pointer;" onclick="window.location='pages/why/grant_availability.html';" class="why-boxes box-float-right">
                    <h2 class="box-heading">Grant Availability</h2>
                    <span class="box-text-content"><p>Government enthusiasm for solar energy is clear through the generous grants that currently exist. Grants of up to €2400 are currently available for solar PV installation.</p></span>
                    <a class="box-learn-more" href="pages/why/grant_availablity.html">...learn more!</a>
                  </div>
                </a>
              </div>
            </div>
    </div>
    </div>
    </div>
    </div>

            


          <!-- <div class="parent-content">
            <div class="child-content" id="myChart" style="width: 100%; height: 40%;"></div>
          </div>
          <script>
            google.charts.load('current',{packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
            // Set Data
            var data = google.visualization.arrayToDataTable([
              ['Cost', 'Unit(kWh'],
              [50,7],[60,8],[70,8],[80,9],[90,9],
              [100,9],[110,10],[120,11],
              [130,14],[140,14],[150,15]
            ]);
            // Set Options
            var options = {
              title: 'Price of Electricity over time',
              hAxis: {title: 'Cost'},
              vAxis: {title: 'Unit'},
              legend: 'none'
            };
            // Draw
            var chart = new google.visualization.LineChart(document.getElementById('myChart'));
            chart.draw(data, options);
            }
          </script> -->
        


        </div>
        </div>
        <span class="spacing"></span>


        <div class="get-in-touch-container">
          <div class="get-in-touch-image">
            <img src="./images/Logo.Brand_VS-01.png" alt="vision_solar_logo" width="500" height="600">
          </div>
          <div class="get-in-touch-text">
              <h1 class="get-in-touch-header">Interested?</h1>
              <h3 class="get-in-touch-header">Get in touch <a href="/pages/contact_us.php">here!? <i class="fas fa-arrow-circle-right orange"></i></a></h3>
          </div>
        </div>
        <br />
        <br /><br /><br /><br />


        <!-- <span class="spacing"></span> -->
        <?php include 'assets/footer.php';?>
      
    </body>
</html>