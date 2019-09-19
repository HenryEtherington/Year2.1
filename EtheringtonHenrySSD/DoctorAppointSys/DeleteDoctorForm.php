 <!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Delete Doctor</title>

  </head>
     <link rel="stylesheet" type="text/css" href="selectDoctorDelete.css">
    <body>
  
   <div class="topnav">       
  <a href="ReceptionistMainMenu.html" >Home</a>   
   <a href="Patient.html" >Patients</a>   
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>

       <div id= "Logo">
      </div>
 
<?php

   try {
   
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM doctor';
$result = $pdo->query($sql); 
                                 
echo "<br /><b> <h1> Doctor: </h1> </br><br/><br />";
echo "<h2><table border=1>";
echo "<tr><th>Doctor Id</th>
<th>First Name:</th>
<th>Last Name:</th>
<th>Date of birth:</th>
<th>Phone Number:</th>
<th>Email: </th> </tr></h2>";


while ($row = $result->fetch()) {
echo '<tr><td>' . $row['DoctorID'] . '</td><td>'. $row['FirstName'] .'</td><td>'. $row['LastName'] . '</td><td>'. $row['DOB'] . '</td><td>'.  $row['PhoneNumber'] . '</td><td>'. $row['Email'] . '</td></tr>';
}
echo '</table>';
} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
include 'doctorToDelete.html';
?>

         
    <div id = "divBox">
   </div>  
   
            
