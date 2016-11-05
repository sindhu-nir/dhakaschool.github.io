<?php
$con=mysqli_connect("localhost","root","","");
$a=$_POST["name"];
$b=$_POST["fathername"];
$c=$_POST["address"];
$d=$_POST["mobileno"];
$e=$_POST["roll"];
$f=$_POST["Student_class"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	
  echo "Inserted successfully <br>";
}


mysqli_select_db($con,"schoolmanagement");


mysqli_query($con,"INSERT INTO student VALUES ('$c', '$f', '$b', '$d','$a', '$e')");
					

?>
<html>
<body>
<a href="regss.html">Insert Another New Student</a>
<a href="admin1.php">Back to Admin Panel page</a>
</body>
</html>