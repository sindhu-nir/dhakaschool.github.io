
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
	<title>HarrisonHighSchool</title>
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
 <label> <h1>Login Form </h1></label>
</div>
    <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        

                    </div>

<?php

	session_start();
	
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("schoolmanagement") or die(mysql_error());
	
	
		
		$id = $_POST["id"];
		$Password = md5($_POST["pass"]);
	
		
	   $res  = mysql_query("SELECT * FROM `student` WHERE `RollNo`='".$id."' ") 
		or die(mysql_error());
	
		$Pass = mysql_fetch_array($res);
		
		
	 if( $Password == $Pass['password']&& $Password!=NULL && $Password!=""  && $Pass['approve']=='true')
	 {
		 $_SESSION['count']=0;
		 $_SESSION['Student'] = $id ;
		 $_SESSION['Studentid']=$Pass['Name'];
		 header("Location: studentUI.php");
		 echo "Login Successful";
	 }
	 else {
		 if($Password != $Pass['password'] ){
			  $_SESSION['count']++;
			  $c= $_SESSION['count'];
			 
			 if($_SESSION['count']==3){
				 $sql = "UPDATE student SET approve='false' WHERE RollNo='$id'";

						if (mysql_query($sql,$con) === TRUE) {
							 $_SESSION['count']=0;
							echo "<script> alert ('U Have Been Blocked ');</script>";
						}
			 }
			echo "<script> alert ('Username And password did not match  attempt=$c ');</script>";
		 }
		 else{
			  $_SESSION['count']=0;
			  $c= $_SESSION['count'];
			  
			 echo "<script> alert ('Needs Admins Approval attempt=$c ');</script>";
		 }
			echo "<p align='center'><a  href=studentlog.php> back To Student </a> </p>";
			
	 }
	

	?>