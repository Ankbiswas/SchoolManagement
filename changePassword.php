<?
  include("connector.php");
  $NewPswd=$_POST["npwd"];
  $OldPswd=$_POST["opwd"];
  $sql="select password from signupdata where password='$OldPswd'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();
  if($result->num_rows==1)
  {
  	$sqlchange="update signupdata set password='$NewPswd' where password='$OldPswd'";
  	$stmt = $conn->prepare($sql);
  	$stmt->execute();
  }

?>