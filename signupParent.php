<!DOCTYPE html> 
<html> 
<head>  
<meta charset = "utf-8">  
<link rel="stylesheet" type="text/css" href="c1.css"> </head> 
 
<body> 
<div class="container" onclick="onclick"> 
  <div class="top"></div> 
  <div class="bottom"></div> 
  <div class="center"> 
  <h2>Welcome Parents !</h2> 
   
   
   
<form class = "scrollbar" id="style-1" method="post"> 
   
     
    
  
    <label> First Name  
    <input type="text" placeholder="First Name" name="FnameP" pattern =[a-zA-z]{3,20} title="please enter your name in corret format as: ( deema ) /please reduce the letters"></label> 
  <br> 
    <label> Last Name 
    <input type="text" placeholder="Last Name" name="LnameP" pattern= [a-zA-z]{3,20} title="please enter your last name in correct format as: ( alsogaih ) /please reduce the letters" ></label> 
    <br> 
     
    <label> Email 
    <input type="text" placeholder="Enter Email" name="emailP" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"     title="please enter your email in correct format as(deema@gmail.com)"></label> 
    <br> 
 
 
    <label for="myfile"> Add a photo (optional)</label> 
  <input style="height:30px; padding: 5px;" type="file" id="myfile" name="profilePhotoFileP" accept="image/*" ><br> 
 
     
 
     <label> Password 
    <input type="password" placeholder="Enter Password" name="passwordP" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at   
             least one number and one uppercase and lowercase letter, and at least 8 or more characters" required 
    ></label> 
    <br> 
   
 
 
    <label> Address 
 
    <select id="city" name="cityP">  
    <option value="">Select City</option>  
    <option value="Ad Dawādimī">Ad Dawādimī</option>  
    <option value="Ad Dilam">Ad Dilam</option>  
    <option value="Afif">Afif</option>  
    <option value="Ain AlBaraha">Ain AlBaraha</option>  
    <option value="Al Arţāwīyah">Al Arţāwīyah</option>  
    <option value="Al Kharj">Al Kharj</option>  
    <option value="As Sulayyil">As Sulayyil</option>  
    <option value="Az Zulfī">Az Zulfī</option>  
    <option value="Marāt">Marāt</option>  
    <option value="HAil">Hail</option>  
    <option value="Jeddah">Jeddah</option>  
    <option value="Riyadh">Riyadh</option>  
    <option value="Sājir">Sājir</option>  
    <option value="shokhaibٍ">shokhaibٍ</option>  
    <option value="Tumayr">Tumayr</option>  
      </select>  
 
      <br>  
 
        <input type="text" placeholder="street" name="street" pattern=[a-zA-z]{3,25} title="please enter you street in correct format as ( alnakhil ) /or please reduce the letters"  > 
        <input type="number" placeholder="Zip-code" name="Zip-code"  pattern= [0-9]{5}  title="please enter your zipcode in 5 digits only"  > 
        </label> 
       
   
   
 
     
    <p class="mini" >By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p> 
 
    <a href="signupParent.php"> <button type="submit" class="submitB">Sign Up</button> 
    <a href ="welcome.php" ><button type="button" class="CancelB">Cancel</button> 
  
</form> 
</div> 
</div> 
 
 
<?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {   
      if (!( $database = mysqli_connect( "localhost", "root", "" ))) 
         die( "<p>Could not connect to database</p>" ); 
  
      if (!mysqli_select_db( $database, "Sitterly" )) 
         die( "<p>Could not open URL database</p>" ); 
         $FnameP=$_POST['FnameP'];   
         $LnameP=$_POST['LnameP']; 
         if(strlen($FnameP) < 20 && strlen(  $LnameP) < 20 ){ 
         $emailP=$_POST['emailP'];  
          
 
         $cityP=$_POST['cityP']; 
         $street=$_POST['street']; 
         $zipcode = $_POST['Zip-code']; 
         if (preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/', $street ) or  strlen($zipcode)==5){ 
 
           
          $querye = "SELECT * FROM parent WHERE email= '$emailP' ";  
          $query2= "SELECT * FROM babysitter WHERE email= '$emailP' ";  
          $resulte=mysqli_query($database,$querye);  
          $result2=mysqli_query($database,$query2);

if (mysqli_num_rows($resulte)==0 and mysqli_num_rows($result2)==0)  
          { 
 
if(filter_var( $emailP , FILTER_VALIDATE_EMAIL) ) 
           { 
            { 
         $FnameP=$_POST['FnameP'];   
         $LnameP=$_POST['LnameP']; 
         $emailP=$_POST['emailP'];  
          
         $passwordP=$_POST['passwordP'];  
         $profilePhotoFile=$_POST['profilePhotoFileP'];  
 
         $query="INSERT INTO parent(email, pass, Fname, Lname, photo,city,street,zipcode ) VALUES ('".$emailP."','".$passwordP."','".$FnameP."','".$LnameP."','".$profilePhotoFile."','".$cityP."','".$street."','".$zipcode."');"; 
            } 
 
if(mysqli_query($database, $query) ) 
         {  header("location: signin.php"); 
            } 
        else   
         {  echo "<script>alert('an error occurred, could not register.')</script>";  
          die(mysqli_error($database)); 
     } 
     } 
     else  
     echo "<script>alert('Invalid email format')</script>";  
     
    } 
 
    else  
    echo "<script>alert('Email exist enter valid/new email')</script>";  
     
 
  } 
  else 
  echo "<script>alert('invalid street/zipcode(must be 5-digit number')</script>";  
 
 
  } 
  else 
    echo "<script>alert('length of name should be less than or equal to 20 characters')</script>";     
     
} 
    
 ?> 
 
 
 
 
 
 
</body> 
</html>