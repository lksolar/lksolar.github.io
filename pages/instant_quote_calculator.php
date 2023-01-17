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
    <link rel="icon" type="image/png" href="../images/Vision_solar_logo_eye_sun_small.png">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/one_page_estimate.css">
    <link rel="stylesheet" href="/css/estimate_2.css">

  </head>
  <body>
  <?php include '../assets/header.php';?>
    
  <div id="privacy-policy"></div>

<section>
    <div>
    <form action="mail_handler.php" method="post">
  
        <div class="step step-1 active-panel">
        <div class="container">
    <div class="plans">
        <p>Welcome to Vision Solars online estimator tool! Let's get you started with a few simple questions. </p>
      <div class="title">Which of these best describes your home?</div>

      <label class="plan" for="semi">
        <input type="radio" id="semi" name="house-type" value="semi" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Semi-Detached</span>
            <p>A semi-detached house.</p>
          </div>
        </div>
      </label>
  
      <label class="plan" for="detached">
        <input type="radio" id="detached" name="house-type" value="detached" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Detached</span>
            <p>A detached house.</p>
          </div>
        </div>
      </label>

      <label class="plan" for="terrace">
        <input type="radio" id="terrace" name="house-type" value="terrace" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Terrace</span>
            <p>A terrace house.</p>
          </div>
        </div>
      </label>
    </div>
  </div>
        </div>

        <div class="step step-2">
        <div class="container">
    <div class="plans">
        <div class="title">When do you use your Home the most?</div>

      <label class="plan" for="morning">
        <input type="radio" id="morning" name="house-hours" value="morning" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Morning</span>
            <p>My Home is used mostly in the Morning.</p>
          </div>
        </div>
      </label>
  
      <label class="plan" for="afternoon">
        <input type="radio" id="afternoon" name="house-hours" value="afternoon" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Afternoon</span>
            <p>My Home is used mostly in the Afternoon.</p>
          </div>
        </div>
      </label>

      <label class="plan" for="evening">
        <input type="radio" id="evening" name="house-hours" value="evening" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>Evening</span>
            <p>My Home is used mostly in the Evening.</p>
          </div>
        </div>
      </label>

      <label class="plan" for="all-day">
        <input type="radio" id="all-day" name="house-hours" value="all-day" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>All Day</span>
            <p>My Home is used All Day.</p>
          </div>
        </div>
      </label>
    </div>
  </div>
        </div>
  
        <div class="step step-3" >
        <div class="container">
    <div class="plans">
        <div class="title">How much do you spend on your Bi-Monthly Electricity Bill?</div>

      <label class="plan" for="<200">
        <input type="radio" id="<200" name="elec-bill" value="<200" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>200</span>
            <p>I spend less then €200 every 2 months.</p>
          </div>
        </div>
      </label>
  
      <label class="plan" for="200-300">
        <input type="radio" id="200-300" name="elec-bill" value="200-300" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>€200-€300</span>
            <p>I spend between €200 - €300 every 2 months.</p>
          </div>
        </div>
      </label>

      <label class="plan" for="300-400">
        <input type="radio" id="300-400" name="elec-bill" value="300-400" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>€300-€400</span>
            <p>I spend between €300 - €400 every 2 months.</p>
          </div>
        </div>
      </label>

      <label class="plan" for="400+">
        <input type="radio" id="400+" name="elec-bill" value="400+" />
        <div class="plan-content next-btn">
          <img class="image" loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" />
          <div class="plan-details">
            <span>€400+</span>
            <p>I spend over €400 every 2 months.</p>
          </div>
        </div>
      </label>
    </div>
  </div>
        </div>
  
        <div class="step step-4">
            <div class="estimate-heading">
                <p>Nearly there! We just need a few details to complete your calculation!</p>
            </div>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <input type="button" class="next-btn" value="Next">
        </div>

        <div class="step step-5">
        <div>
        <div class="estimate-heading">
            <h1>Results</h1>
            <p>Take a look at the kits our estimate calculator suggested for your dwelling...</p>
        </div>
        <div>
          <h2>6 Panel kit</h2>
          <p>€6,300</p>
          <a href="solar-kits/6_panels.html">Learn More...</a>
          <input type="submit" name="submit" value="Learn More about our 6 Panel Kit">
        </div>
        <div>
          <h2>14 Panel kit</h2>
          <p>€8,999</p>
          <a href="solar-kits/14_panels.html">Learn More...</a>
          <input type="submit" name="submit" value="Learn More About our 14 Panel kit">
        </div>
        <div>
          <h2>16 Panel kit + Battery</h2>
          <p>€15,799</p>
          <a href="solar-kits/16_panels.html">Learn More...</a>
          <input type="submit" name="submit" value="Learn More about our 16 Panel kit options">
        </div>
    </div>

        </div>
  
      </form>
    </div>
  </section>
  <?php include '../assets/footer.php';?>
</body>
<script>
    const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .prev-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   const inputs = [];
//   form.querySelectorAll("input").forEach((input) => {
//     const { name, value } = input;
//     inputs.push({ name, value });
//   });
//   console.log(inputs);
//   form.reset();
// });

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active-panel");
  index = steps.indexOf(active);
  steps[index].classList.remove("active-panel");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active-panel");
}

</script>
</html>
