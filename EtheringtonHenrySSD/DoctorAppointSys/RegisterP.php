<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Register P</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="RegisterP.css">     
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
 
       echo "<h2> Click <a href='tablePatient.php'> here</a> to check tables </h2>";
       
    
              
try { 
          
           
       $cfirstName = $_POST['cfirstName'];
       $clastName = $_POST['clastName'];
       $cDOB = $_POST['cDOB'];
       $cphoneNumber = $_POST['cphoneNumber'];
       $cemail = $_POST['cemail'];
                                                                                            
    if ($cfirstName == ''  or $clastName == '' or $cDOB == '' or $cphoneNumber == '' or $cemail == '')
    {
        echo("<h1>You did not complete the insert form correctly <br> </h1>");
                  }

                  else{
            

              
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', '');  
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO patient (firstName,lastName,DOB,phoneNumber,email) VALUES( :cfirstName, :clastName, :cDOB, :cphoneNumber, :cemail)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':cfirstName', $cfirstName);
    $stmt->bindValue(':clastName', $clastName);
    $stmt->bindValue(':cDOB', $cDOB);
    $stmt->bindValue(':cphoneNumber', $cphoneNumber);
    $stmt->bindValue(':cemail', $cemail);

    
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
 include 'RegisterP.php'; 

 }
 ?>
 
      <div id = "divBox">
       </div> 
      
          