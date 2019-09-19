<?php
if (isset($_POST['submitdetails'])) { 
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT count(*) FROM patient where patientId = :cpatientId';
$result = $pdo->prepare($sql);
$result->bindValue(':cpatientId', $_POST['cpatientId']); 
$result->execute();
if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM patient where patientId = :cpatientId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cpatientId', $_POST['cpatientId']); 
    $result->execute();


    while ($row = $result->fetch()) { 
        echo $row['firstName'] . ' ' . $row['address'] . ' Are you sure you want to delete ??' . 
	  '<form action="deletePatient.php" method="post">
            <input type="hidden" name="id" value="'.$row['patientId'].'"> 
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

