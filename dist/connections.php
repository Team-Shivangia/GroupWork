<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "team_shivangya_db";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect");
}
