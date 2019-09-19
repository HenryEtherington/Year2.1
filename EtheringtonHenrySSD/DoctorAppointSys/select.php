 <?php

try { 
$pdo = new PDO('mysql:host=localhost;dbname=doctorappointsys; charset=utf8', 'root', ''); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'SELECT count(firstName) FROM patient where firstName = :cfirstName';
$result = $pdo->prepare($sql);
$result->bindValue(':cfirstName', $_POST['firstName']); 
$result->execute();
if($result->fetchColumn() > 0) 
{
    $sql = 'SELECT firstName FROM patient where firstName = :cfirstName';
    $result = $pdo->prepare($sql);
    $result->bindValue(':cfirstName', $_POST['firstName']); 
    $result->execute();

while ($row = $result->fetch()) { 
      echo $row['firstName'] . '<br>';
   }
}
else {
      print "No rows matched the query.";
    }} 
catch (PDOException $e) { 
$output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine(); 

  }
  
?>