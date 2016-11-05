<html>
<script>
function validateForm() {
    var x = document.forms["f1"]["0"].value;
    if (x == null || x == "") {
        alert("Teacher initial must be filled out");
        return false;
    }





var z= document.forms["f1"]["2"].value;
    if (z == null || z == "") {
        alert("Day must be filled out");
		return false;
        
    }
var w = document.forms["f1"]["3"].value;
    if (w == null || w == "") {
        alert("09:00-09:40 must be filled out");
        
    }
	var p = document.forms["f1"]["4"].value;
    if (p == null || p== "") {
        alert("09:50-10:35 must be filled out");
		return false;
        
    }
	
var m= document.forms["f1"]["5"].value;
    if (m == null || m == "") {
        alert("Time 10:40-11:25 must be filled out");
		return false;
        
    }
var n = document.forms["f1"]["6"].value;
    if (n == null || n == "") {
        alert("12:00-12:45 must be filled out");
        
    }
	var o = document.forms["f1"]["7"].value;
    if (o== null || o== "") {
        alert("12:50-01:35 must be filled out");
		return false;
        
    }
		var k = document.forms["f1"]["8"].value;
    if (k== null || k== "") {
        alert("01:40-02:25 must be filled out");
		return false;
        
    }
	
}


</script>
<head>
<title>Dhaka High School</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="section">
      <div><a href="index.html"><p><h1>DHAKA HIGH SCHOOL</h1></p></a></div>
      <span>dhakahighschool@gmail.com <br />
      <br />
      +880 01711456287</span> </div>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="admissions.html">Admissions</a></li>
      <li><a href="studentlogin.php">Student Info</a></li>
      <li><a href="teacherlogin.php">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li  class="current"><a href="Tupdate.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>


<div align="center">
<h1>UPDATE Teacher</h1>
</div>
<br><br><br>
<form name="f1" method="post"  action="Tupdate.php" onsubmit="return validateForm() ">
<table cellpadding="2" width="60%" height:"160%"  align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Teacher Information Update Form</b></font></center>
</td>
</tr>


<tr>
<td>Initial</td>
<td><input type=text name="0" size="30"></td>
</tr>



<tr>
<td>Day </td>
<td><input type=text name="2" size="30"></td>
</tr>

<tr>
<td>09:00-09:40</td>
<td><input type="text" name="3" size="30"></td>
</tr>


<tr>
<td>09:50-10:35</td>
<td><input type="text" name="4" size="30"></td>
</tr>

<tr>
<td>10:40-11:25</td>
<td><input type="text" name="5" size="30"></td>
</tr>

<tr>
<td>12:00-12:45</td>
<td><input type="text" name="6" size="30"></td>
</tr>
<tr>
<td>12:50-01:35</td>
<td><input type="text" name="7" size="30"></td>
</tr>
<tr>
<td>01:40-02:25</td>
<td><input type="text" name="8" size="30"></td>
</tr>

<tr>
<td></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
<p align="center"><a  href="admin1.php" >Back To Admin </a> </p>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	
{
$con=mysqli_connect("localhost","root","","");
$a=$_POST["0"];

$c=$_POST["2"];
$d=$_POST["3"];
$e=$_POST["4"];
$f=$_POST["5"];
$g=$_POST["6"];
$h=$_POST["7"];
$i=$_POST["8"];


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




mysqli_select_db($con,"schoolmanagement");

 $result = $con->query("SELECT * FROM  teacher where Initial='$a'");
 
  if ($result->num_rows == 0) {

echo "<script> alert ('Teacher   $a Does not EXISTS ');</script>";
  }
  

  

else{
	
	   $result1 = $con->query("SELECT * FROM  teacher where Initial='$a' and Day='$c'");
 if($result1-> num_rows>0){

 while($row = $result1->fetch_array())
 {
 
 $name=$row['Name'];
 
}
 }
  
	

$sq = "UPDATE teacher SET Name='$name',time1='$d',time2='$e',time3='$f',time4='Break',
time5='$g',time6='$h',time7='$f' WHERE Initial='$a' and Day='$c'";

if ($con->query($sq) === TRUE) {
  echo "<script> alert ('UPDATE SUccessful ');</script>";
} else {
    echo "Error updating record: " . $con->error;
}


				
}				
			}
?>
<html>
<body>

<a href="admin1.php">Back To Admin Panel</a>
</body>
</html>