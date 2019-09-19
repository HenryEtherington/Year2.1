 <form action="RegisterD.php" method="post">  

        First Name: <input type="text" name="cfirstName" 
        value = "<?PHP if (isset($cfirstName)) {echo $cfirstName;} ?>"><br>
        Last Name: <input type="text" name="clastName" ><br>
        Date of birth <input type="text" name="cDOB" ><br>
        Phone Number<input type="text" name="cphoneNumber"><br>
        Email <input type="text" name="cemail" ><br>
        
        
        <input type="submit" name="SUBMIT" value="SUBMIT" />

        </form>    
         </body>
          </html>
