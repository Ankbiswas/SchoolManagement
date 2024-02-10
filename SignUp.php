<?php
    include("connector.php");
	$FirstName=$_POST["FirstName"];
	$LastName=$_POST["LastName"];
	$email=$_POST["signupEmail"];
	$password=md5($_POST["signupPassword"]);
	echo "$FirstName";
	echo "$LastName";
	echo "$email";
	echo "$password";
	$sql="INSERT into signupdata(FirstName,LastName,email,password) values(?,?,?,?)";
	$stmt= $conn->prepare($sql);
	$stmt->bind_param("ssss",$FirstName,$LastName,$email,$password);
	if($stmt->execute()==1)
		echo "inserted successfully";
	$stmt->close();

?>