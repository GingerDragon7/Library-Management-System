<?php
include 'loginpage.html';
$con=mysqli_connect("localhost","root","","admin");
// Check connection





 if (isset($_POST['username']) && isset($_POST['password'])){
			 $username= $_POST['username'];
			$password= $_POST['password'];
			
			if (!empty($username)&&!empty($password)) {
				$result="SELECT * FROM users WHERE username='$username' AND password='$password'";
				$row=mysqli_query($con,$result);
					if(mysqli_num_rows($row)==1){
						$sql="SELECT * FROM users WHERE username='$username'";
						$res=mysqli_query($con,$sql);
						while($row=mysqli_fetch_assoc($res))
						{
							foreach($row as $key=>$val)
							{
								echo $key.": ".$val."<br/>";
							}
						}
						mysqli_free_result($res);
					}
					else{
						echo'go back';
					}
				}
			}			
		?>	
		
		