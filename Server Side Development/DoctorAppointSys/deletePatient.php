<?php

try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'DELETE FROM patient WHERE PatientID = :cId';
$result = $pdo->prepare($sql);
$result->bindValue(':cId', $_POST['Id']); 
$result->execute();
echo "You just deleted customer no: " . $_POST['Id'] ." \n click<A href='deleteform.html'> here</A> to go back ";
} 
catch (PDOException $e) { 
if ($e->getCode() == 23000) {
          echo "ooops couldnt delete as that record is linked to other tables click<A href='deleteform.html'> here</A> to go back ";
     }
} ?>
