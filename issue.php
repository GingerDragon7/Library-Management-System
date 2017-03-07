

<?php 
session_start();
if(isset($_SESSION['user']))
{
	$username=$_SESSION['user'];

?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title>u.com</title>
		<meta charset="utf-8"/>
				<link rel="stylesheet" href="issue1.css"/>
		
	</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
 <script>
        $(document).ready(function () {
                debugger;
                var u1 = new SpeechSynthesisUtterance(' Welcome  <?php echo $username; ?> to the library of HERITAGE INSTITUTE OF TECHNOLOGY');
                u1.lang = 'en-US';
                u1.pitch = 1;
                u1.rate = 1;
                //u1.voice = voices[10];
                u1.voiceURI = 'native';
                u1.volume = 1;
                speechSynthesis.speak(u1);
        });
    </script>
<h1 style="color:azure; font-family:georgia;">Welcome <?php echo $username; ?> to Libraary of HITK</h1>
<nav id="primary_nav_wrap">
<ul>
  <li class="menuitem"><a href="basics.php">Home</a></li>
  <li><a href="#">Categories</a>
    <ul>
	
			<li><a href="physics.php">Physics</a>
				
			</li>
			
			<li><a href="physics.php">Maths.php</a>
				
			</li>
			
          <li><a href="#">IT</a>
				<ul>
				  <li><a href="#">C</a></li>
				  <li><a href="#">C++</a></li>
				  <li><a href="#">JAVA</a></li>
					<li><a href="#">Compiler</a></li>
					<li><a href="#">Automata</a></li>
				  <li><a href="#">INTC</a></li>
				  <li><a href="#">Data structure and algorithms</a></li>
					<li><a href="#">Computer architecture</a></li>
				</ul>
			</li>
			
			<li><a href="#">MECHANICAL</a>
				<ul>
				  <li><a href="#">thermo</a></li>
				  <li><a href="#">mechanics</a></li>
				  <li><a href="#">stones</a></li>
					
				</ul>
			</li>
			
			<li><a href="#">EE</a>
				<ul>
				  <li><a href="#">thermo</a></li>
				  <li><a href="#">mechanics</a></li>
				  <li><a href="#">stones</a></li>
					
				</ul>
			</li>
			
			<li><a href="#">ECE</a>
				<ul>
				  <li><a href="#">thermo</a></li>
				  <li><a href="#">mechanics</a></li>
				  <li><a href="#">stones</a></li>
					
				</ul>
			</li>
			
			<li><a href="#">Civil</a>
				<ul>
				  <li><a href="#">thermo</a></li>
				  <li><a href="#">mechanics</a></li>
				  <li><a href="#">stones</a></li>
					
				</ul>
			</li>
			
		</ul>
	<li>
  <li><a href="#">Students </a>
    <ul>
      <li><a href="#">Sub Menu 1</a></li>
      <li><a href="#">Sub Menu 2</a></li>
      <li><a href="#">Sub Menu 3</a></li>
    </ul>
  </li>
  
  <li>
	  <a href="#">Issue
		<ul>
		 <li><a href="#">Issue</a></li>
		<li><a href="#">Edit Information</a></li>	  
		</ul>
	  </a> 
  </li>	
 	
</ul>
</nav>

<!-- search form 1 -->
<form class="searchbox_1" action="">
<input type="search" class="search_1" placeholder="Search" />
<button type="submit" class="submit_1" value="search">&nbsp;</button>
</form> 
<div style="position:absolute; top:15px; right:30px;">
<a href="logout.php"><button  style="font-size:19px; padding:4px; background-color:cadetblue; cursor:hand; border-radius:5px;">Logout</button></a>
</div>
 </body>
 </html>
 <?php
	}
	else
	{
		header('Location:issue.php');
	}
 ?>