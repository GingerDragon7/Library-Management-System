<html>
<head>
		<title>u.com</title>
		<meta charset="utf-8"/>
				<link rel="stylesheet" href="issuebooks2.css"/>
				<script type="text/javascript">
	function populate(s1,s2,s3){
		var s1 = document.getElementById(s1);
		var s2 = document.getElementById(s2);
		var s3 = document.getElementById(s3);
		s2.innerHTML="";
		s3.innerHTML="";
		if(s1.value =="physics"){
			var optionArray=["|","Fundametal Physics|Fundametal Physics","electromagetism|electromagetism","thermodynamics|thermodynamics","optics|optics"];
			for(var option in optionArray){
					var pair =optionArray[option].split("|");
					var newOption = document.createElement("option");
					newOption.value=pair[0];
					newOption.innerHTML=pair[1];
					s2.options.add(newOption);
					
				if(s2.value=="Fundamental physics")	{
									var optionArray1=["|","Fundametal Physics|Fundametal Physics","electromagetism|electromagetism","thermodynamics|thermodynamics","optics|optics"];
									for(var option in optionArray1){			
											var pair =optionArray[option].split("|");
											var newOption = document.createElement("option");
											newOption.value=pair[0];
											newOption.value=pair[1];
											newOption.innerHTML=pair[2];
											s3.options.add(newOption);
									}
								
				}
					
			}
		}
		
			if(s1.value =="Chemistry"){
			var optionArray=["|","Fundametal Physics|Fundametal Physics","electromagetism|electromagetism","thermodynamics|thermodynamics","optics|optics"];
			for(var option in optionArray){
					var pair =optionArray[option].split("|");
					var newOption = document.createElement("option");
					newOption.value=pair[0];
					newOption.innerHTML=pair[1];
					s2.options.add(newOption);
			}
		}
		
		
		
		
		
		
	}	
</script>	
	</head>
<body>
<div id="signup">
			
			<form action="" method="POST" id="signup_form">
				<h2> </h2>
				<p id="error"><p>
				<input type="text" name="name" placeholder="Name"><br>
				<input type="text" name="roll_no" maxlength="30" placeholder="Roll_no"><br>
				<input type="text" name="subject" maxlength="30" placeholder="subject"><br>
				<input type="text" name="book_name" maxlength="30" placeholder="book_name"><br>
				<input type="email" name="book_no" maxlength="30" placeholder="book_no"><br>
				<label style="font-size:20px;" for="issue_date"l>Isuue Date</label><br/>
				<input id="issue_date"type="date" name="issue_date"/><br>
				<label style="font-size:20px;" for="return_date"l>Return Date</label><br/>
				<input id="return_date"type="date" name="return_date"/><br>
				<input type="submit" value="issue" name="issue">
			</form>
			<h2> choose your car </h2>
			<hr/>
			choose the Department:
			<select id="slct1" name="slct1" onchange="populate('slct1','slct2','slct3')">
				<option value=""></option>
				<option value="physics">Physics</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Maths">Maths</option>
				<option value="IT and CSE">IT and CSE</option>
				<option value="EE">EE</option>
				<option value="ECE">ECE</option>
				<option value="ME">ME</option>
				<option value="BT">BT</option>
				<option value="INSTRU">INSTRU</option>
			</select>
			
			choose subject:
			<select id="slct2" name="slct2"></select>
			
			choose book:
			<select id="slct3" name="slct3"></select>
			
		</div>
	</body>
	</html>
	