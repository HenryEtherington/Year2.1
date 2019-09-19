<?php
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'update patient set firstName=:cfirstName, lastName=:clastName , DOB=:cDOB, phoneNumber=:cphoneNumber , email=:cemail WHERE doctorId = :cdoctorId';
$result = $pdo->prepare($sql);
$result->bindValue(':cdoctortId', $_POST['doctorId']);      
$result->bindValue(':cfirstName', $_POST['firstName']);     
$result->bindValue(':clastName', $_POST['lastName']); 
$result->bindValue(':cDOB', $_POST['DOB']);     
$result->bindValue(':cphoneNumber', $_POST['phoneNumber']); 
$result->bindValue(':cemail', $_POST['email']);     


$result->execute();
     
//For most databases, PDOStatement::rowCount() does not return the number of rows affected by a SELECT statement.
     
$count = $result->rowCount();
if ($count > 0)
{
echo "You just updated customer no: " . $_POST['doctorId'] ."  click<a href='selectupdate.php'> here</a> to go back ";
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