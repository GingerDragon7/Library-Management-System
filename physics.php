<?php
	$con=mysqli_connect("localhost","root","","admin");
	$sql="SELECT book_no,book_name,writer,availiability FROM Phy";
	$result=mysqli_query($con,$sql);
	$cnt=mysqli_num_rows($result);
?>


<html>
<head>
		<title>u.com</title>
		<meta charset="utf-8"/>
				<link rel="stylesheet" href="2ndpage1.css"/>
		
	</head>
<body>
 <table  style="color:white;" border=1>
	<caption>Welcome to physics database</caption>
		<tr>
			<th>BOOK NUMBER</th>
			<th>BOOK Name</th>
			<th>WRITER</th>
			<th>Availiabilty</th>
			
		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
			<?php
			foreach($row as $key=>$val)
			{
		?>
			<td><?php echo $val; ?></td>
		<?php
			}
			?>
			</tr>
			<?php
		}
		?>
 </table>

 </body>
 </html>
 



