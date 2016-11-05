<html>

<script>
function validateForm() {
    

var y = document.forms["myForm"]["fa2"].value;
    if (y == null || y == "") {
        alert("Roll must be filled out");
        return false;
    }


var z= document.forms["myForm"]["fa3"].value;
    if (z == null || z == "") {
        alert("Class must be filled out");
		return false;
        
    }
	
}
</script>

<!DOCTYPE html>

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
      <li class="current"><a href="studentUI.html">Student Info</a></li>
      <li><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>
	<div align="center">

  
    
    <a href="output.php">All Student</a><br><br><br>
   <a href="Ssearch.php">Search Student</a><br><br><br>
      <a href="outputmark.html">Student mark Information </a><br><br><br>

</div>


<form name="myForm" method="POST" action="Ssearch.php" onsubmit="return validateForm()">
<table cellpadding="4" width="60%" height:"160%"  align="center"
cellspacing="1">
<tr>
<td colspan=2>
<center><font size=6><b>Search Student</b></font></center>
</td>
</tr>
<tr>
<td>Student Name:</td>
<td><input type="text" name="fa1">
</tr>
<tr>
<td>Roll :</td>
<td><input type="text" name="fa2"></td>
</tr>
<tr>
<td>Class:</td>
<td><input type="text" name="fa3"></td>
</tr>
<tr><td></td><td><button>Search</button></td></tr>
</table>
</form>
<p align="center"><a  href="studentUI.html" >Back To Student </a> </p>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
$con =new mysqli("localhost","root","","schoolmanagement");
$a=$_POST["fa1"];
$h=$_POST["fa2"];
$b=$_POST["fa3"];
 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 
 $result = $con->query("SELECT * FROM  student where RollNo='$h' and class='$b'");
  if ($result->num_rows > 0) {
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
}
else {
   echo "<script> alert ('Not Found');</script>";
}
echo"</table>";
}

?>