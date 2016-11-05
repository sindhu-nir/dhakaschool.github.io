<html>

<script>
function validateForm() {
    var x = document.forms["f1"]["roll"].value;
    if (x == null || x == "") {
        alert("Roll must be filled out");
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
	  <li  class="current"><a href="Sdel.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>


<div align="center">
<h1>Delete Student</h1>
</div>
<br><br><br>
<form name="f1" method='post' action='Sdel.php' onsubmit="return validateForm()">

<table cellpadding="2" width="60%" height:"160%" align="center"
cellspacing="2">

<tr>
<td>Roll No :</td>
<td><input type="text" name="roll" size="30"></td>
</tr>

<tr>
<td></td>
<td colspan="2"><input type="submit" value="Delete Student" /></td>
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
$b=$_POST["roll"];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



mysqli_select_db($con,"schoolmanagement");
 $result = $con->query("SELECT * FROM  student where RollNo='$b'");
 
  if ($result->num_rows <1) {

echo "<script> alert ('Student Roll No $b Does not EXISTS ');</script>";
  }
else{
	mysqli_query($con,"Delete From student where RollNo='$b'");
	echo "<script> alert ('Delete successful');</script>";
}	
}			

?>
