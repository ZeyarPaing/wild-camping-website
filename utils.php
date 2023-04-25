<?php
session_start();
function get_user()
{
    if (isset($_SESSION["adminid"])) {
        return "admin";
    } else if (isset($_SESSION["customerid"])) {
        return "customer";
    } else {
        return null;
    }
}

function run_js($js)
{
    echo "<script>$js</script>";
}

$nav_items = [
    "index.php" => "Home",
    "explore.php" => "Explore",
    "reviews.php" => "Reviews",
    "information.php" => "Information",
];

$nav_items_guest_actions = [
    "login.php" => "Login",
    "register.php" => "Register",
];

$nav_items_auth_actions = [
    "profile.php" => "Profile",
    "logout" => "Logout",
];

$uri = parse_url($_SERVER['REQUEST_URI']);
$path = $uri['path'];
$filename = end(explode("/", $path));


function get_nav_items($is_nav = false)
{
    global $nav_items;
    global $filename;

    foreach ($nav_items as $key => $value) {
        echo "<li><a href='$key'" .
            ($filename == $key || (strlen($filename) == 0 && $key == "index.php") ? " class='active-nav' " : "") .
            ">$value</a></li>";
    }
    if (get_user()) {
        foreach ($GLOBALS["nav_items_auth_actions"] as $key => $value) {
            echo "<li><a href='$key' class='" .
                str_replace(".php", "", $filename) .
                ($filename == $key ? " active-nav'" : "'") .
                ">$value</a></li>";
        }
    } else {
        foreach ($GLOBALS["nav_items_guest_actions"] as $key => $value) {
            echo "<li><a href='$key' class='" .
                str_replace(".php", "", $filename) .
                ($filename == $key ? " active-nav'" : "'") .
                ">$value</a></li>";
        }
    }
}
