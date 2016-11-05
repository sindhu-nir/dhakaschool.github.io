<?php 
		session_start();
		echo "Admin :: ".$_SESSION['CurrentUser'];
?>

<html>
<head>
</head>
<body>
<form method='post' action='Sdel.php'>

<table cellpadding="2" width="60%" height:"160%" bgcolor="99FFFF" align="center"
cellspacing="2">



<tr>
<td>Name :</td>
<td><input type=text name="name" size="30"></td>
</tr>


<tr>
<td>Roll No :</td>
<td><input type="text" name="roll" size="30"></td>
</tr>

<tr>
<td>Class :</td>
<td><select name="Student_class">
<option value='null' selected>select..</option>
<option value='10'>10th</option>
<option value='9'>9th</option>
<option value='8'>8th</option>
<option value='7'>7th</option>
<option value='6'>6th</option>
</select></td>
</tr>

<tr>
<td></td>
<td colspan="2"><input type="submit" value="Delete Student" /></td>
</tr>
</table>
</form>
</body>
</html>