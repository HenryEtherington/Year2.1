    
    <?php

    
        echo "Sup";


      if (isset($_POST['SUBMIT'])) {
      echo"seds";                   
try { 

       $cfirstName = $_POST['cfirstName'];
       $clastName = $_POST['clastName'];
       $cDOB = $_POST['cDOB'];
       $cphoneNumber = $_POST['cphoneNumber'];
       $cemail = $_POST['cemail'];
                                                                                            
    if ($cfirstName == ''  or $clastName == '' or $cDOB == '' or $cphoneNumber == '' or $cemail == '')
    {
        echo("You did not complete the insert form correctly <br> ");
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
    /*header("location:RegisterForm.php"); */
 
    }
} 
catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
 } 
 
 }
else {
  echo"ss";
 include 'RegisterPatientForm.php'; 

 }
 ?>

      