<?php

  include("connector.php");

  $id =$_GET['id'];
	$users=array();


   $sql="select * from addstudent,resultdetail where resultdetail.id=addstudent.id and resultdetail.id = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows>0)
    {
    	$row=$result->fetch_assoc();
    	
		    echo '
			<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title></title>
			<link rel="stylesheet" type="text/css" href="marksheet.css">
		</head>
		<body>
			<div id="container">
				<h1>School Report Card</h1>
				<p>unit test result</p>
				<table border="1px">
					<tr>
						<td colspan="3"><span>Roll Number:</span>'.$row["rollnumber"].'</td>
						<td colspan="6"><span>status:</span>'.$row["status"].'</td>
					</tr>


					<tr>
						<td colspan="3"><span>Type of examination:</span>Unit Test</td>
						<td colspan="6"><span>Registration Number:</span>'.$row["id"].'</td>
					</tr>


					<tr>
						<td colspan="6"><span>Name</span>:'.$row["stdName"].'</td>
					</tr>


					<tr>
						<td colspan="6"><span>Parent Name</span>:'.$row["parName"].'</td>
					</tr>


					<tr style="background: #3665d1;">
						<th>Serial.No</th>
						<th>Subject</th>
						<th>Total Marks</th>
						<th>Obtain Marks</th>
						<th>Total Percentage</th>
						<th>Remark</th>

					</tr>



					<tr>
						<th>1</th>
						<th>Science</th>
						<th>100</th>
						<th>'.$row["science"].'</th>
						<th>88%</th>
						<th>Excellence</th>
					</tr>



					<tr>
						<th>2</th>
						<th>Literature</th>
						<th>100</th>
						<th>'.$row["literature"].'</th>
						<th>85%</th>
						<th>Good</th>
					</tr>


					<tr>
						<th>3</th>
						<th>Computer</th>
						<th>100</th>
						<th>'.$row["computer"].'</th>
						<th>95%</th>
						<th>Excellence</th>
					</tr>


					<tr style="background:#3665d1">
						<th colspan="3">Total marks:289/300</th>
						<th colspan="3">Remak:Brilliant Performance</th>
					</tr>
				</table>
				
			</div>
		</body>
		</html>';}

?>