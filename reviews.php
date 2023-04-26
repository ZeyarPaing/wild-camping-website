<?php
require "utils.php";
require "db_connection.php";

$reviews = $connection->query("SELECT r.review, r.rating, u.username, u.userid, cs.campsiteid, cs.sitename, cs.location
FROM review r 
INNER JOIN user u ON r.userid = u.userid
INNER JOIN camping_site cs ON r.campsiteid = cs.campsiteid
;");
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Reviews", "Reviews of campsites");
?>

<body>
  <?php
  renderHeader();
  ?>
  <main>
    <section class="contain-y container">
      <h1>Reviews</h1>
      <div class="reviews">
        <?php
        while ($review = $reviews->fetch_assoc()) {
          echo "
          <div class='review'>
          <div class='site'>
            <img src='images/campsites/{$review['campsiteid']}.jpg' alt='campsite photo ' />
            </div>
            <div class='overlay'></div>
          <div class='place'>
            <img src='images/users/{$review['userid']}.jpg' alt='user photo ' />
          </div>
          <div>
            <h3>{$review['username']}</h3>
              <div class='rating'>
                Rating: {$review['rating']}
              </div>
            <p>
             {$review['review']}
            </p>
            <div class='author'>
              <h4>{$review['sitename']}</h4>
              <small>{$review['location']}</small>
            </div>
          </div>
        </div>
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