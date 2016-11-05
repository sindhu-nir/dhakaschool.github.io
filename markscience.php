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


var z= document.forms["f1"]["mark1"].value;
    if (z == null || z == "") {
        alert("mark1 must be filled out");
		return false;
        
    }
var w = document.forms["f1"]["mark2"].value;
    if (w == null || w == "") {
        alert("mark2 must be filled out");
        
    }
	var p = document.forms["f1"]["mark3"].value;
    if (p == null || p== "") {
        alert("mark3 must be filled out");
		return false;
        
    }
	
	var q = document.forms["f1"]["mark4"].value;
    if (q == null || q== "") {
        alert("mark4 must be filled out");
		return false;
        
    }
	
	var r = document.forms["f1"]["mark5"].value;
    if (r == null || r== "") {
        alert("mark5 must be filled out");
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
      <li><a href="studentlogin.html">Student Info</a></li>
      <li  class="current"><a href="markscience.php">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li ><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>
	
	<br><br><br>

<div align="center">
<?php 
		session_start();
		echo "Welcome ".$_SESSION['teachername'];
?>
</div> 
<br><br><br>


<form name="f1" method="post"  action="markscience.php" onsubmit="return validateForm() ">
<table cellpadding="2" width="60%" height:"160%"  align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Student Marks Form</b></font></center>
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
<td>Bangla</td>
<td><input type="text" name="mark1" size="30"></td>
</tr>


<tr>
<td>English </td>
<td><input type="text" name="mark2" size="30"></td>
</tr>

<tr>
<td>math </td>
<td><input type="text" name="mark3" size="30"></td>
</tr>

<tr>
<td>Physics</td>
<td><input type="text" name="mark4" size="30"></td>
</tr>
<tr>
<td>Chemistry </td>
<td><input type="text" name="mark5" size="30"></td>
</tr>

<tr>
<td>Biology </td>
<td><input type="text" name="mark6" size="30"></td>
</tr>

<tr>
<td>ICT </td>
<td><input type="text" name="mark7" size="30"></td>
</tr>

<tr>
<td>Religion </td>
<td><input type="text" name="mark8" size="30"></td>
</tr>

<tr>
<td>S.science </td>
<td><input type="text" name="mark9" size="30"></td>
</tr>

<tr>
<td>Higher Math </td>
<td><input type="text" name="mark10" size="30"></td>
</tr>
<tr>
<td></td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
<p align="center"> <a  href="teacher.php" >Back </a> </p>
</body>
</html>







 
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	
{
$con=mysqli_connect("localhost","root","","");
$a=$_POST["s_id"];
$b=$_POST["exam"];
$c=$_POST["mark1"];
$d=$_POST["mark2"];
$e=$_POST["mark3"];
$f=$_POST["mark4"];
$g=$_POST["mark5"];
$h=$_POST["mark6"];
$i=$_POST["mark7"];
$j=$_POST["mark8"];
$k=$_POST["mark9"];
$l=$_POST["mark10"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



mysqli_select_db($con,"schoolmanagement");

$result = $con->query("SELECT * FROM  markscience where RollNo='$a' and exam='$b'");
 
  if ($result->num_rows > 0) {

echo "<script> alert ('Student $a mark for $b already exists ');</script>";
  }
  else{
mysqli_query($con,"INSERT INTO markscience VALUES ('$a', '$b', '$c', '$d','$e','$f','$g','$h','$i','$j','$k','$l')");
echo "<script> alert ('Mark Add Successfull ');</script>";

  }
}				

?>
