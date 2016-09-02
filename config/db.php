<?php

/* 
 * Database connection initialization
 */

$dblocation = "127.0.0.1";
$dbname = "pictures";
$dbuser = "root";
$dbpassword = "";
 
$mysqli = new mysqli($dblocation, $dbuser, $dbpassword);

if (mysqli_connect_errno()) {
    echo "MySql connection error.";
    exit();
}

// Set the charset for the connection UTF8
$mysqli->set_charset("utf8");

if(! $mysqli->select_db($dbname)) {
    echo "Error. Can not connect to database: {$dbname}";
    exit();
}
