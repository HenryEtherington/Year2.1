<?php

   try {
   
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM patient';
$result = $pdo->query($sql); 
                                 
echo "<br /><b>A Quick View</b><br /><br />";
echo "<table border=1>";
echo "<tr><th>Patient Id</th>
<th>First Name:</th>
<th>Last Name:</th>
<th>Date of birth:</th>
<th>Phone Number:</th>
<th>Email: </th> </tr>";




while ($row = $result->fetch()) {
echo '<tr><td>' . $row['PatientID'] . '</td><td>'. $row['FirstName'] .'</td><td>'. $row['LastName'] . '</td><td>'. $row['DOB'] . '</td><td>'.  $row['PhoneNumber'] . '</td><td>'. $row['Email'] . '</td></tr>';
}
echo '</table>';
} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}


include 'patienttoupdate.html';

?>