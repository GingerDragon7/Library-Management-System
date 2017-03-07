<?php
include 's1.html';
$con=mysqli_connect("localhost","root","","admin");
// Check connection



 if (isset($_POST['name'])&& isset($_POST['username']) && isset($_POST['roll_no']) && isset($_POST['dept']) && isset($_POST['mobile_no'])&& isset($_POST['email']) && isset($_POST['password'])){
			$name= $_POST['name'];
			 $username= $_POST['username'];
			$roll_no= $_POST['roll_no'];
			 $dept= $_POST['dept'];
			$mobile_no= $_POST['mobile_no'];
			$email= $_POST['email'];
			$password= $_POST['password'];
			
			if  (!empty($_POST['name']) && !empty($_POST['username'])&& !empty($_POST['roll_no']) && !empty($_POST['dept']) && !empty($_POST['mobile_no'])&& !empty($_POST['email']) && !empty($_POST['password'])){
				
				$sql = "INSERT INTO users (username, password)
				VALUES ('$username', '$password');";
				$sql1 = "INSERT INTO students (name,username,roll_no,dept,mobile_no,email)
				VALUES ('$name','$username','$roll_no','$dept','$mobile_no','$email');";
				
				
				if (mysqli_query($con,$sql1)) {
					echo "Yo have updated";
				} else {
					echo "Error updating record: " . mysqli_error($con);
				}
		
				if (mysqli_query($con,$sql)) {
					echo "Yo have Signep up succesfully";
				} else {
					echo "Error updating record: " . mysqli_error($con);
				}
		
		}
 }

		
?>
				
				
		
		
	