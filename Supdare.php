<html>
<head>
<title>
company
</title>
</head>
<body>
<form method="POST" action="<?php echo("$_SERVER[PHP_SELF]");?>">
Student Name:<input type="text" name="fa1"><br/>
Roll :<input type="text" name="fa2"><br/>
Class:<input type="text" name="fa3">


<button>Update</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
			{
$a=$_POST["fa1"];
$b=$_POST["fa2"];
$c=$_POST["fa2"];

$con=mysqli_connect("localhost","root","","");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else{
  echo "Connected successfully <br>";
}

mysqli_select_db($con,"school_management");



$x=mysqli_query($con,"SELECT * FROM student WHERE Name='$a' and RollNo='$b' Class='$c'");

if($x){
    
		while($m=mysqli_fetch_array($x))
		{
			
			if($m["Name"]='$a' && $m["RollNo"]='$b' && $m["Class"]='$c')
				{
echo("<form method='POST' action='up.php'>
<input type='hidden' name='fa1' value='$a'>
<input type='hidden' name='fa2' value='$b'>
<input type='hidden' name='fa2' value='$c'>
New Name:<input type='text' name='fa3'>
New Roll:<input type='text' name='fa4'>
New Class:<input type='text' name='fa4'>

<button>Update</button>
</form>");

				}
			
		}
	}

 else {echo "data is not available";}

} 





?>
