<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Receptionist Validater</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="ReceptionistValidater.css">
  <body>
  
    <?php
    
    if(isset($_POST['submit1'])){
    
 $username = $_POST['username'];
 $password = $_POST['password'];

if($username == "John Doe" && $password == '123456')
{

   echo "<a href='ReceptionistMainMenu.html'><h2> Login </h2></a>";
}  

else
 {
   echo " <h2> You are not a member of this site </h2> ";
  }
    }

    
?>

<h1> Receptionist Login </h1>
 <a href='selectJob.html'><h3> Exit </h3></a>
                              
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