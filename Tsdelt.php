<html>

<script>
	<script>
	function validateForm() {
    var x = document.forms["Tdelete"]["fa1"].value;
    if (x == null || x == "") {
        alert("Teacher Initial must be filled out");
        return false;
    }
	
	


}

</script>


</script>
<!DOCTYPE html>


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
                <a class="navbar-brand" href="admin.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
							session_start();
							echo "Welcome ".$_SESSION['CurrentUser'];
							?> 
<b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        
                        <li class="divider"></li>
                        <li>
                            <a href="login1.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-circle"></i> Admin Panel</a>
                    </li>
                    <li>
                        <a href="outputAA.php"><i class="fa fa-fw fa-circle"></i> Show Students</a>
                    </li>
                    <li>
                        <a href="Sdeleteid.php"><i class="fa fa-fw fa-circle"></i> Delete Student</a>
                    </li>
                    <li>
                        <a href="approvalstudent.php"><i class="fa fa-fw fa-circle"></i> Approval Student</a>
                    </li>
                    <li>
                        <a href="approvalteacher.php"><i class="fa fa-fw fa-circle"></i> Approval Teacher</a>
                    </li>
					 <li>
                        <a href="Tcourse.php"><i class="fa fa-fw fa-circle"></i> Insert Teacher Courses </a>
                    </li>
                    <li>
                        <a href="Tregs1.php"><i class="fa fa-fw fa-circle"></i> Insert Teacher Schedule </a>
                    </li>
					
					 <li class="active">
                        <a href="Tsdelt.php"><i class="fa fa-fw fa-circle"></i> Delete Teacher Schedule</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-circle"></i> Search Student <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="SsearchA.php">Search BY ID</a>
                            </li>
                            <li>
                                <a href="searchName.php">Search By Name</a>
                            </li>
							 <li>
                                <a href="SearchC.php">Search By Class</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="galleryup.php"><i class="fa fa-fw fa-circle"></i> Gallery Uploads</a>
                    </li>
                    
                </ul>
            </div>
			 </nav>
			 
			    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-trash"></i>  Teacher Delete</a>
                            </li>
                            <li class="active">
                                <i></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="f1" method='post' action='Tsdelt.php' onsubmit="return validateForm()">

                           
							
							 <div class="form-group">
                                <?php
							 $con = mysql_connect("localhost","root",""); 
							if (!$con) 
							{ 
							die('Could not connect: ' . mysql_error()); 
							} 

							mysql_select_db("schoolmanagement", $con); 

							$result = mysql_query("SELECT distinct Initial FROM teacher") 
							or die(mysql_error());   
							 
							 
							 
							echo '<label> Teacher Initial</label>
							<select name="initial" required class="form-control"><option value="">select..</option>'; 
							while($row = mysql_fetch_array($result)) 
							{ 
							echo '<option value="'.$row['Initial'].'">'. stripslashes($row['Initial']). '</option>'; 
							 
							} 
							echo '</select>'; 
														
												
												?>
                            </div>
							
							
							
								  <div class="form-group">
										   <label>Day : </label>
										   <select name="2" required class="form-control">
								<option value='' selected>select..</option>
									<option value='Saturday'>Saturday</option>
										<option value='Sunday'>Sunday</option>
										<option value='Monday'>Monday</option>
										<option value='Tuesday'>Tuesday</option>
										<option value='Wednesday'>Wednesday</option>
										<option value='Thursday'>Thursday</option>
										
										

									</select>
                                
                            </div>
							
							
					



										
										
                            <button type="submit" class="btn btn-success">Delete Schedule</button>

                        </form>

                   
					</div>

                    

					<div class="col-lg-12" style="margin-top:50px;">
						
						
										<?php
											if($_SERVER["REQUEST_METHOD"]=="POST")
														{
											$con=mysqli_connect("localhost","root","","");
											$a=$_POST["initial"];
											$b=$_POST["2"];
											if (mysqli_connect_errno())
											  {
											  echo "Failed to connect to MySQL: " . mysqli_connect_error();
											  }



											mysqli_select_db($con,"schoolmanagement");

											 $result = $con->query("SELECT * FROM  teacher where Initial='$a' and Day='$b'");
											 
											  if ($result->num_rows == 0) {

											echo "<script> alert ('Teacher   $a for $b Does not EXISTS ');</script>";
											  }

											  else{
											mysqli_query($con,"DELETE FROM teacher WHERE Initial='$a' and Day='$b'");
											echo "<script> alert ('Delete Successful ');</script>";
														}
														}
											?>


					</div>

                </div>

         
				
				

			</div>
        </div>
		
		 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

				


