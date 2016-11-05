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
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="admissions.html">Admissions</a></li>
      <li ><a href="studentUI.html">Student Info</a></li>
      <li class="current"><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>

<div id="section">
<h1 align="center"> Teacher Information</h1>
</div>

<div align="center">
  
     <a href="index.html">Home</a><br><br><br>
    
  
</div>


<div align="center">
  
      <a href="searchN.html">Search Teacher By Initial</a><br><br>
	   <a href="TsearchD.html">Search Teacher By initial And Day</a><br><br>

  
</div>
</body>
</html>

<?php
 $con =new mysqli("localhost","root","","schoolmanagement");
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 
 $result = $con->query("SELECT * FROM teacher");
 echo "<table  border='1' align='center'><tr>
 <th>Name</th>
 <th>Day</th>
 <th>10:00-12:00</th>
 <th>12:00-02:00	</th>
 <th>02:00-04:00</th>
 <th>Teacher Initial </th>
 </tr>";
 while($row = $result->fetch_array())
 {
 echo"<tr>";
 echo "<td>" .$row['Name']."</td>";
 echo "<td>" .$row['Day']."</td>";
  echo "<td>" .$row['time1']. "</td>";
 echo "<td>" .$row['time2']."</td>";
 echo "<td>" .$row['time3']. "</td>";
  echo "<td>" .$row['Initial']. "</td>";
 echo"</tr>";
}
echo"</table>";
 ?>
 <html>
 <head>

</head>
<body>
<p><a  href="teacher.html" >Back To Teacher </a> </p>
</body>
</html>