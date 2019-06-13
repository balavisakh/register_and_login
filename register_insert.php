<?php
include("connection.php");

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$question = $_POST["question"];
$answer = $_POST["answer"];

$insert = "INSERT INTO users(name, username, email, password, question, answer) VALUES('$name','$username','$email','$password','$question','$answer')";

if($insert_query = mysqli_query($conn,$insert))
{
	echo "failed to insert";
}
else{
	echo "insert successfull";
}


?>