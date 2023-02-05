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
    <link rel="icon" type="image/png" href="../images/Vision_solar_logo_eye_sun_small.png">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="javascript/slideshow.js"></script>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/estimate_1.css">
    <link rel="stylesheet" href="/css/form.css">
    <link rel="stylesheet" href="/css/contact_us.css">

  </head>
  <body>
  <?php include '../assets/header.php';?>
    <!-- <div id="header"></div> -->
    
    <div id="privacy-policy"></div>

    <div>
        <div class="estimate-heading">
            <h1>Contact Us</h1>
            <p>Feel free to contact us using the boxes below, or email us at:</P>
            <a href="mailto:admin@visionsolar.ie">admin@visionsolar.ie</a>
        </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<div id="snackbar">Message sent!</div>
<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    <form action="contact_us_mail_handler.php" method="post">
    <div class="form-bg">
      <br />
      <div class="form">
          <input placeholder="Name" maxlength="50" id="fname" name="fname" type="text" required>
          <br />
          <input placeholder="E-mail" maxlength="100" id="email" name="form-email" type="text" required>
          <br />
          <input placeholder="Message" maxlength="500" id="message" name="form-message" type="text" required>
          
          <!-- <label for="form-auth">
              <input id="form-auth" type="checkbox">
              <div class="box"></div>
              <sup>
                  I agree to give my information to be used to contact me.
              </sup>
          </label> -->
      </div>
      <br />
      <button type="submit" name="submit" class="send-button">Send</button>
      <br /><br />
      </div>
      
    </form>
    
    <span class="spacing"></span>
    <div id="footer"></div>

    </body>
    <script>
    window.onload = (event) => {
      var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
};
</script>
</html>
