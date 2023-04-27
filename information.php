<?php
require "utils.php";
require_once "db_connection.php";

$pitches = $connection->query("SELECT * FROM pitch");
$attractions = $connection->query("SELECT * FROM local_attraction");
$locations = $connection->query("SELECT DISTINCT location, campsiteid, maplink FROM camping_site");

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
          <?php
          while ($pitch = $pitches->fetch_assoc()) {
            echo "
            <a href='explore.php?pitch=" . $pitch['pitchname'] . "'>
              <img src='images/pitches/{$pitch['pitchid']}.jpg' />
              <h3>{$pitch['pitchname']}</h3>
              <p>" .  ($pitch['availability'] == 1 ?  '🟢 Available' : '🔴 Unavailable') . "</p>
              <small>{$pitch['description']}</small>
            </a>
            ";
          }
          ?>
        </div>
      </div>
      <div class="interest-container">
        <h2>Locations</h2>
        <div class="interest">
          <?php
          while ($location = $locations->fetch_assoc()) {
            echo "
            <a target='_blank' href='{$location['maplink']}'>
              <img src='images/campsites/{$location['campsiteid']}.jpg' />
              <h3>{$location['location']}</h3>
              <small>Click to view on Google Maps</small>
            </a>
            ";
          }
          ?>
        </div>
      </div>
      <div class="interest-container">
        <h2>Local Attractions</h2>
        <div class="interest">

          <?php
          while ($attraction = $attractions->fetch_assoc()) {
            echo "
            <a>
              <img src='images/campsites/{$attraction['localid']}.jpg' />
              <h3>{$attraction['localname']}</h3>
              <small>{$attraction['description']}</small>
            </a>
            ";
          }
          ?>

        </div>
      </div>
    </section>
  </main>
  <?php
  renderFooter();
  ?>
</body>

</html>