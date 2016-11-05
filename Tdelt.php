

<html>

	<script>
	function validateForm() {
    var x = document.forms["Tdelete"]["fa1"].value;
    if (x == null || x == "") {
        alert("Teacher Initial must be filled out");
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
	  <li  class="current"><a href="Tdelt.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>


<div align="center">
<h1>Delete Teacher</h1>
</div>
<br><br><br>
<div align="center">
<form name="Tdelete" method="POST" action="Tdelt.php" onsubmit="return validateForm()">
<table>
<tr><td>
Initial Name: </td> <td><input type="text" name="fa1"></td></tr>
<tr><td> Day : </td> <td><input type="text" name="fa2"></td></tr>
<br>
<tr><td></td><td><button>Delete</button></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
$con=mysqli_connect("localhost","root","","");
$a=$_POST["fa1"];
$b=$_POST["fa2"];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



mysqli_select_db($con,"schoolmanagement");

 $result = $con->query("SELECT * FROM  teacher where Initial='$a' and Day='$b'");
 
  if ($result->num_rows == 0) {

echo "<script> alert ('Teacher   $a for $b Does not EXISTS ');</script>";
  }

  else{
mysqli_query($con,"DELETE FROM teacher WHERE Initial='$a' and Day='$b'");
echo "<script> alert ('Delete Successful ');</script>";
			}
			}
?>
<html>
<body>
<a href="admin1.php">Back To Admin Panel</a>
</body>
</html>