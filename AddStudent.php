<?php
  include("connector.php");
  $stdName=$_POST["StudentName"];
  $parName=$_POST["ParentName"];
  $homeAddress=$_POST["HomeAddress"];
  $phone=$_POST["PhoneNumber"];
  $email=$_POST["Email"];
  $password=$_POST["Password"];
  $sql="INSERT into addstudent(stdName,parName,homeAddress,phone,email,password) values(?,?,?,?,?,?)";
  $stmt= $conn->prepare($sql);
  $stmt->bind_param("ssssss",$stdName,$parName,$homeAddress,$phone,$email,$password);
  if($stmt->execute()==1)
    echo "inserted successfully";
  $stmt->close();
  
?>