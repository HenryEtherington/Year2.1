 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Patient Table</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="TablePatient.css">

       <body>
       
 <div class="topnav">       
  <a href="ReceptionistMainMenu.html">Home</a>   
   <a href="Patient.html" >Patients</a>   
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div 
<?php
    try {
   
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM appointment';
$result = $pdo->query($sql); 

                                 
echo "<br /><b> <h1> Appointment </h1> </br><br/><br />";
echo "<h2><table border=1>";
echo "<tr><th> Time: </th>
<th> Date:</th>
<th> Room:</th>
<th> Room Status:</th>
<th>PatientID:</th>
<th>DoctorID: </th> </tr></h2>";

   

while ($row = $result->fetch()) {



echo '<tr><td>' . $row['Time'] . '</td><td>'. $row['Date'] .'</td><td>'. $row['Room'] . '</td><td>'. $row['RoomStatus'] . '</td><td>'.  $row['DoctorID'] . '</td><td>'. $row['PatientID'] . '</td></tr>';
}


} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
  
 echo"<h2> Click<a href='MakeAppointmentForm.php'> here</a> to go back </h2>"; 
?> 

        <div id = "divBox">
       </div>       
      </body>  