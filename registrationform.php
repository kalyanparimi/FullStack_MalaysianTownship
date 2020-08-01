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


$blockno = $_POST['blockno'];
$flatno = $_POST['flatno'];
$houseno = $_POST['houseno'];
$resname = $_POST['resname'];
$regno = $_POST['regno'];
$regdate = $_POST['regdate'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$emailid = $_POST['emailid'];


$sql = "INSERT INTO malaysiantownship (blockno, flatno, houseno, resname, regno, regdate, phone1, phone2,emailid) VALUES ('$blockno', '$flatno', '$houseno', '$resname', '$regno', '$regdate', '$phone1', '$phone2','$emailid')";

if (!mysqli_query($link,$sql)) {
    die('Please check the form again for phone no and registration date and whether owner already registered ' . mysql_error()); 
}
echo "OWNER DETAILS SUCCESSFULLY REGISTERED";
?>