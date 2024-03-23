<?php
    include("connector.php");
   	$email=$_POST["email"];
   	$pswd=md5($_POST["pwd"]);
   	$sql="select Firstname,LastName,email from signupdata where email=? and password=?"; 
   	$stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pswd);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows==1)
    {
    	$row=$result->fetch_assoc();
    	$currUser =  $row['Firstname']." ".$row['LastName'];
        $email = $row['email'];
    	session_start();
    	echo $currUser;
    	$_SESSION["logIn"]=$currUser;
        $_SESSION["emailId"]=$email;
    }
    else{
    	echo "incorrect";
    } 
?>