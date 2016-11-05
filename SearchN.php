


<html>

<script>
function validateForm() {
    var x = document.forms["myForm"]["fa1"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }


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
      <li ><a href="studentlogin.php">Student Info</a></li>
      <li ><a href="teacherlogin.php">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li class="current"><a href="SsearchA.php">Admin</a></li>
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


<form name="myForm" method="POST" action="SearchN.php" onsubmit="return validateForm()">
<table cellpadding="4" width="60%" height:"160%"  align="center"
cellspacing="1">
<tr>
<td colspan=2>
<center><font size=6><b>Search Student</b></font></center>
</td>
</tr>

<td>Name :</td>
<td><input type="text" name="name"></td>
</tr>
<tr><td></td><td><button>Search</button></td></tr>
</table>
</form>

<p align="center">
<a  href="admin1.php" >Back To Admin </a> </p>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	
{

$con =new mysqli("localhost","root","","schoolmanagement");

$name=$_POST['name'];

 if (!$con)
 {
 die('Could not connect: ' . mysqli_connect_error());
 }
 


 $result1 = $con->query("SELECT * FROM  student where Name Like '%$name%'");
 if($result1-> num_rows>0){
 echo "<table  border='1' align='center'><tr>
 <th>Name :</th>
 <th>Father Name :</th>
 <th>Address :</th>
 <th>Mobile No :</th>
 <th>Roll No :</th>
 <th>Class :</th>
 </tr>";

 while($row = $result1->fetch_array())
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
 }
else {
    echo "<script> alert ('Not Found');</script>";
}
}



?>