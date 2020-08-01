<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");
$houseno = $_POST['houseno'];
$tleft = $_POST['tleft'];
$tjoined = $_POST['tjoined'];
$diff = $_POST['diff'];
$query = "update tenants set $diff=(select datediff('$tleft','$tjoined') as diff from tenants where houseno = '$houseno')";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 

<td width=100>houseno:</td> 
<td width=100>diff:</td>  

</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['houseno'] . "</td>"; 
print "<td>" . $row['diff'] . "</td>"; 


print "</tr>"; 
}
print "</table>"; 
?>