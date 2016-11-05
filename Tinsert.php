<?php 
		session_start();
		echo "Welcome ".$_SESSION['CurrentUser'];
?>
<?php
$con=mysqli_connect("localhost","root","","");
$a=$_POST["0"];
$b=$_POST["1"];
$c=$_POST["2"];
$d=$_POST["3"];
$e=$_POST["4"];
$f=$_POST["5"];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
	
  echo "Connected successfully <br>";
}


mysqli_select_db($con,"schoolmanagement");


mysqli_query($con,"INSERT INTO teacher VALUES ('$c', '$b', '$d', '$e','$f','$a')");
					

?>
<html>
<body>
<a href="Tregs.html">Insert Another New Teachers</a>
<a href="admin1.php">Back To Admin Panel</a>
</body>
</html>