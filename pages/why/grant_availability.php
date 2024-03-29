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
    <link rel="stylesheet" href="/css/table.css">
    <link rel="stylesheet" href="/css/call_to_action_button.css">

  </head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XMCMYLZC7L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XMCMYLZC7L');
</script>
<?php include '../../assets/header.php';?>
    <div id="privacy-policy"></div>

    <div>
      <div>
        <div class="full-container" style="width:100%">

        <div class="parent-content">
          <div class="parent-content text-content-centered">
            <h2 class="text-center">Grant Availability!</h2>
            <p class="text-center">Government enthusiasm for solar energy is clear through the generous grants that currently exist. Only SEAI registered installers such as Vision Solar can complete grant work. Grants of up to €2400 are currently available for solar PV installation. Grants amounts are calculated as follows:</p>
            <br /><br />
            <table>
              <!-- <caption></caption> -->
              <thead>
                <tr class="thead">
                  <th scope="col">Panels</th>
                  <th scope="col">Output</th>
                  <th scope="col">Grant</th>
                  <th scope="col">Notes</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="Panels">6 panels</td>
                  <td data-label="Output">2.22kW</td>
                  <td data-label="Grant">€1866</td>
                  <td data-label="Notes">(€1800 for 2kW + €66 for 0.22kW)</td>
                </tr>
                <tr>
                  <td scope="row" data-label="Panels">10 panels</td>
                  <td data-label="Output">3.7kW</td>
                  <td data-label="Grant">€2310</td>
                  <td data-label="Notes">(€2100 for 3kW + €210 for 0.7kW)</td>
                </tr>
                <tr>
                  <td scope="row" data-label="Panels">14 panels</td>
                  <td data-label="Output">5.18kW</td>
                  <td data-label="Grant">€2400</td>
                  <td data-label="Notes">(€2400 for 4kW, €0 for above 4kW)</td>
                </tr>
              </tbody>
            </table>
          </div>


          <br /><br />

          <div class="cta_container">

            <a href="../instant-quote-calculator.php">
              <button class="cta-button-quote" type="button"><p class=cta_button_text>Get an Instant Quote! <i class="fa-solid fa-arrow-right"></i></p></button>
            </a>
          </div>

            
        </div>
        </div>
        <span class="spacing"></span>
        <?php include 'assets/footer.php';?>
      
    </body>
</html>