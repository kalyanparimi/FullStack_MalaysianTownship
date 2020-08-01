<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");

$query = "select * from history where timespan = '2016'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 
<td width=100>Secretary:</td> 
<td width=100>President:</td> 
<td width=100>Treasurer:</td> 
<td width=100>Vice President:</td> 
<td width=100>Joint Secretary:</td> 
<td width=100>Time span:</td> 
  
</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['secretary'] . "</td>"; 
print "<td>" . $row['president'] . "</td>"; 
print "<td>" . $row['treasurer'] .  "</td>"; 
print "<td>" . $row['vicepresident'] . "</td>";
print "<td>" . $row['jointsecretary'] . "</td>"; 
print "<td>" . $row['timespan'] . "</td>"; 

print "</tr>"; 
}
print "</table>"; 
?>