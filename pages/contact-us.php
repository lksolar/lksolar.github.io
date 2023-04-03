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
            <a href="mailto:info@visionsolar.ie">info@visionsolar.ie</a>
            <br /><br />
            <p>Or give us a call on: </p>
            <a class="link-1" href="tel:+353 894948324"><i class="fa fa-phone"></i>  +353 894948324</a>
        </div>
    </div>
    <!-- <form action="contact_us_mail_handler.php" method="post">
    <div class="form-bg">
      <br />
      <div class="form">
          <input placeholder="Name" maxlength="50" id="fname" name="fname" type="text" required>
          <br />
          <input placeholder="E-mail" maxlength="100" id="email" name="form-email" type="text" required>
          <br />
          <div>
          <textarea id="message" class="text-area" name="form-message" placeholder="Write something.." style="height:200px"></textarea>
          </div>
          
          
      </div>
      <br />
      <button type="submit" name="submit" class="send-button">Send</button>
      <br /><br />
      </div>
      
    </form> -->
    <div class="form-main-wrapper">
  <!-- Author: form Team -->
  <!-- Learn More: https://form.com -->
  <div class="form-form-wrapper">
    <form action="contact_us_mail_handler.php" method="POST">
      <div class="form-mb-5">
        <label for="name" class="form-form-label"> Full Name </label>
        <input
          type="text"
          id="fname" 
          name="fname"
          placeholder="Full Name"
          class="form-form-input"
        />
      </div>

      <div class="form-mb-5">
        <label for="email" class="form-form-label"> Email Address </label>
        <input
          type="email"
          id="email" 
          name="form-email"
          placeholder="Enter your email"
          class="form-form-input"
        />
      </div>

      <div class="form-mb-5">
        <label for="message" class="form-form-label"> Message </label>
        <textarea
          rows="6"
          id="message" 
          name="form-message"
          placeholder="Type your message"
          class="form-form-input"
        ></textarea>
      </div>

      <button type="submit" name="submit" class="send-button">Send</button>
    </form>
  </div>
</div>


    <!-- <span class="spacing"></span> -->
    <br />
    <br />
    <br />
    <?php include '../assets/footer.php';?>

    </body>
</html>
