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
      <li class="current"><a href="studentUI.html">Student Info</a></li>
      <li><a href="teacher.html">Teachers Info</a></li>
      <li><a href="Calendar.pdf">Calendar 2016</a></li>
	  <li><a href="login1.php">Admin</a></li>
      <li><a href="contact-us.html">Contact us</a></li>
	   
    </ul>

<div align="center">
<h1>Student Information</h1>

</div>
<br><br><br>
<div align="center">

  
    
      <a href="output.php">All Student</a><br><br><br>
   <a href="Ssearch.php">Search Student</a><br><br><br>
      <a href="outputmark.html">Student mark Information </a><br><br><br>

</div>

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
 echo "<table  border='1' align='center'><tr>
 <th>Name :</th>
 <th>Father Name :</th>
 <th>Address :</th>
 <th>Mobile No :</th>
 <th>Roll No :</th>
 <th>Class :</th>
 </tr>";
 if ($result->num_rows > 0) {
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
    echo "0 results";
}
echo"</table>";
}

?>

