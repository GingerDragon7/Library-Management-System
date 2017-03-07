<?php
session_start();
include 'loginpage.php';
$con=mysqli_connect("localhost","root","","admin");
// Check connection












 if (isset($_POST['username']) && isset($_POST['password'])){
			 $username= $_POST['username'];
			$password= $_POST['password'];
			if (!empty($username)&&!empty($password)) {
				
				$result="SELECT * FROM users WHERE username='$username' AND password='$password'";
				$row=mysqli_query($con,$result);
					if(mysqli_num_rows($row)==1)
					{
						session_start();
						$_SESSION['user']=$username;
						header('Location:issue.php');
					}else
					{
						echo'sorry';
					}
			}
		}
		?>	
		
		
	