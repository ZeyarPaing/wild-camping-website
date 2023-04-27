<?php
require "utils.php";
require "db_connection.php";
$pitches = $connection->query("SELECT * FROM pitch");

$search = $_GET['search'];
$pitch = $_GET['pitch'];
$query = "";
if (!empty($search) && !empty($pitch)) {
  $query = "SELECT * FROM camping_site cs
  INNER JOIN pitch p ON p.pitchid = cs.pitchid
  WHERE p.pitchname = '$pitch' AND (cs.sitename LIKE '%$search%' OR location LIKE '%$search%');";
} else if (!empty($pitch) && empty($search)) {
  $query = "SELECT * FROM camping_site cs
  INNER JOIN pitch p ON p.pitchid = cs.pitchid
  WHERE p.pitchname = '$pitch';";
} else if (empty($pitch) && !empty($search)) {
  $query = "SELECT * FROM camping_site cs
  INNER JOIN pitch p ON p.pitchid = cs.pitchid
  WHERE cs.sitename LIKE '%$search%' OR location LIKE '%$search%';";
} else {
  $query = "SELECT * FROM camping_site cs INNER JOIN pitch p ON p.pitchid = cs.pitchid;";
}
$campsites = $connection->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Explore", "Explore campsites");
?>

<body>
  <?php
  renderHeader();
  ?>
  <main>
    <div class="explore-search contain-y">
      <h2>Explore locations by pitch types</h2>
      <div class="search-input">
        <form method="GET">
          <div class="pitch-type-select">
            <select name="pitch">
              <option disabled>Pitch type</option>
              <option value="">All</option>
              <?php
              while ($pitch = $pitches->fetch_assoc()) {
                // echo "<option value='{$pitch['pitchname']}'>{$pitch['pitchname']}</option>";
                //selected from get 
                if (isset($_GET['pitch']) && $_GET['pitch'] == $pitch['pitchname']) {
                  echo "<option value='{$pitch['pitchname']}' selected>{$pitch['pitchname']}</option>";
                } else {
                  echo "<option value='{$pitch['pitchname']}'>{$pitch['pitchname']}</option>";
                }
              }
              ?>
            </select>
          </div>
          <input type="text" name="search" value="<?php echo $_GET['search']; ?>" placeholder="Search for a pitch" />
          <button class="btn btn-primary" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
          </button>
        </form>
      </div>
    </div>


    <section class="campsites contain-y">
      <div class="container">

        <h2>Campsites</h2>
        <div class="site-listing">
          <?php
          //empty search
          if ($campsites->num_rows == 0) {
            echo "<p>Sorry, No results found for your search.</p>";
          }
          while ($campsite = $campsites->fetch_assoc()) {
            echo "
            <a target='_blank' href='{$campsite['maplink']}' class='card'>
              <picture>
                <img src='images/campsites/" . $campsite['campsiteid'] . ".jpg' alt='" . $campsite['sitename'] . "' />
              </picture>
              <div class='content'>
                <h3>" . $campsite['sitename'] . "</h3>
                <small class='pitch-label'>" . $campsite['pitchname'] . "</small>
                <small>" . $campsite['location'] . "</small></br>
                <small>" . $campsite['price'] . "</small></br>
                <small> Rating: " . $campsite['rating'] . "</small>
              </div>
              </a>";
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