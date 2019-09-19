<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Receptionist Validater</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="AccountantValidater.css">
  <body>
  
    <?php
    
    if(isset($_POST['submit1'])){
    
 $username = $_POST['username'];
 $password = $_POST['password'];

if($username == "Jane Doe" && $password == '67891011')
{

   echo "<a href='Accountant.html'><h1> Press me </h1></a>";
}  

else
 {
   echo " <h1> You are not a member of this site </h1> ";
  }
    }

    
?>

  <form name="form1" method ="post" action = "#">      
    <div id ="UserName">
     <input type = "text" value = "username" Style="height: 150px; width: 1000px"    name="username">
      </div>
     
     <div id ="Password"> 
      <input type = "text" value = "password"  Style="height: 150px; width: 1000px"  name="password">
         </div>
    
    <div id="Login">
      <input type = "submit" Style="height: 50px; width: 1000px" name ="submit1" value="login">
       </div>
        </form>    
    
     <div id="divBox">
    </div>   
  </body>
</html>