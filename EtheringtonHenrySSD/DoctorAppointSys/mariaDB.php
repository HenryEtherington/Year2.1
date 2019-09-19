<?php try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM patient'; 
$result = $pdo->query($sql); 
while ($row = $result->fetch()) { 
      echo $row['patientId']  . "  ".$row['firstName'] . "  " .$row['lastName'] .  "  " .$row['DOB'] "  " .$row['email'] "  " .$row['phoneNumber'] .'<br>';
}
} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
