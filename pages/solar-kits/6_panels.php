<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Vision Solar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      body {font-family: "Lato", sans-serif}
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
    <link rel="icon" type="image/png" href="../../images/Vision_solar_logo_eye_sun_small.png">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/slideshow.js"></script>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/estimate_1.css">
    <link rel="stylesheet" href="/css/estimate_results.css">

  </head>
  <body>

  <?php include '../../assets/header.php';?>
    <!-- <div id="header"></div> -->
    <div id="privacy-policy"></div>

    <div>
        <div class="estimate-heading">
            <h1>6 Panels System</h1>
            <p><strong>Great news! Based on your answers we have found the perfect solar PV package for you.<strong></p>
            <!-- Photos here -->
            <!-- <img src="/images/logos/jinko/JinkoMonofacial-black frame.png" alt="image of solar panel"> -->
            <!-- <div class="image-container slideshow-container">
              <img class="slideshow-img" src="/images/logos/jinko/JinkoMonofacial-black frame.png" alt="Jinko Frame">
              <img class="slideshow-img" src="/images/logos/renusol/Renusol_Logo_RGB_high_res.jpg" alt="Renusol Mounting System">
              <img class="slideshow-img" src="/images/logos/solis/Solis1PhS6Inverter.jpg" alt="Solis Inverter">
            </div> -->
            <div class="row">
              <div class="column">
                <img class="system-images" src="/images/logos/jinko/JinkoMonofacial-black frame.png" style="width:100%">
              </div>
              <div class="column">
                <img class="system-images" src="/images/logos/solis/Solis1PhS6Inverter.jpg" style="width:100%">
              </div>
              <div class="column">
                <img class="system-images" id="renusol-logo" src="/images/logos/renusol/Renusol_Logo_RGB_high_res.jpg" style="width:100%">
              </div>
            </div>

            <h3>2.52kW 6 Panel System &amp; Solis Inverter incl. SEAI Grant</h3>
            <br />
            <div class="container">
            <table>
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Panels</td>
                  <td>6 Jinko Tiger Neo 420W modules</td>
                </tr>
                <tr>
                  <td>Inverter</td>
                  <td>Solis inverter with 10 year warranty</td>
                </tr>
                <tr>
                  <td>Mounting</td>
                  <td>Renusol mounting system</td>
                </tr>
              </tbody>
            </table>
    </div>
            <br />
            <p><strong>Notes</strong></p>
            <p>
              <li>Grant of €1,956 available</li>
              <li>Safe Electric Certification</li>
              <li>SEAI application &amp; paperwork</li>
              <li>Green loans available</li>
              <li>2 year workmanship guarantee</li>
            </p>
            <h3><strong>Pricing</strong></h3>
            <h1>€6,311</h1>
            <br /><br /><br /><br /><br /><br /><br /><br />
            <!-- <h3>Or</h3>
            <h3><strong>from</strong></h3>
            <h2>€50</h2>
            <h3>per month</h3> -->

            <!-- <button class="book-a-call-button" type="button" onclick="location.href='#'">
              <p class=quote_button_text>Book a Call!</p>
            </button>
            <br />
            <br />
            <button class="book-a-call-button" type="button"  onclick="location.href='#'">
              <p class=quote_button_text>View Details</p>
            </button> -->

            <h2><strong>Not the one for you? Don&#39;t worry! We have plenty of Solar PV packages that suit your needs!</strong></h3>
            <br />
        </div>
    </div>
    <span class="spacing"></span>
    <div id="footer"></div>
    <script>
      /* Automatic cycling */
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("slideshow-img");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.opacity = "0";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        slides[slideIndex-1].style.opacity = "1";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
      }
    </script>
    </body>
</html>
