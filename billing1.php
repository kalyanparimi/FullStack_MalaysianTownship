<?php
$con=mysqli_connect("localhost", "root", "") or die("Connection Failed");
mysqli_select_db($con,"practice")or die("Connection Failed");
$blockno = $_POST['blockno'];
$flatno = $_POST['flatno'];
$query = "select * from billing where blockno = '$blockno' and flatno = '$flatno'";
$result = mysqli_query($con,$query) or die(mysql_error()); 
echo "<br>";
echo "<center>";
echo "<h1><font face='Arial'>MALAYSIAN TOWNSHIP NORTH PHASE";echo"<br>";
echo "OWNERS WELFARE ASSOCIATION"; echo"<br></h1>";
echo "<h2>(Regd.No.519/2017)</h2>
<h3>#506 SBRT (F),LIG Rain Tree Park,KPHB Colony,Kukatpally,Hyderabad-85</h3></h1>";
echo "<h1><strong><u>RECEIPT</u></strong></h1>";
echo "Received with thanks from Sri/Smt";
echo "<br><br>";
echo "<b>Paid on - " . date("Y/m/d") . "<br>";
print " 
<table><tr>
<td width=100><b>Receipt no:</td>  
<td width=100><b>Block no:</td> 
<td width=100><b>Flat no:</td> 
<td width=100><b>House no:</td> 
<td width=100><b>Mr/Miss:</td> 
<td width=100><b>Date Paid:</td> 
 
</tr>"; 
echo "<br>";
while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

print "<tr>"; 
print "<td>" . $row['No'] . "</td>"; 
print "<td>" . $row['blockno'] . "</td>"; 
print "<td>" . $row['flatno'] . "</td>"; 
print "<td>" . $row['houseno'] .  "</td>"; 
print "<td>" . $row['resname'] . "</td>"; 
print "<td>" . $row['Date'] . "</td>";

print "</tr>"; 
}

print "</table>"; 
?>
<html>
<br>
<p align="center"><p align="center"> <b> Amount in Words(Rs):</b>
<br><p id="demo"></p>
<script>
function numToString(x)
{
var r=0;
var txter=x;
var sizer=txter.length;
var numStr="";
if(isNaN(txter))
{

document.getElementById("demo").innerHTML = " invalid number";
exit();
}
var n=parseInt(x);
var places=0;
var str="";
var entry=0;
while(n>=1)
{
r=parseInt(n%10);

if(places<3 && entry==0)
{
numStr=txter.substring(txter.length-0,txter.length-3) // Checks for 1 to 999.
str=onlyDigit(numStr); //Calls function for last 3 digits of the value.
entry=1;
}

if(places==3)
{
 numStr=txter.substring(txter.length-5,txter.length-3) 
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Thousand "+str;
 }
}

if(places==5)
{
 numStr=txter.substring(txter.length-7,txter.length-5) //Substring for 5 place to 7 place of the string
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Lakhs "+str; //Appends the word lakhs to it
 }
}

if(places==6)
{
 numStr=txter.substring(txter.length-9,txter.length-7)  //Substring for 7 place to 8 place of the string
 if(numStr!="")
 {
  str=onlyDigit(numStr)+ " Crores "+str;        //Appends the word Crores
 }
}

n=parseInt(n/10);
places++;
}
document.getElementById("demo").innerHTML =str;

}




function onlyDigit(n)
{
//Arrays to store the string equivalent of the number to convert in words
var units=['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine'];
var randomer=['','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];
var tens=['','Ten','Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];
var r=0;
var num=parseInt(n);
var str="";
var pl="";
var tenser="";
while(num>=1)
{
r=parseInt(num%10);
tenser=r+tenser;
 if(tenser<=19 && tenser>10) //Logic for 10 to 19 numbers
 {
 str=randomer[tenser-10];
 }
 else
 {
  if(pl==0)        //If units place then call units array.
  {
  str=units[r];
  }
  else if(pl==1)    //If tens place then call tens array.
  {
  str=tens[r]+" "+str;
  }
 }
 if(pl==2)        //If hundreds place then call units array.
 {
 str=units[r]+" Hundred "+str;
 }
 
num=parseInt(num/10);
pl++;
}
return str;
}
function myFunction() {
    window.print();
}

</script>
<b><p align="center">
Amount in figures
</b>
<input type="text"  name="txtinput" id="txtinput" maxlength="9" /> 
<br><br><br></h2>
<h2>
<h5><align="left">President&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Gen. Secretary&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Treasurer</h5>
<h5><i>*this is a computer generated bill*</i></h5><br>
<button type="button"  onclick= numToString(txtinput.value);myFunction();> print
</button>
</html>

