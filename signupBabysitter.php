<!DOCTYPE html>  
  
 <html>  
 <head> <link rel="stylesheet" type="text/css" href="c1.css">  
</style> 
 
 
</head>  
 <body>  
 <div class="container" onclick="onclick">  
   <div class="top"></div>  
   <div class="bottom"></div>  
   <div class="center">  
   <h2>Welcome Sitters !</h2>  
 <form action="#" class = "scrollbar" id="style-1" method="post">  
     
    
     <label>First Name  
     <input type="text" placeholder="First Name" name="Fname" pattern =[a-zA-z]{3,20} title="please enter your name in corret format as: ( nouf ) /please reduce the letters"   required  ></label><br>  
     
     <label>Last Name  
     <input type="text" placeholder="Last Name" name="Lname" pattern= [a-zA-z]{3,20} title="please enter your last name in correct format as: ( alrayes ) /please reduce the letters" required ></label>  
     <br>  
   
   
     <label>ID <input type="text" placeholder="1212321490" name="IDB" pattern= [0-9]{10} title="please enter your ID in correct format as: (1125432312) "required ></label>  
       <br>    
   
       <div class="content">  
               <div class="radio">  
                <label for="gender">Gender:</label>  
                   <input type="radio" name="gender" id="gender" value="male" required>  
                   <label for="male">male</label>  
                   <input type="radio" name="gender" id="gender" value="female" required>  
                   <label for="female">female</label>  
               </div></div>  
             
     
     <label>Email <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"     title="please enter your email in correct format as(nouf@gmail.com)"  required ></label>  
     <br>  
   
   
      <label>Password <input type="password" placeholder="Enter Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at   
             least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ></label>  
     <br>  
       
    
     <label>Phone number<input type="text" placeholder="532005041" name="phonenumber" pattern =[0-9]{9}  title="Please enter your phone number in this format(532005041) " required></label>  
         <br>  
       
   
   
     <!--check database-->  
   <label for="birthday">Age</label><br>  
   <input type="number" id="birthday" name="birthday" required>  
   <br>  
     
     <select id="city" name="city">  
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
     <option value="Riyadh">Riyadh</option>  
     <option value="Sājir">Sājir</option>  
     <option value="shokhaibٍ">shokhaibٍ</option>  
     <option value="Tumayr">Tumayr</option>  
       </select>  
   
   
   
       <br>  
   
   
     
     <label  for="myfile"> Add a photo (optional)</label>  
     <input style="height:30px; padding: 5px;" type="file" id="myfile" name="profilePhotoFile" accept="image/*"><br>  
   
        
   
     <h4>Write a bio</h4>  
     <p class="mini">Now's the time to show off your personality! Tell families a bit about yourself, why you love being a sitter and what sets you apart. (Note: your profile will be public, so don't share any personal details like your contact information, last name or links to your portfolio or social profiles.)</p>  
 <textarea name="bio" rows="4" cols="36">Years of experience , education , languages , skills etc..</textarea>  
   
     <p class = "mini">By creating an account you agree to our <a href="#" >Terms & Privacy</a>.</p>


<a href="signupsitter.php"><button type="submit" class="submitB">Sign Up</button></a> 
 
<a href ="homepage.html" ><button type="button" class="CancelB">Cancel</button></a>  
         
  <footer>  
   <p class="mini">Author: Sitterly Team  
     <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>  
 </footer>  
     
 </form>  
   
 </div>  
 </div>  
   
  
 
 
   
   
 
 
<?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {   
      if (!( $database = mysqli_connect( "localhost", "root", "" ))) 
         die( "<p>Could not connect to database</p>" ); 
  
      if (!mysqli_select_db( $database, "Sitterly" )) 
         die( "<p>Could not open URL database</p>" ); 
 
 
         $Fname=$_POST['Fname'];   
         $Lname=$_POST['Lname']; 
         if(strlen($Fname) < 20 && strlen(  $Lname) < 20 ){ 
 
$ID=$_POST['IDB']; 
         if(preg_match('/^[0-9]{10}+$/', $ID) ){ 
 
 
         $email=$_POST['email'];  
         /* 
         $emailQuery = "SELECT * FROM parent where  email= '$email' ";  
         $emailQuery2 = "SELECT * FROM babysitter where  email= '$email' ";  
 
         if(!($result= mysqli_query($database, $emailQuery ) )   and !($result2= mysqli_query($database, $emailQuery2 )) ){*/ 
 
          $querye = "SELECT * FROM parent WHERE email= '$email' "; 
          $query2= "SELECT * FROM babysitter WHERE email= '$email' "; 
          $resulte=mysqli_query($database,$querye); 
          $result2=mysqli_query($database,$query2); 
 
          if (mysqli_num_rows($resulte)==0 and mysqli_num_rows($result2)==0) 
          { 
             
             
          
 
         if(filter_var(  $email , FILTER_VALIDATE_EMAIL)){ 
 
          $birth=$_POST['birthday'] ; 
        if ($_POST['birthday']>18 || $_POST['birthday'] < 65){ 
 
 
         $phonenumber=$_POST['phonenumber'];  
         if(preg_match('/^[0-9]{9}+$/', $phonenumber) ){ 
           { 
         $Fname=$_POST['Fname'];   
         $Lname=$_POST['Lname']; 
         $ID=$_POST['IDB']; 
         $email=$_POST['email'];  
         $phonenumber=$_POST['phonenumber'];  
         $pass=$_POST['pass'];  
         $gender=$_POST['gender']; 
         $birth=$_POST['birthday'] ; 
         $profilePhotoFile=$_POST['profilePhotoFile'];  
         $bio=$_POST['bio']; 
         $city=$_POST['city']; 
         $query="INSERT INTO babysitter(Fname,Lname,NaID,gender,email,pass,phone,birth,photo,bio,city ) VALUES ('".$Fname."','".$Lname."','".$ID."','".$gender."','".$email."','".$pass."','".$phonenumber." ','".$birth. "','".$profilePhotoFile." ',' ".$bio."  ','".$city."' );"; 
           } 
 
        if(mysqli_query($database, $query) ) 
         {  echo"<script type='text/javascript'> 
          window.location.href = 'signin.php'; 
          </script>"; 
 
 
            } 
        else   
         {  echo "<script>alert('an error occurred, could not register.')</script>";  
          die(mysqli_error($database)); 
     } 
 
     } 
     else  
     echo "<script>alert('Invalid phone number format')</script>";  
        } 
        else  
     echo "<script>alert('please enter age between 18-65')</script>";  
 
         } 
    else 
    echo "<script>alert('Invalid email format')</script>";  
        } 
        else 
        echo "<script>alert('email exist please re-enter new/valid email')</script>";  
 
 
         } 
  else 
  echo "<script>alert('ID should contain only numbers/length equals to 10')</script>";   
    } 
  else 
    echo "<script>alert('length of name should be less than or equal to 20 characters')</script>";     
   
   }  
 ?> 
 
              
              
              
            </body>  
            </html>