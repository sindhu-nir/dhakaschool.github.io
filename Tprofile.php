<!DOCTYPE html>
<html lang="en">

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
                    <li>
                        <a href="mark.php"><i class="fa fa-fw fa-circle"></i> Student Mark Add </a>
                    </li>
                    <li>
                        <a href="Tupdate1.php"><i class="fa fa-fw fa-circle"></i> Update Info</a>
                    </li>
                    <li class="active">
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
                            Profile <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> My Profile
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<br><br>

                <div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">	
												
												<?php

					$con =new mysqli("localhost","root","","schoolmanagement");
					$a=$_SESSION['teacher'];

					 if (!$con)
					 {
					 die('Could not connect: ' . mysqli_connect_error());
					 }
					 
					 $result = $con->query("SELECT * FROM teacherreg where Initial='$a'");
					 if($result-> num_rows>0){
					 echo "<div class='table-responsive'>
						 <table class='table table-bordered table-hover'><tr>
					 <th>Picture</th>
					 <th>Name </th>
					 <th>Address </th>
					 <th>Mobile No </th>
					 <th>Initial </th>
					 </tr>";

					 while($row = $result->fetch_array())
					 {
					 echo"<tr>";
					 echo '<td><img height="150" width="200" src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/> </td>';
					 echo "<td>" .$row['Name']."</td>";

					 echo "<td>" .$row['Address']."</td>";
					 echo "<td>" .$row['MobileNo']. "</td>";
					 echo "<td>" .$row['Initial']. "</td>";

					 echo"</tr>";
					}
					echo"</table>";
					 }
					else {
						echo "<script> alert ('Not Found');</script>";
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
