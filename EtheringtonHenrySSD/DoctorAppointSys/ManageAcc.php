<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Manage Acc</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="ManageAcc.css">     
  <body>

           
 <div class="topnav">       
  <a href="AccountantMainMenu.html">Home</a>   
    <a href="Administration.html">Administration</a> 
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div>
  
    <?php


      if (isset($_POST['SUBMIT'])) {
 
       echo "<h2> Click <a href='tableAccountant.php'> here</a> to check tables </h2>";   
              
try { 
          
           
       $crevenue = $_POST['crevenue'];
       $cdoctorWages = $_POST['cdoctorWages'];
       $creceptionistWages = $_POST['creceptionistWages'];
       $caccountantWages = $_POST['caccountantWages'];
       $ctax = $_POST['ctax'];
       $cyear = $_POST['cyear'];
                                                                                            
    if ($crevenue  == ''  or  $cdoctorWages == '' or  $creceptionistWages  == '' or  $caccountantWages == '' or $ctax == '' or $cyear = ' ')
    {
        echo("<h1>You did not complete the insert form correctly <br> </h1>");
                  }

                  else{
            

              
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', '');  
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$sql = "INSERT INTO account (revenue,doctorWages,receptionistWages,accountantWages,tax,year) VALUES( :crevenue, :cdoctorWages, :creceptionistWages, :caccountantWages, :ctax,:cyear)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':crevenue',  $crevenue);
    $stmt->bindValue(':cdoctorWages', $cdoctorWages);
    $stmt->bindValue(':creceptionistWages', $creceptionistWages);
    $stmt->bindValue(':caccountantWages', $caccountantWages);
    $stmt->bindValue(':ctax', $ctax);
    $stmt->bindValue(':cyear', $year);
    
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
      echo("Account information has been registered correctly.");
 include 'ManageAcc.php'; 

 }
 ?>
 
      <div id = "divBox">
       </div> 
      
          