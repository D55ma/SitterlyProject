<?php
    session_start();
       if(!isset($_SESSION['SitterEmail']))
    // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
    header("Location: signin.php");
else
{
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8" >
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="CSShome.css">
       
        
        <title>Edit</title>
        <link href="css/style.css" rel="stylesheet" >
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

 
    </head>

    <body class="gradient-custom-2">

      <div class="nouf2">


      <header>
    
    
            
    <nav class="container">
      <label for="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </label>
      <input type="checkbox" id="hamburger">
      <ul>
        <li><img class="img1" src="img/logo-circle.png" alt="logo" ></li>
        
        <li><a href="viewProfileBabysitter.php">My Profile</a></li>
        <li><a href="viewjobrequestlist.php">Job Requests</a></li>
        
        <li>
          <a href="#">
            <h3 class="pink">sitterly</h3>
            
          </a>
        </li>
        <li><a href="status.php">Status</a></li>
        <li><a href="currentJob.php">Current Jobs</a></li>
        <li><a href="previousJob.php">Previous Jobs</a></li>
        <li><a href="signOut.php">Log Out</a></li>
      </ul>
    </nav>
  </header>
    
    
    
        </div>
    
    
















        <?php
      
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );
    
       if ( !mysqli_select_db($database, "Sitterly" ) )
        die( "<p>Could not open URL database</p>" );

        $sitterEmail = $_SESSION["SitterEmail"];
     

      $query="SELECT * FROM babysitter WHERE email='$sitterEmail' ";
      $result=mysqli_query($database, $query);
      $row = mysqli_fetch_array($result);



 print('<div class="nouf">


        <section class="h-100 gradient-form" style="background-color: rgba(238, 238, 238, 0.559);">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg ">
                        <div class="card-body p-md-5 mx-md-4">

                            <h1>Update your information.</h1><hr><br>
                            <form method="post">

                              <label>First Name: *</label>
                                <div class="form-outline mb-4">
                                <input id="first" value="'.$row[0].'" class="form-control" placeholder="Ex:Ghaida" name="fname"  pattern =[a-zA-z]{3,20} title="please enter your name in corret format as: ( deema ) /please reduce the letters" required>
                                <label class="form-label" for="first"></label>
                                </div>
                                <label>Last Name: *</label> 
                                <div class="form-outline mb-4">
                                <input id="last" value="'.$row[1].'" class="form-control" placeholder="Ex:Aljaber" name="lname" pattern= [a-zA-z]{3,20} title="please enter your last name in correct format as: ( alsogaih ) /please reduce the letters" required>
                                <label class="form-label" for="last"></label>
                                </div>
                            
                               
                                <label>Password: *</label>  
                                <div class="form-outline mb-4">
                                <input type="password" id="password" value="'.$row[5].'" class="form-control" placeholder="********" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
                                least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  >
                                <label class="form-label" for="password">Must contain at 
                                least one number and one uppercase and lowercase letter, and at least 8 or more characters</label>
                                </div>
                                
                            
                                
                    
                                <label>Phone number: *</label>  
                                <div class="form-outline mb-4">
                                <input type="text" id="Phone-number" value="'.$row[6].'" class="form-control"  placeholder="532005041" name="phonenumber" pattern =[0-9]{9}  required>
                                <label class="form-label" for="Phone-number"></label>
                                </div>
                            
                                <div class="form-outline mb-4">
                                  
                                <label class="form-label" > </label>
                               
      
                                  <label>City: *</label><input type="text" value="'.$row[10].'" placeholder="Riyadh" class="form-control"  name="city" required>
                                  
                                </div>
                            
                            
                            
                                <div class="form-outline mb-4">
                                <textarea name="bio" rows="4" cols="36" required="required">  '.$row[9].'</textarea>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="myfile">Photo (optional)</label>
                                    <input type="file" name="profilePhotoFile"  id="myfile" class="form-control"  accept="image/*"/>
                                    </div>
                                    
                            <hr>
                            <p><input  type="submit"  value="Update" name="submit" style="    display: inline-block; align-items: center;
                                font-family: inherit;
                                font-weight: 500;
                                font-size: 16px;
                               padding: 0.7em 1.4em 0.7em 1.1em;
                              
                              
                                color: white;
                                
                                background:rgb(210, 182, 205);
                                border: none;
                            
                                letter-spacing: 0.05em;
                                border-radius: 20em;"> 
                           <a href= "viewprofileParent.html" > <input type="submit"  value="Cancel" name="cancel" style="  display: inline-block; align-items: center; font-family: inherit; font-weight: 500; font-size: 16px;
padding: 0.7em 1.4em 0.7em 1.1em;
color: white;

background:rgb(162, 189, 227);
border: none;

letter-spacing: 0.05em;
border-radius: 20em;
"> </a> </p> 
                           


                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
  </form>


  <footer>
    <p>Author: Sitterly Team</p>
    <a href="mailto:Sitterly@gmail.com">Sitterly@gmail.com</a><strong>&copy;</strong></p>
  </footer>');


   


  if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (!mysqli_select_db( $database, "Sitterly" ))
    die( "<p>Could not open URL database</p>" );
    $Fname=$_POST['fname'];  
    $Lname=$_POST['lname'];
    if(strlen($Fname) < 20 && strlen($Lname) < 20 ){ 
    if(filter_var(  $sitterEmail, FILTER_VALIDATE_EMAIL)){
    $phonenumber=$_POST['phonenumber']; 
    if(preg_match('/^[0-9]{10}+$/', $phonenumber))
      {

        $Fname=$_POST['fname'];  
        $Lname=$_POST['lname'];
     $phonenumber=$_POST['phonenumber']; 
     $pass=$_POST['password']; 
     $bio=$_POST['bio'];
     $city=$_POST['city'];
if(isset($_POST['profilePhotoFile']))
    { 
        $profilePhotoFile=$_POST['profilePhotoFile']; 
        $query = "UPDATE babysitter SET pass = '".$pass."', Fname = '".$Fname."', Lname = '".$Lname."',phone = '".$phonenumber."', photo = '".$profilePhotoFile."' , city = '".$city."', bio = '".$bio."'   WHERE email =  '$sitterEmail'"; 
    }
    else
    $query = "UPDATE babysitter SET pass = '".$pass."', Fname = '".$Fname."', Lname = '".$Lname."',phone = '".$phonenumber."',city = '".$city."', bio = '".$bio."'   WHERE email =  '$sitterEmail'"; 
    $result = mysqli_query($database, $query);
    if($result)

   echo"<script type='text/javascript'>
window.location.href = 'babysitter-home.html';
</script>";
     
    else  
       echo "<script>alert('an error occurred, could not edit profile.')</script>";  
 }
 else 
 echo "<script>alert('Invalid phone number format')</script>"; 

}
else
echo "<script>alert('Invalid email format')</script>"; 
}
else
echo "<script>alert('length of name should be less than or equal to 20 characters')</script>";    

}  



//DONT FORGET TO SET VALUES TO INPUT FEILDS 
   //header("location:babysitter-home.html");
?>





    </body>
    
</html>
<?php
    }
?>