<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GWSC</title>
  <link preload href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,500,600&display=swap" rel="stylesheet" />
  <link preload href="https://api.fontshare.com/v2/css?f[]=200,300,400&display=swap" rel="stylesheet" />
  <link preload rel="stylesheet" href="styles/index.css" />
  <link preload rel="stylesheet" href="styles/reviews.css" />
</head>
<?php
require "utils.php";
?>

<body>
  <header>
    <nav class="container">
      <a href="index.php" class="logo"> GWSC </a>
      <ul>
        <ul>
          <?php
          get_nav_items();
          ?>
        </ul>
      </ul>
    </nav>
  </header>

  <main>
    <section class="contain-y container">
      <h1>Reviews</h1>
      <div class="reviews">
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
        <div class="review">
          <div class="place">
            <img src="https://images.unsplash.com/photo-1504851149312-7a075b496cc7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=810&q=80" alt="Campsite 1" />
          </div>
          <div>
            <h3>Noth Pole Campsite</h3>
            <div class="rating-wrapper">
              <div class="rating">
                <input type="radio" name="rating" id="star1" value="1" />
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2" />
                <label for="star2">&#9733;</label>
                <input checked type="radio" name="rating" id="star3" value="3" />
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4" />
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5" />
                <label for="star5">&#9733;</label>
              </div>
            </div>

            <p>
              <!-- generate a dummy review -->
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
            </p>
            <div class="author">
              <h5>John Doe</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="contain-y container">
    <section>
      <div>
        <a href="#" class="logo"> GWSC </a>
        <p>
          Global Wild Swimming and Camping <br />
          Explore the untouched nature together!
        </p>
        <!-- <img
              alt="GWSC Logo"
              width="100"
              height="100"
              src="https://img.freepik.com/free-vector/flat-design-culture-logo-template_23-2149845371.jpg?w=1060&t=st=1680329836~exp=1680330436~hmac=4498a9e4fe00c5456f9e8986a8b6fbd7618e0cac979d4e271ad0be0606508892"
            /> -->
        <p class="follow-us">Follow us on</p>
        <div class="social-media-icons">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Ebene 1" viewBox="0 0 1024 1024" width="2em" height="2em" id="facebook-logo-2019">
              <path fill="#fff" d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z"></path>
              <path fill="transparent" d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z"></path>
            </svg>
          </a>
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2em" height="2em">
              <path fill="#fff" d="M16 0C7.163 0 0 7.163 0 16c0 8.836 7.163 16 16 16s16-7.164 16-16c0-8.837-7.163-16-16-16z"></path>
              <path fill="transparet" d="M18.226 8.886c-1.59.579-2.595 2.071-2.481 3.704l.038.63-.636-.077c-2.315-.296-4.338-1.299-6.056-2.984l-.84-.836-.215.617c-.458 1.376-.165 2.83.789 3.808.509.54.394.617-.483.296-.305-.103-.573-.18-.598-.141-.089.09.216 1.26.458 1.724.331.644 1.005 1.273 1.743 1.647l.624.296-.739.011c-.712 0-.738.013-.661.284.254.836 1.259 1.724 2.379 2.11l.789.27-.687.412a7.122 7.122 0 0 1-3.41.951c-.573.013-1.044.064-1.044.103 0 .128 1.553.848 2.455 1.132 2.71.836 5.929.475 8.346-.952 1.718-1.016 3.435-3.036 4.237-4.992.433-1.041.865-2.945.865-3.858 0-.592.038-.669.75-1.376.42-.412.814-.862.891-.99.128-.245.114-.245-.534-.026-1.081.386-1.234.335-.699-.244.394-.412.865-1.158.865-1.376 0-.038-.191.026-.407.141-.229.129-.738.322-1.12.437l-.687.219-.623-.426c-.344-.231-.826-.489-1.081-.566-.65-.18-1.642-.154-2.228.052z"></path>
            </svg>
          </a>
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="2em" height="2em">
              <path fill="#fff" d="M13.83 19.259L19.262 16l-5.432-3.259z"></path>
              <path fill="#fff" d="M16 0C7.164 0 0 7.163 0 16s7.164 16 16 16 16-7.164 16-16S24.836 0 16 0zm8.688 16.701c0 1.5-.174 3-.174 3s-.17 1.278-.69 1.839c-.661.738-1.401.742-1.741.786-2.432.186-6.083.192-6.083.192s-4.518-.044-5.908-.186c-.387-.077-1.254-.055-1.916-.792-.521-.562-.69-1.839-.69-1.839s-.174-1.499-.174-3v-1.406c0-1.5.174-2.999.174-2.999s.17-1.278.69-1.841c.661-.739 1.401-.743 1.741-.785 2.431-.188 6.079-.188 6.079-.188h.008s3.648 0 6.079.188c.339.042 1.08.046 1.741.784.521.563.69 1.841.69 1.841s.174 1.5.174 3v1.406z"></path>
            </svg>
          </a>
        </div>
      </div>
      <ul>
        <ul>
          <?php
          get_nav_items();
          ?>
        </ul>
      </ul>
    </section>
    <section class="copy-right">
      <p>
        &copy; 2023 Global Wild Swimming and Camping. All rights reserved.
      </p>
    </section>
  </footer>
</body>

</html>