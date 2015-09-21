  <html>
	<head>
		<title>PHP insertion of Data into DB Student_dbs</title>
	
	<link href="style/insert.css" rel="stylesheet" type="text/css">
	
	</head>
	<body>
	<div class="maindiv">
	<!--HTML form-->
	<div class="form_div">
	<div class="title">
	<h2>Inert Data In Database using PHP.</h2>
	</div>
	<form action="insert_module1.php" method="POST">
	<h2>Form</h2>
	<label>Name :</label>
	<input type="text" name="name" class="input" value="">
	<label>Email :</label>
	<input type="text" name="email" class="input" value="">
	<label>Contact :</label>
	<input type="text" name="contact" class="input" value="">
	<label>Address :</label>
	<textarea cols="25" name="address" rows="5"></textarea><br>
	<input type="submit" name="submit" class="submit" value="Insert">
	</form>
	</div>
	</div>
		
	
	
	
	
	</body>
</html>