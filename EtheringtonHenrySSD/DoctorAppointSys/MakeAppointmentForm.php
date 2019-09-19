 <!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Make appointment</title>
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

 <form action="RegisterApp.php" method="post">  
   <h1>Time: <input type="text" Style="height: 50px; width: 744px"name="ctime" 
        value = "<?PHP if (isset($ctime)) {echo $ctime;} ?>"><br>
        Date: <input type="text" Style="height: 50px; width: 750px" name="cdate" ><br>
         Room: <input type="text" Style="height: 50px; width: 733px" name="croom" ><br>
          Room Status: <input type="text" Style="height: 50px; width: 639px" name="croomStatus"><br>
           Patient ID: <input type="text" Style="height: 50px; width: 673px" name="cpatientId" >  <br>
            Doctor ID: <input type="text" Style="height: 50px; width: 677px" name="cdoctorId" >  <br> <br>   
         
          <input type="submit" Style="height: 150px; width: 837px" name="SUBMIT" value="SUBMIT" />
         </h1>      
        <div id = "divBox">
       </div> 

        </form>    
       </body>
      </html>
