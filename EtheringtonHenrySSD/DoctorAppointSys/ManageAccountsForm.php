 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Manage Accounts</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="ManageAccountsForm.css">
  <body>
       
   <div class="topnav">       
    <a href="AccountantMainMenu.html">Home</a>  
     <a class="active" href="Administration.html">Administration</a>  
      <a href="selectJob.html">Exit </a>   
       </div>
           
   <div id= "Logo">
    </div>

 <form action="ManageAcc.php" method="post">  
   <h1>Revenue: <input type="text" Style="height: 50px; width: 700px"name="crevenue" 
        value = "<?PHP if (isset($crevenue)) {echo $crevenue;} ?>"><br>
        Doctor's Wages: <input type="text" Style="height: 50px; width: 605px" name="cdoctorWages" ><br>
         Receptionist's Wages: <input type="text" Style="height: 50px; width: 530px" name="creceptionistWages" ><br>
          Accountant's Wages: <input type="text" Style="height: 50px; width: 541px" name="caccountantWages"><br>
           Tax: <input type="text" Style="height: 50px; width: 767px" name="ctax" > <br>
             Year: <input type="text" Style="height: 50px; width: 753px" name="cyear" > <br> <br>       
        
          <input type="submit" Style="height: 150px; width: 837px" name="SUBMIT" value="SUBMIT" />
         </h1>      
        <div id = "divBox">
       </div> 

        </form>    
       </body>
      </html>
