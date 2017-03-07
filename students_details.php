	<?php
	
$con=mysqli_connect("localhost","root","","admin");
// Check connection

				
				
						$sql="SELECT * FROM `students`" ;
						$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($con,$res))
						{
							foreach($row as $key=>$val)
							{
								echo $key.": ".$val."<br/>";
							}
						}
						mysqli_free_result($res);
?>
