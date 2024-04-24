<?php
    include("connector.php");
    echo $_FILES['markSheet']['name'];
    $var=$_FILES['markSheet']['tmp_name'];
    echo $var;

    $csvFile = fopen($var, 'r');

    echo '<table>';
    while (($data = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
      echo '<tr>';
      //foreach ($data as $value) {
        //echo '<td>' . htmlspecialchars($value) . '</td>';
      //}
      $stdid=$data[0];
      $science=$data[1];
      $literature=$data[2];
      $computer=$data[3];
      $type=$data[4];
      $status=$data[5];
      $examdate=$data[6];
      $resultdate=$data[7];
      $sql="INSERT into resultdetail(stdid,science,literature,computer,type,status,examdate,resultdate) values(?,?,?,?,?,?,?,?)";
      $stmt= $conn->prepare($sql);
      $stmt->bind_param("ssssssss",$stdid,$science,$literature,$computer,$type,$status,$examdate,$resultdate);
      if($stmt->execute()==1)
        echo "inserted successfully";
      $stmt->close();
    }
    echo '</table>';
    echo 'uploaded data';
    echo $examdate;
    echo $resultdate;

    fclose($csvFile);
	?>