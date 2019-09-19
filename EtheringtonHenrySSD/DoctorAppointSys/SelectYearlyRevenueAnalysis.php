 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Select Anaylsis</title>
     <meta charset='utf-8'>

  </head>
     <link rel="stylesheet" type="text/css" href="selectYearlyRevenueAnalysis.css">
    <body>
   
 <div class="topnav">       
  <a class="active" href="#">Home</a>   
   <a href="Patient.html">Patients</a>   
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>
           
     <div id= "Logo">
    </div>
   <div id = "divBox">
  </div>
  
   <form action="SelectYearlyRevenueAnalysisUpdate.php" method="post">                
      <div id="Back" >  
        <input type="submit" Style="height: 100px; width: 824px" name="submitdetails" value="Back" />
        </div> 
     </form>
  
   
 <?php

try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT count(year) FROM account where year = :cyear';
$result = $pdo->prepare($sql);
$result->bindValue(':cyear', $_POST['year']); 
$result->execute();
if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT year FROM account where year = :cyear';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cyear', $_POST['year']); 
    $result->execute();

echo "<h2><table border=1>";
echo "<tr><th>First Name:</th> </tr></h2>";
 

while ($row = $result->fetch()) { 
       echo '<tr><td>' . $row['year'] . '</td></tr>';    
   }
   echo '</table>';  

}
else {
      print "<h1> No rows matched the query. Click<a href='SelectYearlyRevenueAnalysisUpdate.php'> here</a> to go back </h1>";
    }} 
catch (PDOException $e) { 
$output = '<h1> Unable to connect to the database server: </h1>' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 

  }
        
?>

  