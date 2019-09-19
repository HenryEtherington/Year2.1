<?php
if (isset($_POST['submitdetails'])) { 
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT count(*) FROM patient where PatientID = :cId';
$result = $pdo->prepare($sql);
$result->bindValue(':cId', $_POST['cId']); 
$result->execute();
if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM patient where PatientID = :cId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cId', $_POST['cId']);             
    $result->execute();


    while ($row = $result->fetch()) { 
        echo $row['FirstName'] . ' ' . $row['Email'] . ' Are you sure you want to delete ??' . 
	  '<form action="deletePatient.php" method="post">
            <input type="hidden" name="Id" value="'.$row['PatientID'].'"> 
            <input type="submit" value="yes delete" name="delete">
        </form>';

                      }
}
else {
      print "No rows matched the query.";
    }} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}
}
?>

