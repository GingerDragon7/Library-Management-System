<?php
 if (isset($_POST['username']) && isset($_POST['password'])){
			 $username= $_POST['username'];
			$password= $_POST['password'];
			
			if (!empty($username)&&!empty($password)) {
			$query="SELECT `id` FROM `users` WHERE `username`='$username' AND `Password`='$password'";
			
			if($query_run=mysqli_query($con,$query)){
				$query_num_rows =mysqli_num_rows($query_run);
				if($query_num_rows==0){
					echo 'invalid username password combinattionm';
				}else if($query_num_rows==1){
					echo $user_id=mysql_result($query_run,0,'id');
					
				}
			}
				
		 }
 }
 ?>
 
 <form action ="" method="POST">
 username: <input type="text" name="username"> password: <input type="password" name="password">
 <input type="submit" value="Login">
 </form>
 
	 