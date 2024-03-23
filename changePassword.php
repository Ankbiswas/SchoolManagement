<?php
  include("connector.php");
  $NewPswd=md5($_POST["NewPassword"]);
  $OldPswd=md5($_POST["OldPassword"]);
  session_start();
  if (isset($_SESSION["emailId"])) {
    $email = $_SESSION["emailId"];
    $sql="update signupdata set password = ? where password = ? and email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $NewPswd, $OldPswd, $email);
    if($stmt->execute()==1)
    {
      echo "Success";
    }
    else{
      echo "Error";
    }
}

?>