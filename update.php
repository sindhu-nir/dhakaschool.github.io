<html>
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
      <li ><a href="studentUI.html">Student Info</a></li>
      <li ><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li class="current"><a href="admin1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>

<div align="center">
<h1>Admin Pannel</h1>
</div>
<div align="center">
<?php 
		session_start();
		echo "Welcome ".$_SESSION['CurrentUser'];
?>
</div>
<br><br><br>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
$con=mysqli_connect("localhost","root","");
$a=$_POST["name"];
$b=$_POST["fname"];
$c=$_POST["address"];
$d=$_POST["mobileno"];
$e=$_POST["roll"];
$f=$_POST["Student_class"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"schoolmanagement");

$sql="UPDATE student SET `Name` = '$a', `Fname` = '$b',
 `Address` = '$c', 
`MobileNo` = '$d', `Class` = '$f' WHERE `RollNo` = '$e'";

if($con->query($sql)==TRUE){
	echo "   UPDATE Successful";
}					
else{
	echo "Error updating record".$con->error;
}

			}
?>
			<html>
<body>
<br/>
  <a href="admin1.php">Back to Admin Panel</a>
</body>
</html>






 