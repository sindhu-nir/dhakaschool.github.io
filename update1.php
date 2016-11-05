<!DOCTYPE html>
<html lang="en">

<script>
function validateForm() {
    var x = document.forms["f1"]["name"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }


var y = document.forms["f1"]["fname"].value;
    if (y == null || y == "") {
        alert("Father Name must be filled out");
        return false;
    }


var z= document.forms["f1"]["address"].value;
    if (z == null || z == "") {
        alert("Address must be filled out");
		return false;
        
    }
var w = document.forms["f1"]["mobileno"].value;
    if (w == null || w == "") {
        alert("Mobile No must be filled out");
        
    }
	var p = document.forms["f1"]["roll"].value;
    if (p == null || p== "") {
        alert("Roll No must be filled out");
		return false;
        
    }

	var q = document.forms["f1"]["Student_class"].value;
    if (q == null || q == "") {
        alert("Class must be filled out");
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
                <a class="navbar-brand" href="studentUI.php">Student</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
							session_start();
							echo "Welcome ".$_SESSION['Studentid'];
							?> 
<b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        
                        <li class="divider"></li>
                        <li>
                            <a href="studentlog.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="studentUI.php"><i class="fa fa-fw fa-circle"></i> Student</a>
                    </li>
                    <li >
                        <a href="schedule.php"><i class="fa fa-fw fa-circle"></i> Check Routine</a>
                    </li>
                    <li >
                        <a href="outputmark.html"><i class="fa fa-fw fa-circle"></i> Student Mark Info</a>
                    </li>
                    <li class="active">
                        <a href="update1.php"><i class="fa fa-fw fa-circle"></i> Update Info</a>
                    </li>
                    <li>
                        <a href="searchA.php"><i class="fa fa-fw fa-circle"></i> My Profile</a>
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
                            Update <small>info</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa"></i> Student info Update
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<br><br>
                <div class="row">
				
				 <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="f1" method='post' action='update1.php' enctype="multipart/form-data" onsubmit="return validateForm()">

                           
							
							 <div class="form-group">
                                <label>Name : </label>
                                <input type="text" name="name" required class="form-control">
                            </div>
							
							 <div class="form-group">
                                <label>Father Name : </label>
                                <input type="text" name="fname"  required class="form-control">
                            </div>
							
										  <div class="form-group">
										<label> Address : </label>
										<input type="text" name="address" required class="form-control">
										</div>


										 
										
									  <div class="form-group">
										<label> Mobile No : </label>
										<input type="number" name="mobileno" required class="form-control">
										</div>
										
										<div class="form-group">
										<label> Password</label>
										<input type="text" name="password"  required class="form-control">
										</div>

										
										<div class="form-group">
							<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
							<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image"  required /></p>
							</div>
									

										
										

							
							

                            <button type="submit" class="btn btn-success">Update</button>

                        </form>

                    </div>
					
									<?php 
									if($_SERVER["REQUEST_METHOD"]=="POST")
												{
									$con=mysqli_connect("localhost","root","");
									$a=$_POST["name"];
									$b=$_POST["fname"];
									$c=$_POST["address"];
									$d=$_POST["mobileno"];
									$e=$_SESSION["Student"];
									$f=md5($_POST["password"]);
									$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

									if (mysqli_connect_errno())
									  {
									  echo "Failed to connect to MySQL: " . mysqli_connect_error();
									  }

									mysqli_select_db($con,"schoolmanagement");

										
									 $result = $con->query("SELECT * FROM  student where RollNo='$e'");
									 
									  if ($result->num_rows == 0) {

									echo "<script> alert ('Student Roll No $e Does not EXISTS ');</script>";
									  }


									else{
									$sql="UPDATE student SET `images`='$image',`Name` = '$a', `Fname` = '$b',
									 `Address` = '$c', 
									`MobileNo` = '$d', `password` = '$f' WHERE `RollNo` = '$e'";

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
