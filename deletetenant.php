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


$houseno = $_POST['houseno'];




$sql = "delete from tenants WHERE houseno = $houseno";

if (!mysqli_query($link,$sql)) {
    die('Error: ' . mysql_error()); 
}
echo "TENANT DETAILS DELETED";

?>