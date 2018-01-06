<?php
//print_r($_POST);
//retrive values
//Array ( [username] => micka [password] => 133 )
$user = $_POST['username'];
$pass = $_POST['password'];

if(strlen ($user)==0 || strlen($pass) ==0){
	//incomplete form data 
	header("Location: form.php?error");
}
else{
	//greet the user
	echo "Welcome $user. i know your password";
	
	// check if the user and password are correct
	// connect to db
	$conn = mysqli_connect ("localhost","root","","cms");
	//check if the connection is OK
	if(!$conn){
		echo "error connecting the MySQL Server.";
	}
	//else{
		//echo "Ok!";
	//}
	//select db
	//prepare sql statement
	$sql = "SELECT *FROM users WHERE
			username='".$user."' AND password='".sha1($pass)."' ";
	echo $sql;
	//execute sql
	$result = mysqli_query($conn,$sql);
	
	//process the result
	if ($myrow=mysqli_fetch_array($result))
		echo "ok";
	else
		echo "You have entered inavlid username or password";
	
	
	//display the result
	}
?>