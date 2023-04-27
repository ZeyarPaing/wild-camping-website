<?php
require "utils.php";
require_once "db_connection.php";
//fetch local attractions
$attractions = $connection->query("SELECT * FROM local_attraction");
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Local attractions", "Local attractions");
?>

<body>
    <?php
    renderHeader();
    ?>
    <main>
        <section class="contain-y container">
            <h2>Location attractions</h2>
            <div class="features">

                <?php
                while ($attraction = $attractions->fetch_assoc()) {
                    echo "
            <div class='feature'>
            <div class='feature-info'>
             <h1>{$attraction['localname']}</h1>
              <p>{$attraction['description']}</p>
             </div>
            
              <img src='images/campsites/{$attraction['localid']}.jpg' />
              
            </div>
            ";
                }
                ?>

            </div>
        </section>
    </main>
    <?php
    renderFooter();
    ?>
</body>

</html>