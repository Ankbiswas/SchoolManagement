<?php
    include("connector.php");
   	$email=$_POST["email"];
   	$pswd=md5($_POST["pwd"]);
   	$sql="select Firstname,LastName from signupdata where email=? and password=?"; 
   	$stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pswd);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows==1)
    {
    	$row=$result->fetch_assoc();
    	$currUser =  $row['Firstname']." ".$row['LastName'];
    	session_start();
    	echo $currUser;
    	$_SESSION["logIn"]=$currUser;
    }
    else{
    	echo "incorrect";
    } 
?>