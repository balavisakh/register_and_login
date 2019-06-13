<?php 
include("connection.php");
if(isset($_POST["submit"])){
	$username = $_POST["name"];
	$password = $_POST["pass"];

	if($username!="" && $password!=""){
		$sql = "SELECT id,username,password FROM users WHERE username='$username' AND password='$password'";
		$query = mysqli_query($conn,$sql);
		 // print_r($query);
		if($query->num_rows==1){
			header("location:user_page.php");
		}
		else{
			echo "Invalid user or password";
		}

	}
	else{
		echo "<p>Please enter a required details</p>";
	}
}

 ?>