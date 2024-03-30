<?php
   include("connector.php");

	$users=array();


   $sql="select stdName,status,examDate from addstudent,resultdetail where resultdetail.id=addstudent.id"; 
   $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows>0)
    {
    	while($row=$result->fetch_assoc())
    	{
    		$users[] = $row;

    	}

    	
    }
    else{
    	echo "Error";
    } 
    echo json_encode($users);
?>