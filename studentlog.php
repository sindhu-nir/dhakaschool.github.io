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
 <label> <h1>Login Form </h1></label>
</div>
    <div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">

                        <form name="form" method="post" action="logins.php">

                            <div class="form-group">
                                <label>Roll No :</label>
                                <input type="text" name="id" placeholder="Example: 07-001" required pattern="[0-1]+[0-9]+-[0-9]+[0-9]+[0-9]"  class="form-control">
                            </div>
							
							 <div class="form-group">
                                <label>Password : </label>
                                <input type="password" name="pass" placeholder="*******" required class="form-control">
                            </div>

							<br>
                            <button type="submit" class="btn btn-success">Login</button>

                        </form>

						<p align="center">IF You Haven't Register -> <a href="studentReg.php"> Register Here !! </a></p>
						
                    </div>
					</div>
	
	</body>
	</html>