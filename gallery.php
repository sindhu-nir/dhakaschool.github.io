<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>DhakaHighSchool</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="fontend/css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index1.html" id="logo" title="DhakaHighSchool">DhakaHighSchool</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="index1.html">Home</a></li>
					<li><a href="studentlog.php">Students</a></li>
					<li><a href="calendar.pdf" target="_blank">Calendar</a></li>
 				</ul>
				<ul>
					<li><a href="teacherlog.php">Teachers</a></li>
					<li class="current"><a href="gallery.php">Gallery</a></li>
					<li><a href="login1.php">Admin</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="divider"></div>
		
	
	<div class="content" align="center" >
		
			
			
			<h1 align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;
				Photos Gallery<br><br></h1>
			

		
									 
 <?php
 
				$con=mysql_connect("localhost","root","");
                mysql_select_db("schoolmanagement",$con);
                $qry="select * from images";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<img height="350" width="350" target="_blank" style="margin:20px" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
					
					
					
					
                }
				
				?>
			
			
			<!-- <aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li><a href="#">Day of teacher<span class="nr">142</span></a></li>
						<li><a href="#">Student olympics<span class="nr">98</span></a></li>
						<li class="current"><a href="#">The best students in 2014<span class="nr">16</span></a></li>
						<li><a href="#">Halloween party<span class="nr">63</span></a></li>
						<li><a href="#">School party<span class="nr">49</span></a></li>
						<li><a href="#">Miss of university<span class="nr">175</span></a></li>
						<li><a href="#">Karaoke party<span class="nr">87</span></a></li>
					</ul>
				</div>
			</aside> -->
			<!-- / sidebar -->
	
		
		<!-- / container -->
		
	</div>
	
	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
						<li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				<article class="col-2">
					<h3>Forum topics</h3>
					<ul>
						<li><a href="#">Omnis iste natus error sit</a></li>
						<li><a href="#">Nam libero tempore cum soluta</a></li>
						<li><a href="#">Totam rem aperiam eaque </a></li>
						<li><a href="#">Ipsa quae ab illo inventore veritatis </a></li>
						<li class="last"><a href="#">Architecto beatae vitae dicta sunt </a></li>
					</ul>
				</article>
				<article class="col-3">
					<h3>Social media</h3>
					<p>Temporibus autem quibusdam et aut debitis aut rerum necessitatibus saepe.</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				<article class="col-4">
					<h3>Newsletter</h3>
					<p>Assumenda est omnis dolor repellendus temporibus autem quibusdam.</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2014 Harrison High School. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Admin Login</h2>
		<form method="post" action="login.php">
			<div class="center">
				<fieldset class="name"><input placeholder="Admin Id ...." type="text" name="id"></fieldset>
				
				
			</div>
			<div class="center">
				<fieldset class="subject"><input placeholder="Admin password ...." type="text" name="pass"></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Login</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
