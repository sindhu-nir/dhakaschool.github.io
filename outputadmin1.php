<html>
<head>
<title> View Records </title>
</head>
<body>
<table align='center' width='1000' border='4'>
<tr>
<th>Students Name</th>
<th>Fathers Name</th>
<th>Address</th>
<th>Mobile No</th>
<th>Roll No</th>
<th>Class</th>
<th>Edit</th>
<th>Details</th>
<th>Delete</th> 
</tr>
<tr>
<?php
 $con =new mysqli("localhost","root","","schoolmanagement");
 
 
 
 $run=mysql_query("SELECT * FROM student");
 while($row=mysql_fetch_array($run))
 {
	 $Name=$row[0];
	 $Fname=$row[1];
	 $Address=$row[2];
	 $Mobile=$row[3];
	 $Roll=$row[4];
	 $class=$row[5];
	 
 
 ?>
<td><?php echo $Name;?></td>
<td><?php echo $Fname;?></td>
<td><?php echo $Address;?></td>
<td><?php echo $Mobile;?></td>
<td><?php echo $Roll;?></td>
<td><?php echo $Class;?></td>
<td>Edit</td>
<td>Details</td>
<td>Delete</td>
</tr>
 <?php } ?>
</table>
</body>
</html>