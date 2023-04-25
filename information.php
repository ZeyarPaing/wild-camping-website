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
  <link preload rel="stylesheet" href="styles/information.css" />
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
      <div class="interest-container">
        <h2>Pitch types</h2>
        <div class="interest">
          <a href="#">
            <img width="500" src="https://media.self.com/photos/5f91bd4c64e4d5ecd8b3967e/4:3/w_3456,h_2592,c_limit/543517888.jpg" />
            <h3>Tent</h3>
            <p>Available</p>
          </a>
          <a href="#">
            <img width="500" src="https://www.caravanhire-online.co.uk/wp-content/uploads/2020/04/home-mobile.jpg" />
            <h3>Touring Caravan</h3>
            <p>Available</p>
          </a>
          <a href="#">
            <img width="500" src="https://www.rsmotorhomes.com/wp-content/uploads/2022/10/Image_1.png" />
            <h3>Motorhome</h3>
            <p>Available</p>
          </a>
          <a href="#">
            <img width="500" src="https://images.squarespace-cdn.com/content/v1/5726e4dd8259b576620e9347/1634331291996-P3472088MD3RAF10LL45/O2+Treehouse+Glazed+Perch+-Occidental+-+7.jpg" />
            <h3>Treehouses</h3>
            <p>Available</p>
          </a>
        </div>
      </div>
      <div class="interest-container">
        <h2>Locations</h2>
        <div class="interest">
          <a href="#">
            <img src="https://www.google.com/maps/vt/data=4uoP3Jg8Lw58xVUsxED07eIo8WPUCJGuj8WeWIco7FFVMiUJgo0u-YTSdE3tjJ8UXI6_pdwwvnpbigHb1AQ8Z50dHZ5bP3oymAR0jn-zYK79QWfypgeB29_n53JUV07rJh86N1fDvtnelWmSxumvtgzTVy7FlVh8jEq3jA6eFFeZpFRqIxDbYOsntEgUSGvE43z4c8Bw-05ITE4XheEa8aopgpgowahxDvXJ9-k2GtsowLJyIrZPaB58OEqdVw" />
            <h3>Yangon</h3>
          </a>
          <a href="#">
            <img src="https://www.google.com/maps/vt/data=lqL3e6rSCgqB6fqm7ZP1b8d3lA59HatP-5RiqqupNJTkgeqbg_OR837bXGHUW8K0nn7QLHo2GmPWYxX6ddKn94A2ouDefxyJ0-sr8FxvdWEf2ubaFD3D5mOnw_KSeCK5xrCWQAwCM-QAAiCFkKa-YbJIFbq-VJPMrwILUZ0f6lxD8J76Z7B5sYSxfTR-efvaejpzdw-YJ0lqdgEJzzv56rPQ-j6pZsCWduypHgyBG4WZMU3NbBvUGPio8pgRYg" />
            <h3>Mandalay</h3>
          </a>
          <a href="#">
            <img src="https://www.google.com/maps/vt/data=kr-MqrBuO9_8TiQQxaxISqPSDnnpem5zuaIH_s1_1yqnPA2pdvhhu1DR5xv4hEA_RMYGFMu1kISclSus-Xe4llpO6FRm-G9OyIfgi-JQxa3xsCbheP6kc62VCwIjXQUnVRo6ctbBbYEuWNL4zVyYp5kJcR6643H2ookSqyJ9OTxiazBPyjlL2Dv9S4Kov5SZwZNJ5sHlXe3zgmZozC7cT9_vktHje1FL1O3OeFwQ3q8oxwxWR-EiOE0uAZia-g" />
            <h3>Shan</h3>
          </a>
          <a href="#">
            <img src="https://www.google.com/maps/vt/data=Eo-JYiTKLNLuy4yJoSqwKutIUI8abMSnYj7if6O11rLacv7mz4eBd4Ga6vXFMYr_N8ZaJAwmr6knH_bizeEkN1t6bqFfKuPLHw9N2AYCLy77jywXT2mtA16tcqREa9kiOwGNGw1eMf7n-trcvcLdYYgvsfRIPzrJJuKsaYWI3BspGzbMnqoJee0KbNJyHP5QIemJqPyCg-CnB0JCBa7kZPyD1ttHc9GA-X45u060Qj290uAoD-G4Q7ZVaYszNw" />
            <h3>Kayin</h3>
          </a>
        </div>
      </div>
      <div class="interest-container">
        <h2>Local Attractions</h2>
        <div class="interest">
          <a href="#">
            <img src="https://myanmarmix.com/sites/myanmarmix.com/files/styles/collageformatter/public/media-img/131130666_106128134715132_8198256846005525017_o.jpg?itok=q3BFG5Gu" />
            <h3>Yangon</h3>
          </a>
          <a href="#">
            <img src="https://myanmarmix.com/sites/myanmarmix.com/files/styles/collageformatter/public/media-img/3_19.jpg?itok=YQznWwYO" />
            <h3>38 Miles</h3>
          </a>
          <a href="#">
            <img src="https://myanmarmix.com/sites/myanmarmix.com/files/styles/collageformatter/public/media-img/128996703_109024094374996_3594465526314118896_o.jpg?itok=bbtp4HJo" />
            <h3>Rubber Village</h3>
          </a>
          <a href="#">
            <img src="https://myanmarmix.com/sites/myanmarmix.com/files/styles/collageformatter/public/media-img/2_27.jpg?itok=X2hshe4f" />
            <h3>Green leaves</h3>
          </a>
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