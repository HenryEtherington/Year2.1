   <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Delete Doc</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="deleteD.css">     
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

          <div id = "divBox">
       </div>

<?php

if (isset($_POST['submitdetails'])) { 
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT * FROM doctor where DoctorID = :cdoctorId';
$result = $pdo->prepare($sql);
$result->bindValue(':cdoctorId', $_POST['doctorId']); 
$result->execute();
$result->execute();
if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM doctor where DoctorID = :cdoctorId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cdoctorId', $_POST['doctorId']);             
    $result->execute();
  
echo "<h2><table border=1>";
echo "<tr><th>First Name:</th>
<th>Email: </th> </tr></h2>";
 

    while ($row = $result->fetch()) { 
        echo '<tr><td>' . $row['FirstName'] . '</td><td>'. $row['Email'] . '</td></tr>';
	  echo' <h1> <form action="deleteDoctor.php" method="post">
            <input type="hidden" name="doctorId" value="'.$row['DoctorID'].'"> 
            <input type="submit" value="yes delete" Style="height: 50px; width: 825px" name="delete">
           </h1> 
        </form>';

         }                  
     echo '</table>';         
}
else {
      print "<h2> No rows matched the query. Click<a href='DeleteDoctorForm.php'> here</a> to go back </h2>";
    }} 
catch (PDOException $e) { 
$output = '<h1> Unable to connect to the database server: </h1>' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
}
?>
    

