


<!DOCTYPE html>
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
      <li ><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="admissions.html">Admissions</a></li>
      <li><a href="studentlogin.php">Student Info</a></li>
      <li><a href="teacherlogin.php">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li class="current"><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>

	<?php 
		session_start();
		echo "Welcome ".$_SESSION['CurrentUser'];
?>
<div id="header">
<h1 align="center">All Student Information</h1>
</div>
<br><br><br>
</body>
</html>

<?php
 $con =new mysqli("localhost","root","","schoolmanagement");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 
 $result = $con->query("SELECT * FROM student");
 echo "<table  border='1' align='center'><tr>
 <th>Name :</th>
 <th>Father Name :</th>
 <th>Address :</th>
 <th>Mobile No :</th>
 <th>Roll No :</th>
 <th>Class :</th>
 </tr>";
 while($row = $result->fetch_array())
 {
 echo"<tr>";
 echo "<td>" .$row['Name']."</td>";
 echo "<td>" .$row['Fname']."</td>";
 echo "<td>" .$row['Address']."</td>";
 echo "<td>" .$row['MobileNo']. "</td>";
 echo "<td>" .$row['RollNo']. "</td>";
 echo "<td>" .$row['Class']. "</td>";
 echo"</tr>";
}
echo"</table>";
 ?>
 <html>
 <head>

</head>
<body>
<nav>
  <ul>
    <li> <a href="admin1.php">Back to Admin Panel</a></li>
   
  </ul>
</nav>
</body>
</html>