 <!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Patient</title>

  </head>
     <link rel="stylesheet" type="text/css" href="updatedAcc.css">
    <body>
  
   <div class="topnav">       
  <a href="ReceptionistMainMenu.html" >Home</a>   
   <a href="Patient.html">Patients</a>   
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>

<?php
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'update appointment set time=:ctime, date=:cdate, room=:croom, roomStatus=:croomStatus , doctorId=:cdoctorId WHERE patientId = :cpatientId';
$result = $pdo->prepare($sql);
$result->bindValue(':cpatientId', $_POST['ud_patientId']);   
$result->bindValue(':ctime', $_POST['ud_time']);       
$result->bindValue(':cdate', $_POST['ud_date']);     
$result->bindValue(':croom', $_POST['ud_room']); 
$result->bindValue(':croomStatus', $_POST['ud_roomStatus']);     
$result->bindValue(':cdoctorId', $_POST['ud_doctorId']); 



$result->execute();
     
//For most databases, PDOStatement::rowCount() does not return the number of rows affected by a SELECT statement.
     
$count = $result->rowCount();
if ($count > 0)
{
echo "<h1> You just updated customer no: " . $_POST['ud_patientId'] ." Click<a href='SelectPatientUpdate.php'> here</a> to go back. </h1>";                                         
}
else
{
echo "<h1> Nothing updated. Click<a href='SelectPatientUpdate.php'> here</a> to go back. </h1>";
}
}
 
catch (PDOException $e) { 

$output = 'Unable to process query sorry : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 

}
?>

  <div id = "divBox">
   </div>  
   
            
   <div id= "Logo">
    </div>
 