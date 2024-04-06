<?php
  include("connector.php");
  $stdName=$_POST["StudentName"];
  $parName=$_POST["ParentName"];
  $rollnumber=$_POST["RollNumber"];
  $classnumber=$_POST["ClassNumber"];
  $section=$_POST["ClassSection"];
  $homeAddress=$_POST["HomeAddress"];
  $phone=$_POST["PhoneNumber"];
  $email=$_POST["Email"];
  $sql="INSERT into addstudent(stdName,parName,homeAddress,phone,rollnumber,classnumber,section,email) values(?,?,?,?,?,?,?,?)";
  $stmt= $conn->prepare($sql);
  $stmt->bind_param("ssssssss",$stdName,$parName,$homeAddress,$phone,$rollnumber,$classnumber,$section,$email);
  if($stmt->execute()==1)
    echo "inserted successfully";
  $stmt->close();
  
?>