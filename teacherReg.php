<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
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
	<script>
	function validateForm() {
    var x = document.forms["login"]["id"].value;
    if (x == null || x == "") {
        alert("User ID must be filled out");
        return false;
    }
	
	 var y = document.forms["login"]["pass"].value;
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }


}

</script>
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
 <label> <h1>Teacher </h1></label>
</div>
    <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="form" method="post" enctype="multipart/form-data" action="teacherReg.php">

							 <div class="form-group">
                                <label>Name :</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

						   <div class="form-group">
                                <label>Teacher Initial :</label>
                                <input type="text" name="initial" required class="form-control">
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
                                <label>Password : </label>
                                <input type="password" name="pass" placeholder="*******" required class="form-control">
                            </div>
							
							<div class="form-group">
							<input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
							<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image" required/></p>
							</div>

							<br>
                            <button type="submit" class="btn btn-success">Register</button>

                        </form>
							<p align="center"> <a href="teacherlog.php">Back </a></p>

                    </div>
					
					
					
					<?php
					if($_SERVER["REQUEST_METHOD"]=="POST")
						
					{
					$con=mysqli_connect("localhost","root","","");
					$a=$_POST["name"];
					$b=$_POST["initial"];
					$c=$_POST["address"];
					$d=$_POST["mobileno"];

					$e=md5($_POST["pass"]);
					
					$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
					
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }



						mysqli_select_db($con,"schoolmanagement");
						
						
					 $result = $con->query("SELECT * FROM  teacherreg where Initial='$b'");
					 
					  if ($result->num_rows > 0) {

					echo "<script> alert ('teacher   $a ALREADY EXISTS ');</script>";
					  }

					  else{
							
								
							
							 $result1 = $con->query("Insert into teacherreg(Name,Initial,Address,MobileNo,password,images) 
													values('$a','$b','$c','$d','$e','$image')");
								
								
								
					  
					
					
							echo "<script> alert ('Registration successful  Go back and Login');</script>";
						  }





					}


					?>
					
				

					</div>
	
	</body>
	</html>