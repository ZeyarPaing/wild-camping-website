<?php
require "utils.php";

$pitches = [
  ["name" => "Tent", "image" => "tent.jpg"],
  ["name" => "Touring Caravan", "image" => "caravan.jpg"],
  ["name" => "Motorhome", "image" => "motorhome.jpg"],
];

$features = [
  ["title" => "Stunning Natural Beauty", "description" => "We offer the perfect opportunity to escape the hustle and bustle of everyday life and connect with nature"],
  ["title" => "Wide Range of Options", "description" => "We offer a wide range of camping options to suit every style and budget"],
  ["title" => "Family Friendly", "description" => "We welcome families with open arms and offer a range of activities for children of all ages, including hiking, fishing, and nature walks"],
  ["title" => "Pet Friendly", "description" => "We offer pet-friendly accommodations and walking trails to make sure that everyone in your family can enjoy the camping experience."],
  ["title" => "Modern Amenities", "description" => "Our campsites offer modern bathrooms, showers, and laundry facilities to ensure that your comfortable and convenient"],
  ["title" => "Free Wifi", "description" => "We offer Wi-Fi at our campsites so you can stay connected with loved ones or work remotely if needed."],
];

$campsites = $connection->query("SELECT * FROM campsites");

?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Information", "Information about our services");
?>

<body>
  <?php
  renderHeader();
  ?>
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
  <?php
  renderFooter();
  ?>
</body>

</html>