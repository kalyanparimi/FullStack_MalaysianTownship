<html>
<form method="post" name="display" action="block.php" />
<br><br><br><br><center><strong><h2 style="color:#228B22;">
Enter the block number you want to search the pending dues:<br>
<br><br>
<input type="number" name="blockno" required/>
<br></h2></strong>
<input type="submit" name="Submit" value="display" />
</form>
</html> <br><br><br>
<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");
$blockno = $_POST['blockno'];
$query = "select blockno,flatno,resname,amount,amount-12500 as dueamt from billing where blockno = '$blockno'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#000000\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#FFF8DC\"><tr> 
<td width=100>Block No:</td> 
<td width=100>Flat No:</td> 
<td width=100>Resident Name:</td> 
<td width=100>Amount paid:</td> 
<td width=100>Due Amount:</td> 

  
</tr>"; 

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['blockno'] . "</td>"; 
print "<td>" . $row['flatno'] . "</td>"; 
print "<td>" . $row['resname'] . "</td>";
print "<td>" . $row['amount'] . "</td>"; 
print "<td>" . $row['dueamt'] . "</td>"; 


print "</tr>"; 
}
print "</table>"; 
?>