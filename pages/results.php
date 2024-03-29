<!DOCTYPE html>

<html lang="en">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SQ96YVTXVJ">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SQ96YVTXVJ');
</script>
  <title>Vision Solar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    body {
      font-family: "Lato", sans-serif
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
  </script>
  <link rel="icon" type="image/png" href="../images/Vision_solar_logo_eye_sun_small.png">
  <link rel="stylesheet" href="/css/global.css">
  <link rel="stylesheet" href="/css/one_page_estimate.css">
  <link rel="stylesheet" href="/css/estimate_2.css">
  <link rel="stylesheet" href="/css/form.css">
  <link rel="stylesheet" href="/css/results.css">

</head>

<body>
  <?php include '../assets/header.php';?>

  <div id="privacy-policy"></div>

  <section>
    <div>
      <form action="mail_handler.php" method="post">
        <div>
          <div>
            <div class="estimate-heading">
              <br />
              <h1>Results</h1>
              <p>Take a look at the systems we think would suit your home...</p>
              <p>A member of our Sales Team will be in touch soon!</p>
            </div>

            <div class="why-vs-boxes-container">
              <button class="why-boxes box-float-left" type="submit" name="submit"
                value="Learn More about option 1">
                <h2>6 Panel System</h2>
                <p>From €5,850</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €1,884 available</h6>
                </div>
              </button>
              <button class="why-boxes box-float-center" type="submit" name="submit"
                value="Learn More About option 2">
                <h2>12 Panel System + Diverter</h2>
                <p>From €8,200</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €2,400 available</h6>
                </div>
              </button>
              <button class="why-boxes box-float-right" type="submit" name="submit"
                value="Learn More about option 3">
                <h2>12 Panel System + Battery + Diverter</h2>
                <p>From €11,450</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €2,400 available</h6>
                </div>
              </button>
            </div>
            <br />
            <div class="custom-option">
              <p>None of these Systems suit your needs? Talk to our Sales team at <a class="link-1" href="mailto:info@visionsolar.ie"><i class="fa fa-envelope"></i>  info@visionsolar.ie</a>, or use the <a href="../../pages/contact-us.php">Contact Us</a> page to describe the perfect system for you!</p>
            </div>
          </div>
      </form>
    </div>
  </section>
  <script>
    function update_values() {
      name_value = localStorage.getItem('name');
      document.getElementById("hidden_name").value = name_value;
    }
  </script>
  <span class="spacing"></span>
  <?php include '../assets/footer.php';?>
</body>

</html>