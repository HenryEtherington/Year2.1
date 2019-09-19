<!DOCTYPE html>
<html lang='en'>
  <head>
      <title>Update Patient</title>

<link rel="stylesheet" type="text/css" href="styles.css" />
   </head>
<?php
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT count(*) FROM patient WHERE patientId=:cpatientId";

$result = $pdo->prepare($sql);
$result->bindValue(':cpatientId', $_POST['patientId']); 
$result->execute();

    
    if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM patient where patientId = :cpatientId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cpatientId', $_POST['patientId']); 
    $result->execute();

    $row = $result->fetch() ;
    $patientId = $row['PatientID'];
	$firstName= $row['FirstName'];   
	$lastName= $row['LastName'];
    $DOB= $row['DOB'];   
    $phoneNumber= $row['PhoneNumber'];
    $email = $row['Email'];	  
   
}

else {
      print "No rows matched the query. try again click<a href='selectupdate.php'> here</a> to go back";
    }} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}

?>

<form action="updated.php" method="post">
<input type="hidden" name="patientId" value="<?php echo $patientId; ?>">
First Name: <input type="text" name="firstName" value="<?php if (isset($firstName)) echo $firstName; ?>"><br />
Last Name:  <input type="text" name="lastName" value="<?php if (isset($lastName)) echo $lastName; ?>"><br />
Date of Birth: <input type="text" name="DOB" value="<?php if (isset($DOB)) echo $DOB; ?>"><br />
Phone Number : <input type="text" name="phoneNumber" value="<?php if (isset($phoneNumber))echo $phoneNumber ?>"><br />
Email : <input type="text" name="email" value="<?php if (isset($email))echo $email ?>"><br /> 

   <input type="Submit" value="Update">
  </form>
 </body>
</html>
