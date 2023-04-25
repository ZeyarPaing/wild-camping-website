<?php

$connection = mysqli_connect("localhost", "root", "", "gwsc");
if (mysqli_connect_error()) {
    die(mysqli_connect_error());
}
// mysqli_connect("localhost","root","");
// mysqli_select_db("airpollution");

if (!$connection) {
    die('Could not connect: ' . mysqli_error($con));
}
