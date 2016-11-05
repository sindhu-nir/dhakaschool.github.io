<!DOCTYPE html>
<html>
<head>
<title>Dhaka High School</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="styles/ie6.css" /><![endif]-->
</head>

<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }


var y = document.forms["myForm"]["fathername"].value;
    if (y == null || y == "") {
        alert("Father Name must be filled out");
        return false;
    }


var z= document.forms["myForm"]["address"].value;
    if (z == null || z == "") {
        alert("Address must be filled out");
		return false;
        
    }
var w = document.forms["myForm"]["mobileno"].value;
    if (w == null || w == "") {
        alert("Mobile No must be filled out");
        
    }
	var p = document.forms["myForm"]["roll"].value;
    if (p == null || p== "") {
        alert("Roll No must be filled out");
		return false;
        
    }

	var q = document.forms["myForm"]["Student_class"].value;
    if (q == null || q == "") {
        alert("Class must be filled out");
		return false;
        
    }


}
</script>



<body>
<div id="page">
  <div id="header">
    <div id="section">
      <div><a href="index.html"><p><h1>DHAKA HIGH SCHOOL</h1></p></a></div>
      <span>dhakahighschool@gmail.com <br />
      <br />
      +880 01711456287</span> </div>
    <ul>
      <li ><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="admissions.html">Admissions</a></li>
      <li ><a href="studentReg.php">Student Info</a></li>
      <li><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf" target="_blank" > Academic Calendar </a></li>
	  <li class="current"><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>
	
	
	</div>
<br><br><br>
<form name='myForm' method='post' action='studentReg.php' onsubmit="return validateForm()" >

<table cellpadding="2" width="60%" height:"160%"  align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Student Insert Form</b></font></center>
</td>
</tr>

<tr>
<td>Name :</td>
<td><input type=text name="name" size="30"></td>
</tr>

<tr>
<td>Father Name :</td>
<td><input type="text" name="fathername" size="30"></td>
</tr>


<tr>
<td> Address :</td>
<td><input type="text" name="address" size="30"></td>
</tr>

<tr>
<td>Mobile No :</td>
<td><input type="text" name="mobileno" size="30"></td>
</tr>


<tr>
<td>Roll No :</td>
<td><input type="text" name="roll" size="30"></td>
</tr>

<tr>
<td>Password :</td>
<td><input type=text name="pass" size="30"></td>
</tr>

<tr>
<td>Class :</td>
<td><select name="Student_class">
<option value='' selected>select..</option>
<option value='10'>10th</option>
<option value='9'>9th</option>
<option value='8'>8th</option>
<option value='7'>7th</option>
<option value='6'>6th</option>
</select></td>
</tr>

<tr>
<td></td>
<td colspan="2"><button value="Submit" > Insert </button></td>
</tr>
</table>
</form>

	</body>
	</html>
	
	<p align="center"> <a href="admin1.php">Back </a></p>
	<?php
	
	?>
	
	
	




<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	
{
$con=mysqli_connect("localhost","root","","");
$a=$_POST["name"];
$b=$_POST["fathername"];
$c=$_POST["address"];
$d=$_POST["mobileno"];
$e=$_POST["roll"];
$f=$_POST["Student_class"];
$g=$_POST["pass"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



	mysqli_select_db($con,"schoolmanagement");
	$gmd5=md5($g);
	
 $result = $con->query("SELECT * FROM  student where RollNo='$e'");
 
  if ($result->num_rows > 0) {

echo "<script> alert ('Student Roll No $e ALREADY EXISTS ');</script>";
  }

  else{
		 $result1 = $con->query("Insert into student(Address,Class,Fname,MobileNo,Name,RollNo,password) values('$c','$f','$b','$d','$a','$e','$gmd5')"); 
	 
	echo "<script> alert ('Registration successful  ');</script>";
	  }





}


?>
	
	