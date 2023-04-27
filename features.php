<?php
require "utils.php";
require_once "db_connection.php";

//fetch features
$features = $connection->query("SELECT * FROM feature;");
?>

<!DOCTYPE html>
<html lang="en">

<?php
metaHead("Features", "Features and amenities");
?>

<body>
    <?php
    renderHeader();
    ?>
    <main>
        <section class="contain-y container">
            <h2>Features and amenities</h2>
            <div class="features">
                <?php
                while ($feature = $features->fetch_assoc()) {
                    echo "
                    <div class='feature'>
                        <div class='feature-info'>
                            <h1>{$feature['featurename']}</h1>
                            <p>{$feature['description']}</p>
                        </div>
                        <div>
                        <img src='images/features/{$feature['featureid']}.jpg' alt='feature photo ' />
                        </div>                       
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