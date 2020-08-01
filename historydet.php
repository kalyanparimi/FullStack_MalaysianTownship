<?php

define('DB_NAME', 'practice');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysqli_select_db($link,DB_NAME);

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}


$secretary = $_POST['secretary'];
$president = $_POST['president'];
$treasurer = $_POST['treasurer'];
$vicepresident = $_POST['vicepresident'];
$jointsecretary = $_POST['jointsecretary'];
$timespan = $_POST['timespan'];



$sql = "INSERT INTO history (secretary,president,treasurer,vicepresident,jointsecretary,timespan) VALUES ('$secretary', '$president', '$treasurer', '$vicepresident', '$jointsecretary', '$timespan')";

if (!mysqli_query($link,$sql)) {
    die('Please check the form again for management year' . mysql_error()); 
}
echo "MANAGEMENT DETAILS SUCCESSFULLY REGISTERED";
?>