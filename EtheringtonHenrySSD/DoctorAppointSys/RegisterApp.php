<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Register App</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="RegisterApp.css">     
  <body>

           
 <div class="topnav">       
  <a href="ReceptionistMainMenu.html">Home</a>   
   <a href="Patient.html" >Patients</a>  
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div>
  
    <?php


      if (isset($_POST['SUBMIT'])) {
 
       echo "<h2> Click <a href='TableAppointment.php'> here</a> to check tables </h2>";
       
    
              
try { 
          
           
       $ctime = $_POST['ctime'];
       $cdate = $_POST['cdate'];
       $croom = $_POST['croom'];
       $croomStatus = $_POST['croomStatus'];
       $cdoctorId = $_POST['cdoctorId'];
       $cpatientId = $_POST['cpatientId'];
                                                                                            
    if ($ctime == ''  or $cdate == '' or $croom == '' or $croomStatus == '' or $cpatientId == '' or $cdoctorId == ' ')
    {
        echo("<h1>You did not complete the insert form correctly <br> </h1>");
                  }

                  else{
            

              
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', '');  
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO appointment (time,date,room,roomStatus.doctorId,patientId) VALUES( :ctime, :cdate, :croom, :croomStatus, :cdoctorId, :cpatientId)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':ctime', $ctime);
    $stmt->bindValue(':cdate', $cdate);
    $stmt->bindValue(':croom', $croom);
    $stmt->bindValue(':croomStatus', $croomStatus);
    $stmt->bindValue(':cdoctorId', $cdoctorId);
    $stmt->bindValue(':cpatientId', $cpatientId);

    
    $stmt->execute();

    //header("location:RegisterPatientForm.php"); 
 
    }
} 
catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
 } 
 
 }
else {
      echo("Patient has been register correctly");
 include 'RegisterApp.php'; 

 }
 ?>
 
      <div id = "divBox">
       </div> 
      
          