<!DOCTYPE html>
<html lang="en">



						<script>
						function validateForm() {
							var x = document.forms["f1"]["s_id"].value;
							if (x == null || x == "") {
								alert("Student Id must be filled out");
								return false;
							}


						var y = document.forms["f1"]["exam"].value;
							if (y == null || y == "") {
								alert("exam must be filled out");
								return false;
							}


						var z= document.forms["f1"]["mark1"].value;
							if (z == null || z == "") {
								alert("mark1 must be filled out");
								return false;
								
							}
						var w = document.forms["f1"]["mark2"].value;
							if (w == null || w == "") {
								alert("mark2 must be filled out");
								
							}
							var p = document.forms["f1"]["mark3"].value;
							if (p == null || p== "") {
								alert("mark3 must be filled out");
								return false;
								
							}
							
							var q = document.forms["f1"]["mark4"].value;
							if (q == null || q== "") {
								alert("mark4 must be filled out");
								return false;
								
							}
							
							var r = document.forms["f1"]["mark5"].value;
							if (r == null || r== "") {
								alert("mark5 must be filled out");
								return false;
								
							}
						}


						</script>

						
						
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="teacher.php">Teacher</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
							session_start();
							echo "Welcome ".$_SESSION['teachername'];
							?> 
<b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        
                        <li class="divider"></li>
                        <li>
                            <a href="teacherlog.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="teacher.php"><i class="fa fa-fw fa-circle"></i> Teacher</a>
                    </li>
                    <li >
                        <a href="Tschedule.php"><i class="fa fa-fw fa-circle"></i> Check Routine</a>
                    </li>
                    <li >
                        <a href="mark.php"><i class="fa fa-fw fa-circle"></i> Student Mark Add </a>
                    </li>
                    <li class="active">
                        <a href="Tupdate1.php"><i class="fa fa-fw fa-circle"></i> Update Info</a>
                    </li>
                    <li>
                        <a href="Tprofile.php"><i class="fa fa-fw fa-circle"></i> My Profile</a>
                    </li>
                   

					
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Teacher Info
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<br><br>

                <div class="row">
				
							<div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">	

							<form name="f1" method="post"  enctype="multipart/form-data" action="Tupdate1.php" onsubmit="return validateForm() ">
							

							
							
							<center><font size=4><b>Teacher Info Update Form</b></font></center>
							
							
							 <div class="form-group">
                                <label>Name : </label>
                                <input type="text" name="name" required class="form-control">
                            </div>

							

							

							<div class="form-group">
                                <label>Address : </label>
                                <input type="text" name="address" required class="form-control">
                            </div>

							<div class="form-group">
                                <label>Mobile No : </label>
                                <input type="number" name="mobileno" required class="form-control">
                            </div>


							
							
							<div class="form-group">
                                <label>password : </label>
                                <input type="password" name="password" required class="form-control">
                            </div>
							
								<div class="form-group">
							<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
							<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image" required  /></p>
							</div>

							
							

							
							<button type="submit" class="btn btn-success">Update</button>
							
						
							</form>							
															
								<?php 
								if($_SERVER["REQUEST_METHOD"]=="POST")
											{
								$con=mysqli_connect("localhost","root","");
								$a=$_POST["name"];

								$c=$_POST["address"];
								$d=$_POST["mobileno"];
								$e=$_SESSION["teacher"];
								$f=md5($_POST["password"]);
								$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }

								mysqli_select_db($con,"schoolmanagement");

									
								 $result = $con->query("SELECT * FROM  teacherreg where Initial='$e'");
								 
								  if ($result->num_rows == 0) {

								echo "<script> alert ('Teacher $e Does not EXISTS ');</script>";
								  }


								  
								  
								else{
								$sql="UPDATE teacherreg SET `Name` = '$a',
								 `Address` = '$c', 
								`MobileNo` = '$d', `password` = '$f',images='$image' WHERE `Initial` = '$e'";
								
								
								 $result1 = $con->query("UPDATE teacher SET `Name` = '$a'
								 WHERE `Initial` = '$e'");

								
								if($con->query($sql)==TRUE){
									echo "<script> alert ('UPDATE successful');</script>";
								}								
								else{
									echo "Error updating record".$con->error;
								}
											}
											}

								?>



                    
                    <br><br>
                    
			
                </div>
				</div>
				<div class="row">
                    
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
						<div class="container-fluid"></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                    </div>
               </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
