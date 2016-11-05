<html>
<script>
function validateForm() {
    var x = document.forms["f1"]["s_id"].value;
    if (x == null || x == "") {
        alert("Student Id must be filled out");
        return false;
    }


var y = document.forms["f1"]["exam"].value;
    if (y == null || y == "") {
        alert("exam must be filled out");
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
      <li><a href="studentUI.html">Student Info</a></li>
      <li><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li  class="current"><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>
	
	<br><br><br>

<div align="center">
<?php 
		session_start();
		echo "Welcome ".$_SESSION['CurrentUser'];
?>
</div> 
<br><br><br>

<form name="f1" method="post"  action="deletemark.php" onsubmit="return validateForm() ">
<table cellpadding="2" width="60%" height:"160%"  align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b> Marks Delete Form</b></font></center>
</td>
</tr>


<tr>
<td> Student Id :</td>
<td><input type="text" name="s_id" size="30"></td>
</tr>


<tr>
<td>Exam :</td>
<td><select name="exam">
<option value='' selected>select..</option>
<option value='1st Mid Term'>1st Mid Term</option>
<option value='2nd Mid Term'>2nd Mid Term</option>
<option value='Final'>Final </option>

</select></td>
</tr>

<tr>
<td></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
<p align="center"> <a  href="admin1.php" >Back To Admin </a> </p>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	
{
$con=mysqli_connect("localhost","root","","");
$a=$_POST["s_id"];
$b=$_POST["exam"];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



mysqli_select_db($con,"schoolmanagement");

$result = $con->query("SELECT * FROM  mark where RollNo='$a' and exam='$b'");
 if ($result->num_rows  <1) {

echo "<script> alert ('Student $a mark for $b Not  exists ');</script>";
  }
else {


mysqli_query($con,"DELETE FROM mark WHERE `RollNo`='$a' and `exam`='$b'");

echo "<script> alert ('DELETE Successful ');</script>";


}
}
?>
