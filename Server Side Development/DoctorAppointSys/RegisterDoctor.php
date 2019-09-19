<?php try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM doctor'; 
$result = $pdo->query($sql); 
while ($row = $result->fetch()) { 
      echo $row['DoctorId'] . " " .$row['FirstName']  . "  ".$row['LastName'] . "  " .$row['DOB'] .  "  " .$row['PhoneNumber'] . " " .$row['Email'] .'<br>';
}
} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
