<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }


var y = document.forms["myForm"]["fathername"].value;
    if (y == null || y == "") {
        alert("Fathername must be filled out");
        return false ;
    }


var z= document.forms["myForm"]["address"].value;
    if (z == null || z == "") {
        alert("Address must be filled out");
		return false;
        
    }
var w = document.forms["myForm"]["roll"].value;
    if (w == null || w == "") {
        alert("Student Roll must be filled out");
		return false;
        
    }


</script>



<head>

	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<meta charset="utf-8">
	<title>DhakaHighSchool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="fontend/css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<header id="header">
		<div class="container">
			<a href="index1.html" id="logo" title="Dhaka High School">Dhaka High School</a>
			<div class="menu-trigger"></div>
			
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<br><br><br><br>
	
<div  class="form-group" align="center">
 <label> <h1>Registration Form </h1></label>
  <br>
 <label> <h1>Student </h1></label>
</div>
    <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="myForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" action="studentReg.php"  >

							 <div class="form-group">
                                <label>Name :</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

						   <div class="form-group">
                                <label>Father Name :</label>
                                <input type="text" name="fathername" required class="form-control">
                            </div>
							
							<div class="form-group">
                                <label>address :</label>
                                <input type="text" name="address" required class="form-control">
                            </div>
							
							<div class="form-group">
                                <label>Mobile No :</label>
                                <input type="number" name="mobileno" required class="form-control">
                            </div>
							
							<div class="form-group">
                                <label>Roll :</label>
                                <input type="text" name="roll" placeholder="example : 06-001"  required pattern="[0-1]+[0-9]+-[0-9]+[0-9]+[0-9]" class="form-control">
                            </div>
							
							 <div class="form-group">
                                <label>Password : </label>
                                <input type="password" name="pass" placeholder="*******"  required class="form-control">
                            </div>
							
							 <div class="form-group">
										   <label>Class : </label>
										   <select name="Student_class" required class="form-control required">
								<option value='' selected>select..</option>
									<option value='6'>Class 6</option>
										<option value='7'>Class 7</option>
										<option value='8'>Class 8</option>
										<option value='9'>Class 9</option>
										<option value='10'>Class 10</option>
										
										
										

									</select>
                                
                            </div>
							
							<div class="form-group">
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
							<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image"  required /></p>
							</div>

							<br>
                            <button type="submit"  class="btn btn-success">Register</button>

                        </form>
							<p align="center"> <a href="studentlog.php">Back </a></p>

                    </div>
					
					
					
					
					<?php
					if($_SERVER["REQUEST_METHOD"]=="POST")
						
					{
					$con=mysqli_connect("localhost","root","","");
					$a=$_POST["name"];
					$b=$_POST["fathername"];
					$c=$_POST["address"];
					$d=$_POST["mobileno"];
					$e=$_POST["roll"];
					$f=$_POST["Student_class"];
					$g=$_POST["pass"];
					
					$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }



						mysqli_select_db($con,"schoolmanagement");
						$gmd5=md5($g);
						
					 $result = $con->query("SELECT * FROM  student where RollNo='$e'");
					 
					  if ($result->num_rows > 0) {

					echo "<script> alert ('Student Roll No $e ALREADY EXISTS ');</script>";
					
					  }

					  else{
							 $result1 = $con->query("Insert into student(images,Address,Class,Fname,MobileNo,Name,RollNo,password)
							 values('$image','$c','$f','$b','$d','$a','$e','$gmd5')"); 
						 
						echo "<script> alert ('Registration successful  Go back and Login');</script>";
						  }





					}


					?>
						
						
					
				

					</div>
	
	</body>
	</html>