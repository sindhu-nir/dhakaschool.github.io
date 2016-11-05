<?php
	session_start();
	
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("schoolmanagement") or die(mysql_error());
	
	
		
		$id = $_POST["id"];
		$Password = md5($_POST["pass"]);
	
	   $res  = mysql_query("SELECT `password` FROM `admin` WHERE `Id`='".$id."' ") 
		or die(mysql_error());
	
		$Pass = mysql_fetch_array($res);
		
	 if( $Password == $Pass['password']&& $Password!=NULL && $Password!="")
	 {
		 $_SESSION['CurrentUser'] = $id;
		 header("Location: admin.php");
		 echo "Login Successful";
	 }
	 else {
		 
echo "<script> alert ('Username and pass word did not matched  ');</script>";

echo "<a href='index1.html'>back </a>";


	 }
	
	?>