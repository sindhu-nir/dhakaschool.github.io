<!DOCTYPE html>
<html lang="en">

<script>
function validateForm() {
   


var y = document.forms["f1"]["exam"].value;
    if (y == null || y == "") {
        alert("exam must be filled out");
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
                    <li class="active">
                        <a href="outputmark.html"><i class="fa fa-fw fa-circle"></i> Student Mark Info</a>
                    </li>
                    <li>
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
                            Mark <small>Check</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-th-list"></i> Student mark info
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<br><br>
                <div class="row">
				
				
							<div class="col-lg-offset-3 col-lg-8 col-lg-offset-3">		
					
								<?php
								 $con =new mysqli("localhost","root","","schoolmanagement");
								 $a=$_SESSION['Student'];
								 $b=$_POST["exam"];
								 if (!$con)
								 {
								 die('Could not connect: ' . mysqli_connect_error());
								 }
								 
								  $result1 = $con->query("SELECT * FROM student WHERE `RollNo`='$a'");
								  if ($result1->num_rows > 0) {
								 
								 while($row = $result1->fetch_array())
								 {

								  $class= $row['Class'];
								
								}
								 
								  }
								 
								 if($class>8){
								 
								 
								 $result2 = $con->query("SELECT * FROM markall WHERE `RollNo`='$a' and `exam`='$b'");
								  if ($result2->num_rows > 0) {
								 echo "<div class='table-responsive'>
						 <table class='table table-bordered table-hover'><tr>
								 <th>Student ID </th>
								 <th>Exam </th>
								 <th>Bangla </th>
								 <th>English</th>
								 <th>Math </th>
								 
								 <th>Islam</th>
								 <th>SocialScience</th>
								 <th>physics</th>
								  <th>Chemistry </th>
								  <th>Biology</th>
								 <th>Computer </th>
								 
								
								 
								 
									<th> Total Marks </th>
								  
								 </tr>";
								 while($row = $result2->fetch_array())
								 {
									 $total=$row['Bangla']+$row['English']+$row['Math']+$row['Islam'] +$row['SocialScience']
									 +$row['Physics']+$row['Chemistry']+$row['Biology']+$row['Computer'];
									
								 echo"<tr>";
								 echo "<td>" .$row['RollNo']."</td>";
								 echo "<td>" .$row['exam']."</td>";
								 echo "<td>" .$row['Bangla']."</td>";
								 echo "<td>" .$row['English']. "</td>";
								 echo "<td>" .$row['Math']. "</td>";
								  echo "<td>" .$row['Islam']. "</td>";
								  echo "<td>" .$row['SocialScience']. "</td>";
								 echo "<td>" .$row['Physics']. "</td>";
								 echo "<td>" .$row['Chemistry']. "</td>";
								 echo "<td>" .$row['Biology']. "</td>";
								  echo "<td>" .$row['Computer']. "</td>";
								  
									
									
								 echo "<td>" .$total. "</td>";
								 echo"</tr>";
								}
								 
								echo"</table>";
								  }
								  else {
									  echo "<script> alert ('Not Found');</script>";
								  }
								 }
								 
								  else if($class<9){
									   $result3 = $con->query("SELECT * FROM markall WHERE `RollNo`='$a' and `exam`='$b'");
								  if ($result3->num_rows > 0) {
								 echo "<div class='table-responsive'>
						 <table class='table table-bordered table-hover'><tr>
								 <th>Student ID </th>
								 <th>Exam </th>
								 <th>Bangla </th>
								 <th>English</th>
								 <th>Math </th>
								 <th>Science</th>
								 <th>Islam</th>
								 <th>Social science </th>
								  <th>Computer </th>
									<th> Total Marks </th>
								  
								 </tr>";
								 while($row = $result3->fetch_array())
								 {
									 $total=$row['Bangla']+$row['English']+$row['Math']+$row['Science']+$row['Islam']
									 +$row['SocialScience']+$row['Computer'];
								 echo"<tr>";
								 echo "<td>" .$row['RollNo']."</td>";
								 echo "<td>" .$row['exam']."</td>";
								 echo "<td>" .$row['Bangla']."</td>";
								 echo "<td>" .$row['English']. "</td>";
								 echo "<td>" .$row['Math']. "</td>";
								 echo "<td>" .$row['Science']. "</td>";
								 echo "<td>" .$row['Islam']. "</td>";
								 echo "<td>" .$row['SocialScience']. "</td>";
								  echo "<td>" .$row['Computer']. "</td>";
								 echo "<td>" .$total. "</td>";
								 echo"</tr>";
								}
								 
								echo"</table>";
								  }
								   else {
									  echo "<script> alert ('Not Found');</script>";
								  }
								 }
								 
									  
								  
								  else{
									  echo "<script> alert ('Not Found');</script>";
								  }
								 ?>
								 <a  href="outputmark.html">Back</a>
                
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
