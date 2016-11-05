
<?php 
		session_start();
		echo "Admin :: ".$_SESSION['CurrentUser'];
?>
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
// echo "<td> <a href='delete.php'>Delete</a>  </td>";
 //echo "<td> <a href='delete.php'>Edit</a>  </td>";
 //echo "<td><a href='delete.php'>Details</a>  </td>";

   

 echo"</tr>";
}
echo"</table>";
 ?>
 <html>
<body>
<a href="Ssearch1.php">Search Student</a><br><br>
<a href="admin1.php">Back to Admin pannel</a>
</body>
</html>