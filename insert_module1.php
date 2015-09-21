<html>
	<head>
		<title>Insertion</title>
	</head>
	<body>

	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mydb";
	
	//create connection 
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("connection Failed, Error :".mysqli_connect_errno()." ".mysqli_connect_error());
	}

	//$db=mysqli_select_db("mydb",$conn); //selecting db from server
	
	if(isset($_POST['submit'])){// Fetching variables of the form which travels in URL
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		
		if($name !='' || $email !=''){
			//insert query of sql
		$sql="insert into student(student_name, student_email, student_contact, student_address) values ('$name', '$email', '$contact', '$address')";
		$query=mysqli_query($conn,$sql);
		echo "<!--<br><br><span>Data Inserted successfully...!</span>--><script type='text/javascript'>alert('Data Inserted successfully...!)</script>";
		include 'Data_insertion_DB_module1.php';
		}
		else{
			echo "<p>Insertion Failed<br> Some Fileds are blank...! </p><br>".mysqli_error($conn);
		}
		
		
	}
	mysqli_close($conn);



	?>

</body>
</html>