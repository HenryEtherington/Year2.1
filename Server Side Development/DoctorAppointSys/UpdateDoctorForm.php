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

$sql="SELECT count(*) FROM doctor WHERE doctorId=:cdoctorId";

$result = $pdo->prepare($sql);
$result->bindValue(':cdoctorId', $_POST['doctorId']); 
$result->execute();

    
    if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM doctor where doctorId = :cdoctorId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cdoctorId', $_POST['doctorId']); 
    $result->execute();

    $row = $result->fetch() ;
    $doctorId = $row['DoctorID'];
	$firstName= $row['FirstName'];   
	$lastName= $row['LastName'];
    $DOB= $row['DOB'];   
    $phoneNumber= $row['PhoneNumber'];
    $email = $row['Email'];	  
   
}

else {
      print "No rows matched the query. try again click<a href='selectDoctorUpdate.php'> here</a> to go back";
    }} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 
}

?>

<form action="updatedDoctor.php" method="post">
<input type="hidden" name="doctorId" value="<?php echo $doctorId; ?>">
First Name: <input type="text" name="firstName" value="<?php if (isset($firstName)) echo $firstName; ?>"><br />
Last Name:  <input type="text" name="lastName" value="<?php if (isset($lastName)) echo $lastName; ?>"><br />
Date of Birth: <input type="text" name="DOB" value="<?php if (isset($DOB)) echo $DOB; ?>"><br />
Phone Number : <input type="text" name="phoneNumber" value="<?php if (isset($phoneNumber))echo $phoneNumber ?>"><br />
Email : <input type="text" name="email" value="<?php if (isset($email))echo $email ?>"><br /> 

   <input type="Submit" value="Update">
  </form>
 </body>
</html>
