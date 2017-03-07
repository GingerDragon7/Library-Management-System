
<form action="test.php" method="GET">
		choose a lover type		
		<select name="lovers">
		<option value="aasna shah">john ki mall</option>
		<option value="amrita">sunny ki mall</option>
		<option value="john">assna ka lover</option>
		<option value="sunny">amrita ka lover</option>
		</select><br><br>
		<input type="submit" value ="Submit">
	</form>
<?php
$con=mysqli_connect("localhost","root","","test2");
if (isset($_GET['lovers']) &&!empty($_GET['lovers'])){
	$lovers=  strtolower($_GET['lovers']);
	if ( $lovers=='amrita' || $lovers=='aasna shah' || $lovers=='john' || $lovers=='sunny'){	
		
				
				$query = "SELECT `name`,`lover_name` FROM `testing`  WHERE  `lover_name`='$lovers',`name`='$lovers' ";
				if ($query_run = mysqli_query($con,$query) ){
					if(mysqli_num_rows($query_run)==NULL){
						echo 'no results found';
					}else{
						while($query_row = mysqli_fetch_assoc($query_run)) {
							$name=$query_row['name'];
							$lover_name=$query_row['lover_name'];
							
							
							echo  $lover_name;
							echo  $name;
						}
					}
				}
				else{
					echo mysqli_error($con);
				}
		
	}
}

?>
