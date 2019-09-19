 <!DOCTYPE html>
<html lang='cs'>
  <head>
    <title> Cancel Appointment </title>

  </head>
     <link rel="stylesheet" type="text/css" href="CancelAppointmentForm.css">
    <body>
  
   <div class="topnav">       
  <a href="ReceptionistMainMenu.html" >Home</a>   
   <a href="Patient.html" >Patients</a>   
    <a href="Doctor.html">Doctors</a> 
     <a href="#about">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>

       <div id= "Logo">
      </div>
 
          
    <div id = "divBox">
   </div>  
   
 
<?php

   try {
   
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM appointment';
$result = $pdo->query($sql); 
                                 
echo "<br /><b> <h1> Appointment: </h1> </br><br/><br />";
echo "<h2><table border=1>";
echo "<tr><th>Time:</th>
<th>Date:</th>
<th>Room:</th>
<th>Room Status:</th>
<th> PatientID: </th>
<th> DoctorID: </th> </tr></h2>";


while ($row = $result->fetch()) {
echo '<tr><td>' . $row['Time'] . '</td><td>'. $row['Date'] .'</td><td>'. $row['Room'] . '</td><td>'. $row['RoomStatus'] . '</td><td>'.  $row['PatientID'] . '</td><td>'. $row['DoctorID'] . '</td></tr>';
}
echo '</table>';
} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
include 'appointmentToDelete.html';
?>


            
