<?php
session_start();
function is_loggined()
{
    return (isset($_SESSION["adminid"]) || isset($_SESSION["customerid"]));
}

$nav_items = [
    "index.php" => "Home",
    "explore.php" => "Explore",
    "reviews.php" => "Reviews",
    "information.php" => "Information",
];


function get_nav_items($is_nav = false)
{
    global $nav_items;
    $uri = parse_url($_SERVER['REQUEST_URI']);
    $path = $uri['path'];
    $filename = end(explode("/", $path));
    foreach ($nav_items as $key => $value) {
        echo "<li><a href='$key'" .
            ($filename == $key || (strlen($filename) == 0 && $key == "index.php") ? " class='active-nav' " : "") .
            ">$value</a></li>";
    }
}
