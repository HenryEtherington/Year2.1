 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Register Patient</title>
    <meta charset='utf-8'>

  </head>
  
   <link rel="stylesheet" type="text/css" href="RegisterPatientForm.css">
  <body>
       
 <div class="topnav">       
  <a href="ReceptionistMainMenu.html">Home</a>   
   <a href="Patient.html" >Patients</a>    
    <a href="Doctor.html">Doctors</a> 
     <a href="Appointment.html">Appointments</a>
      <a href="selectJob.html">Exit</a> 
       </div>
           
   <div id= "Logo">
    </div>

 <form action="RegisterP.php" method="post">  
   <h1>First Name: <input type="text" Style="height: 50px; width: 661px"name="cfirstName" 
        value = "<?PHP if (isset($cfirstName)) {echo $cfirstName;} ?>"><br>
        Last Name: <input type="text" Style="height: 50px; width: 666px" name="clastName" ><br>
        Date of birth: <input type="text" Style="height: 50px; width: 638px" name="cDOB" ><br>
        Phone Number: <input type="text" Style="height: 50px; width: 607px" name="cphoneNumber"><br>
        Email: <input type="text" Style="height: 50px; width: 733px" name="cemail" >  <br> <br> <br>        
        
          <input type="submit" Style="height: 150px; width: 837px" name="SUBMIT" value="SUBMIT" />
         </h1>      
        <div id = "divBox">
       </div> 

        </form>    
       </body>
      </html>
