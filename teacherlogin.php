<!DOCTYPE html>
<html>

<script>
function validateForm() {
    var x = document.forms["myForm"]["id"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }


var y = document.forms["myForm"]["pass"].value;
    if (y == null || y == "") {
        alert("Password Name must be filled out");
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
      <li ><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="admissions.html">Admissions</a></li>
      <li><a href="studentlogin.php">Student Info</a></li>
      <li class="current"><a href="teacherlogin.php">Teachers Info</a></li>
      <li><a href="Calendar.pdf" target="_blank" > Academic Calendar </a></li>
	  <li><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>
	
	<br><br><br><br><br><br>

		<form name='myForm' method='post' action='logint.php' onsubmit="return validateForm()" >

<table cellpadding="2" width="60%" height:"160%"  align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Teacher Login Form</b></font></center>
<br><br>
</td>
</tr>

<tr>
<td>ID no :</td>
<td><input type=text name="id" placeholder="2012-01-01" size="30"></td>
</tr>

<tr>
<td>Password :</td>
<td><input type="password" name="pass" placeholder="******" size="30"></td>
</tr>
<tr>
<td></td>
<td colspan="2"><button value="submit" > Login </button></td>
</tr>
</table>
</form>
	</div>
<br><br><br>


<p align="center">
 New User ? <br> <br> <br>
 <a href="teacherReg.php"> Register here  </a> </p>
</body>
</html>

