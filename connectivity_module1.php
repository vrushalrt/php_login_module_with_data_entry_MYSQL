<html>
	<head>
		<title>Validation </title>
	</head>
	<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mydb";
	
	//create connecton
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	global $conn;
	//$db=mysqli_select_db($dbname,$conn) or die("Database Not Found, ERROR : ".mysqli_errno()." ".mysqli_error());
	
	//check connection
	if(!$conn){
	die("Connection Failed :".mysqli_errno()." ".mysqli_error());
	}
	/*
	$ID=$_POST['user'];
	$password=$_POST['pass'];
	*/
	
	function signin()
	{
		global $conn;
		session_start(); //start the sessin for user profile page
		if(!empty($_POST['user']))//checking user name which is from sign login.html, is it empty
		{
			$sql="SELECT*FROM login where username='$_POST[user]' AND pass='$_POST[pass]'";
			$query=mysqli_query($conn,$sql) or die("Login Failed :".mysqli_errno($conn)." ".mysqli_error($conn));
			$row=mysqli_fetch_array($query) /*or die(mysqli_error())*/;
			if(!empty($row['username']) AND !empty($row['pass']))
			{
					$_SESSION['username']=$row['pass'];
					echo "<!--SUCCESSFULLY LOGIN TO USER PROFILE PAGE.....--><script type='text/javascript'>alert('Login Successfully!')</script>";
					include 'Data_insertion_DB_module1.php';
			}
			else
			{
				echo "SORRY.... YOU ENTERED WRONG ID AND PASSWORD.....PLEASE RETRY....!";
			}
			
		}
	}
	if(isset($_POST['submit']))
	{
		signin();
	}
	?>
	</body>
</html>