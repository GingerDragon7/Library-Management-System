
<?php 
session_start();

$con=mysqli_connect("localhost","root","","admin");


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


				
<html>
<head>
		<title>u.com</title>
		<meta charset="utf-8"/>
				<link rel="stylesheet" href="loginpage1.css"/>


    <meta charset="utf-8" />
    <title> </title>
</head>
				

<body>
 <form  action ="" method="POST">
 <div style="font-family:arial;color:azure;font-size:20px;" id="user">
 <input placeholder="Username" style="font-size:25px; font-family:arial; background-color:azure; border-radius:6px; height:40px;" id="username" type="text" name="username"> 
 </div>
 <div style="font-family:arial;color:azure;font-size:20px;"id="pass">
 <input style="font-size:25px; font-family:arial; border-radius:6px; background-color:azure; height:40px;" id="password" placeholder="Password" type="password" name="password">
 </div>
 
 <div id="sign">
 <input type="submit" id="start" style="font-size:17px; padding:3px; background-color:cadetblue; cursor:hand; border-radius:6px;"  value="Login">
 </div>
 
 </form>
 <div id="sign1">
 <p style="display:inline; font-size:20px;color:azure; font-family:arial;">Don't have an account ?</p><a href="signup.php">
 <button style="font-size:17px; padding:4px; background-color:cadetblue; cursor:hand; border-radius:5px;">SignUp</button></a>
 </div>
 </body>
 </html>
