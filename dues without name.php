<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");
$query = "select i.amount,amount-12500 dueamt,i.houseno from malaysiantownship m,income i where m.houseno=i.houseno and i.amount!='NULL'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 

<td width=100>amount:</td> 
<td width=100>due amount:</td>
<td width=100>houseno:</td> 


</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
 
print "<td>" . $row['amount'] .  "</td>"; 
print "<td>" . $row['dueamt'] . "</td>";
print "<td>" . $row['houseno'] . "</td>";

print "</tr>"; 
}
print "</table>"; 
?>