<?php
$con=mysqli_connect("localhost","root","","admin");

if (!$con)
  {
  echo "Failed to connect to MySQL: ";
  }
else{
	echo 'database found';
}



 if (isset($_POST['username']) &&isset($_POST['password'])){
			 $username= $_POST['username'];
			$password= $_POST['password'];
			
			if (!empty($username)&&!empty($password)) {
				$result="SELECT  * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
				$row=mysql_query($result);
					if(mysql_num_rows($row)==1){
						echo 'welcone';
					}
					else{
						echo'go back';
					}
				}
			}			
		?>	
		
		
		 <form action ="" method="POST">
 username: <input type="text" name="username"> password: <input type="password" name="password">
 <input type="submit" value="Login">
 </form>