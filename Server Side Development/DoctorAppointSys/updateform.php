<!DOCTYPE html>
<html lang='en'>
  <head>
      <title>.... </title>

<link rel="stylesheet" type="text/css" href="styles.css" />
   </head>
<?php
try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT count(*) FROM patient WHERE PatientID=:cid";

$result = $pdo->prepare($sql);
$result->bindValue(':cid', $_POST['id']); 
$result->execute();

    
    if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT * FROM patient where PatientID = :cpatientId';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cpatientId', $_POST['id']); 
    $result->execute();

    $row = $result->fetch() ;
    $id = $row['PatientID'];
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
<input type="hidden" name="ud_id" value="<?php echo $id; ?>">
First Name: <input type="text" name="ud_firstName" value="<?php if (isset($firstName)) echo $firstName; ?>"><br />
Last Name:  <input type="text" name="ud_lastName" value="<?php if (isset($lastName)) echo $lastName; ?>"><br />
Date of Birth: <input type="text" name="ud_DOB" value="<?php if (isset($DOB)) echo $DOB; ?>"><br />
Phone Number : <input type="text" name="ud_phoneNumber" value="<?php if (isset($phoneNumber))echo $phoneNumber ?>"><br />
Email : <input type="text" name="ud_email" value="<?php if (isset($email))echo $email ?>"><br />

<input type="Submit" value="Update">
</form>
</body>

</html>
