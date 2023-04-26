<?php
require "utils.php";
require "db_connection.php";

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $query = "SELECT * FROM camping_site WHERE sitename LIKE '%$search%' OR location LIKE '%$search%';";
  if (isset($_GET['pitch'])) {
    $pitch = $_GET['pitch'];
    $query = "SELECT * FROM camping_site WHERE pitch = '$pitch' AND (sitename LIKE '%$search%' OR location LIKE '%$search%');";
  }
  $campsites = $connection->query($query);
} else {
  $campsites = $connection->query("SELECT * FROM camping_site;");
}

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
            <select name="" onchange="search()">
              <option selected disabled value="all">Pitch type</option>
              <option value="tent">Tent</option>
              <option value="caravan">Touring Caravan</option>
              <option value="motorhome">Motorhome</option>
              <option value="treehouse">Treehouses</option>
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
            <a href='campsite.php?id=" . $campsite['id'] . "' class='card'>
              <picture>
                <img src='images/campsites/" . $campsite['campsiteid'] . ".jpg' alt='" . $campsite['sitename'] . "' />
              </picture>
              <div class='content'>
                <h3>" . $campsite['sitename'] . "</h3>
                <small>Location: " . $campsite['location'] . "</small>
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