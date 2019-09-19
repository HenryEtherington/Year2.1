 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Accountant Table</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="TableAccountant.css">

       <body>
       
           
 <div class="topnav">       
  <a href="AccountantMainMenu.html">Home</a>   
    <a href="Administration.html">Administration</a> 
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div>


<?php
    try {
   
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM account';
$result = $pdo->query($sql); 

                                 
echo "<br /><b> <h1> Accountant: </h1> </br><br/><br />";
echo "<h2><table border=1>";
echo "<tr><th>Revenue</th>
<th>Doctor's Wages </th>
<th>Receptionist's Wages</th>
<th>Accountant's Wages</th>
<th>Tax </th>
<th> Year </th> </tr></h2>";

   

while ($row = $result->fetch()) {



echo '<tr><td>' . $row['Revenue'] . '</td><td>'. $row['DoctorWages'] .'</td><td>'. $row['ReceptionistWages'] . '</td><td>'. $row['AccountantWages'] . '</td><td>'.  $row['Tax'] . '</td><td>' . $row['Year'] . '</td></tr>';
}


} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}

 echo"<h2> Click<a href='ManageAccountsForm.php'> here</a> to go back </h2>";
?> 
        <div id = "divBox">
       </div>       
      </body>  