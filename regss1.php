
<?php 
		session_start();
		echo "Welcome ".$_SESSION['CurrentUser'];
?>

<html>
<head>
</head>
<body>
<form method='post' action='insert.php'>

<table cellpadding="2" width="60%" height:"160%" bgcolor="99FFFF" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Student Registration Form</b></font></center>
</td>
</tr>

<tr>
<td>Name :</td>
<td><input type=text name="name" size="30"></td>
</tr>

<tr>
<td>Father Name :</td>
<td><input type="text" name="fathername" size="30"></td>
</tr>


<tr>
<td> Address :</td>
<td><input type="text" name="address" size="30"></td>
</tr>

<tr>
<td>Mobile No :</td>
<td><input type="text" name="mobileno" size="30"></td>
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
<td><</td>
<td colspan="2"><input type="submit" value="Submit Form" /></td>
</tr>
</table>
</form>
</body>
</html>