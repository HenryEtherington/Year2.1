<?php
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'update patient set firstName=:cfirstName, lastName=:clastName , DOB=:cDOB, phoneNumber=:cphoneNumber , email=:cemail WHERE patientId = :cpatientId';
$result = $pdo->prepare($sql);
$result->bindValue(':cpatientId', $_POST['ud_id']);      
$result->bindValue(':cfirstName', $_POST['ud_firstName']);     
$result->bindValue(':clastName', $_POST['ud_lastName']); 
$result->bindValue(':cDOB', $_POST['ud_DOB']);     
$result->bindValue(':cphoneNumber', $_POST['ud_phoneNumber']); 
$result->bindValue(':cemail', $_POST['ud_email']);     


$result->execute();
     
//For most databases, PDOStatement::rowCount() does not return the number of rows affected by a SELECT statement.
     
$count = $result->rowCount();
if ($count > 0)
{
echo "You just updated customer no: " . $_POST['ud_id'] ."  click<a href='selectupdate.php'> here</a> to go back ";
}
else
{
echo "nothing updated";
}
}
 
catch (PDOException $e) { 

$output = 'Unable to process query sorry : ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 

}
?>