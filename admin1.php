
<!DOCTYPE html>
<html>



<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
	  <li class="current"><a href="admin1.php">Admin</a></li>
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
<div id="section">
<nav>
  <ul>
     <li> <a href="outputA.php">All Student</a></li>
   <li> <a href="regss.php">Insert New Student</a></li>
   <li><a href="SsearchA.php">Search Student</a></li>

  
   
   
    <li><a href="Sdelete.html">Delete Student</a></li>
    <li> <a href="Tregs.php">Insert Teacher schedule</a></li>
	 <li> <a href="Tupdate.php">Update Teacher</a></li>
	  <li><a href="Tdelt.php">Delete Teacher</a></li>
	  <br>
	 
	  <li><a href="approvalstudent.php"> Student approval</a></li>
	  	  <li><a href="approvalteacher.php"> Teacher approval</a></li>
		  
		  



  </ul>
</nav>
</div>

<div class="container">
    
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search Student
  </button>
    <ul class="dropdown-menu">
    <li>  <a href="SsearchA.php">Search BY Roll</a>
      <li><a href="SearchN.php">Search By Name</a>
	  <li><a href="SearchC.php">Search By Class</a>
      </ul>
    
  </div>
</div>

<br><br> <br><br>

<form action='login1.php' method='post' align="center">
<input type='submit' value='Logout' id="ButtonSpace">
</form>



</body>
</html>
