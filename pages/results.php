<!DOCTYPE html>

<html lang="en">

<head>
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
              <p>Take a look at the kits our estimate calculator suggested for your dwelling...</p>
              <p>Our sales team will be in toush soon!</p>
            </div>

            <div class="why-vs-boxes-container">
              <button class="why-boxes box-float-left" type="submit" name="submit"
                value="Learn More about option 1">
                <h2>6 Panel System</h2>
                <p>From €5,949</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €1,884 available</h6>
                </div>
              </button>
              <button class="why-boxes box-float-center" type="submit" name="submit"
                value="Learn More About option 2">
                <h2>12 Panel System + Diverter</h2>
                <p>From €8,750</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €2,400 available</h6>
                </div>
              </button>
              <button class="why-boxes box-float-right" type="submit" name="submit"
                value="Learn More about option 3">
                <h2>12 Panel System + Battery + Diverter</h2>
                <p>From €14,945</p>
                <div class="banner">
                  <h6 class="sub-text">Grant of €2,400 available</h6>
                </div>
              </button>
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