
<html>							
<body>
							
							
							
							
							<form enctype="multipart/form-data" method="post" action="sample1.php" > 
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
							<p id="phup">Click browse button to choose photo:<br /><input type="file" name="image" /></p>
							<br />
							
							<br />
							<br />
							<input type="submit" name="formsubmit" value="upload here" size="35" />
							</form>
							</body>
							</html>

					<?php 

					if (isset($_POST['formsubmit']))
														{
					 $db = mysqli_connect("localhost","root","","schoolmanagement"); //keep your db name
					$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$name = $_FILES['image']['name'] ;
					//you keep your column name setting for insertion. I keep image type Blob.
					$query = "INSERT INTO images (name,image) VALUES('$name','$image')";  
					$qry = mysqli_query($db, $query);
					if($qry==True){
					echo "Successful";
					}
						}
					 ?>
					 
									<?php
						$con = mysql_connect("localhost","root","");
						if (!$con)
						{
						die('Could not connect: ' . mysql_error());
						}

						mysql_select_db("schoolmanagement", $con);


						$query="SELECT * FROM images";
						$result = @mysql_query($query);
						echo "<table border='1'>";
						


						while($row = mysql_fetch_array($result))
						{
						
						echo "<tr>" . $row['name'] . "</tr>";
						echo '<tr><img height="400" width="400" target="_blank" style="margin:20px" 
						src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></tr>';
						//echo "<td>" . $row['filename'] . "</td>";
						
						}
						echo "</table>";

						mysql_close($con);
						?>