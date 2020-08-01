<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");
$Date = $_POST['Date'];


$query = "select No,blockno,flatno,houseno,resname,amount,amount-5000 as dues,Date from billing where Date = '$Date' and cash='N'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
echo "<strong><center><br><br>";
print " 
<table><tr>
<td width=100>Receipt no:</td>  
<td width=100>Block no:</td> 
<td width=100>Flat no:</td> 
<td width=100>House no:</td> 
<td width=100>Mr/Miss:</td> 
<td width=100>Amount Paid:</td>
<td width=100>Due Amount</td>
<td width=100>Date Paid:</td> 
 
</tr>"; 


while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['No'] . "</td>"; 
print "<td>" . $row['blockno'] . "</td>"; 
print "<td>" . $row['flatno'] . "</td>"; 
print "<td>" . $row['houseno'] .  "</td>"; 
print "<td>" . $row['resname'] . "</td>"; 
print "<td>" . $row['amount'] . "</td>";
print "<td>" . $row['dues'] . "</td>";
print "<td>" . $row['Date'] . "</td>";

print "</tr>"; 
}

print "</table>"; 
?>

</html>

