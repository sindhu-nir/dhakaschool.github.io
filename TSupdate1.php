<html>

<script>
function validateForm() {
    var x = document.forms["f1"]["0"].value;
    if (x == null || x == "") {
        alert("Teacher initial must be filled out");
        return false;
    }





var z= document.forms["f1"]["2"].value;
    if (z == null || z == "") {
        alert("Day must be filled out");
		return false;
        
    }
var w = document.forms["f1"]["3"].value;
    if (w == null || w == "") {
        alert("09:00-09:40 must be filled out");
        
    }
	var p = document.forms["f1"]["4"].value;
    if (p == null || p== "") {
        alert("09:50-10:35 must be filled out");
		return false;
        
    }
	
var m= document.forms["f1"]["5"].value;
    if (m == null || m == "") {
        alert("Time 10:40-11:25 must be filled out");
		return false;
        
    }
var n = document.forms["f1"]["6"].value;
    if (n == null || n == "") {
        alert("12:00-12:45 must be filled out");
        
    }


	
}


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
                <a class="navbar-brand" href="admin.php">SB Admin</a>
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
                    <li >
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="outputAA.php"><i class="fa fa-fw fa-bar-chart-o"></i>Show Students</a>
                    </li>
                    <li >
                        <a href="Sdeleteid.php"><i class="fa fa-fw fa-table"></i> Delete Student</a>
                    </li>
                    <li >
                        <a href="approvalstudent.php"><i class="fa fa-fw fa-edit"></i> Approval Student</a>
                    </li>
                    <li >
                        <a href="approvalteacher.php"><i class="fa fa-fw fa-desktop"></i> Approval Teacher</a>
                    </li>
                    <li>
                        <a href="Tregs.php"><i class="fa fa-fw fa-wrench"></i> Insert Teacher Schedule </a>
                    </li >
					  <li  class="active" >
                        <a href="TSupdate1.php"><i class="fa fa-fw fa-wrench"></i> Update Teacher Schedule</a>
                    </li>
					 <li >
                        <a href="Tsdelt.php"><i class="fa fa-fw fa-wrench"></i> Delete Teacher Schedule</a>
                    </li>
                    <li >
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Search Student <i class="fa fa-fw fa-caret-down"></i></a>
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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Teacher Schedule</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="f1" method='post' action='TSupdate2.php' onsubmit="return validateForm()">

                           
							
							
							
							
							
								  <div class="form-group">
										   <label>Day : </label>
										   <select name="2" class="form-control">
								<option value='' selected>select..</option>
									<option value='Saturday'>Saturday</option>
										<option value='Sunday'>Sunday</option>
										<option value='Monday'>Monday</option>
										<option value='Tuesday'>Tuesday</option>
										<option value='Wednesday'>Wednesday</option>
										<option value='Thursday'>Thursday</option>
										
										

									</select>
                                
                            </div>
							
							
							
							
							
							
										<?php 

										$_SESSION['initial']=$_POST['0'];
										$initial=$_POST['0'];
							$con =new mysqli("localhost","root","","schoolmanagement");
							 $result = $con->query("SELECT * FROM courses where Initial='$initial'");
							 if ($result->num_rows > 0) {

							while($row = $result->fetch_array()){
	
								$course1=$row['course1'];
								$course2=$row['course2'];
								$course3=$row['course3'];
								$course4=$row['course4'];
							}
							 }
								
							?>
							
							<div class="form-group">
							<label>09:00-09:40 : </label>
							
							
							<select name="3" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>
						
						<div class="form-group">
							<label> 09:50-10:35: </label>
							
							
							<select name="4" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>


					

					<div class="form-group">
							<label>10:40-11:25: </label>
							
							
							<select name="5" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>
										
						 <div class="form-group">
							<label>12:00-12:45: </label>
							
							
							<select name="6" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>
									


										<div class="form-group">
							<label> 12:50-01:35 : </label>
							
							
							<select name="7" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>
									



													<div class="form-group">
							<label> 01:40-02:25 : </label>
							
							
							<select name="8" class="form-control">
							<option value=''>select....</option>
							<option value="Office Hour">Office Hour</option>
							<option value="<?php echo $course1 ?>"><?php echo $course1 ?></option>

							<option value="<?php echo $course2 ?>"><?php echo $course2 ?></option>
							<option value="<?php echo $course3 ?>"><?php echo $course3 ?></option>
							<option value="<?php echo $course4 ?>"><?php echo $course4 ?></option>
							</select>
							
						</div>

										
							
							
					



										
									

										
										

							
							

                            <button type="submit" class="btn btn-success">Insert Schedule</button>

                        </form>

                    </div>

                    

					<div class="col-lg-12" style="margin-top:50px;">
						
						
								


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

				


