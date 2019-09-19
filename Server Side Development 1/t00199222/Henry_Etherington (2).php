<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Exercise2</title>
    <meta charset='utf-8'>


  </head>
  <body>

  
  <?php
  
  //Should be in textbox.
    $startNumber=1;
    $finishNumber=10;
    $addBy = 1;
  
     
        echo "<td>Start Number: $startNumber  Finish Number: $finishNumber Add By:  $addBy</td>"  ;
        /*<input type='button' Name Do Add Table Value<?php "Exercise2.php"   />  */
      
      for($i=1; $i-1<$finishNumber;$i++)
      {
       
         $total =  ($startNumber + $i) ;
        echo  " <table> <td>  <h1> Times Table </h1> </table>"; 
        echo   "<table> $i added by $startNumber  = <tr> $total </tr> </td> </table>"; // <br>
      //  echo   " $i added by $startNumber  </tr></th>" ;
        
        }
       
    ?>
  </body>
</html>