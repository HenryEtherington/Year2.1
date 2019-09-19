    <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Delete Patient</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="deletePatient.css">     
  <body> 
           
 <div class="topnav">       
  <a href="ReceptionistMainMenu.html">Home</a>   
   <a href="Patient.html" >Patients</a>  
    <a href="Doctor.html">Doctors</a> 
     <a href="#about">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div> 



<?php

try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'DELETE FROM patient WHERE PatientID = :cpatientId';
$result = $pdo->prepare($sql);
$result->bindValue(':cpatientId', $_POST['patientId']); 
$result->execute();
echo "<h1> You just deleted patient no: " . $_POST['patientId'] ." \n click<A href='DeletePatientForm.php'> here</A> to go back </h1> ";
} 
catch (PDOException $e) { 
if ($e->getCode() == 23000) {
          echo "<h1> ooops couldnt delete as that record is linked to other tables click<A href='DeletePatientForm.php'> here</A> to go back </h1> ";
     }
} ?>

     <div id = "divBox">
       </div>


   