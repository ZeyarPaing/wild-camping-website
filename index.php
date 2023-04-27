<?php
require "utils.php";
require_once "db_connection.php";
$pitches = $connection->query("SELECT * FROM pitch");
$campsites = $connection->query("SELECT * FROM camping_site cs 
INNER JOIN pitch p ON p.pitchid = cs.pitchid
ORDER BY cs.rating DESC
LIMIT 9;");

$visitors = $connection->query("SELECT visitor_count FROM gwsc_info;");
$visitor_count = $visitors->fetch_assoc()['visitor_count'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_SESSION['counted'])) {
    echo json_decode($_SESSION['counted']);
  } else {
    $visitor_count++;
    $connection->query("UPDATE gwsc_info SET visitor_count = $visitor_count;");
    $_SESSION['counted'] = json_encode(true);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead();
?>

<body>
  <?php
  renderHeader();
  ?>
  <main>
    <section class="landing">
      <div class="heading-wrapper">
        <div class="container">
          <div role="heading" aria-level="1">
            <h1>Global Wild Swimming and Camping</h1>
            <p>Explore the untouched nature together!</p>
          </div>
          <div class="search-container">
            <div class="search-input">
              <form method="get" action="explore.php">
                <input name="search" type="text" placeholder="Search" />
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <picture>
        <img alt="A night view of a tent in the forest and sky full of stars " src="images/website/home-bg-1.jpg" />
        <!-- <img alt="A man Swimming in a lake" src="images/website/home-bg-2.jpg" /> -->
      </picture>
      <small class="counter"> <?php echo $visitor_count ?> people visited </small>
    </section>

    <div class="pitch-container">
      <h2>Quickly explore popular pitches</h2>
      <div class="pitches">
        <?php
        while ($pitch = $pitches->fetch_assoc()) {
          echo "
            <a class='pitch' href='explore.php?pitch=" . $pitch['pitchname'] . "'>
            <h2>{$pitch['pitchname']}</h2>
            <picture>
              <img src='images/pitches/" . $pitch['pitchid'] . ".jpg' alt='" . $pitch['pitchname'] . "' />
              </picture>
            </a>
            ";
        }
        ?>
      </div>
    </div>

    <section class="campsites contain-y">
      <div class="container">
        <h2>Popular campsites</h2>
        <div class="site-listing">
          <?php
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
  <script>
    // post count
    fetch('index.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: ""
    });
  </script>
</body>

</html>