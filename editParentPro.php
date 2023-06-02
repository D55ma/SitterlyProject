<?php 
    session_start();

    // Check if the user has already logged in
    if(!(isset($_SESSION['ParentEmail'])))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location:signin.php");

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
                <li><img class ="img1"src="img/logo-circle.png" alt="logo" ></li>
                <li><a href="viewprofileParent.html">My Profile</a></li>
                <li><a href="view-offer-list.html">Offers List</a></li>
                <li>
                    <a href="#">
                      <h3 class="pink">sitterly</h3>
                     
                    </a></li>
                <li><a href="PostJobrequest0.html">Post Job Request</a></li>
               
              
                
              <li><a href="view-cur-booking-1.html">Current Booking</a></li>
                <li><a href="previosbooking.html">Previous Jobs</a></li>
                <li><a href="welcome.html">Log Out</a></li>
              </ul>
            </nav>
          </header>
    
    
    
        </div>
    
    
















        <?php
      
if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );
    
       if ( !mysqli_select_db($database, "Sitterly" ) )
        die( "<p>Could not open URL database</p>" );

        $parentEmail = $_SESSION["ParentEmail"]; 
     

      $query="SELECT * FROM parent WHERE email='$parentEmail' ";
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
                                <input id="first" class="form-control" placeholder="Ex:Ghaida"  value="'.$row[2].'"name="fname" pattern =[a-zA-z]{3,20} title="please enter your name in corret format as: ( deema ) /please reduce the letters"   required>
                                <label class="form-label" for="first"></label>
                                </div>
                                <label>Last Name: *</label> 
                                <div class="form-outline mb-4">
                                <input id="last" class="form-control" placeholder="Ex:Aljaber" name="lname" value="'.$row[3].'" pattern= [a-zA-z]{3,20} title="please enter your last name in correct format as: ( alsogaih ) /please reduce the letters" required>
                                <label class="form-label" for="last"></label>
                                </div>
                            
                               
                                <label>Password: *</label>  
                                <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" placeholder="********" name="password" value="'.$row[1].'" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at 
                                least one number and one uppercase and lowercase letter, and at least 8 or more characters" required  >
                                <label class="form-label" for="password">Must contain at 
                                least one number and one uppercase and lowercase letter, and at least 8 or more characters</label>
                                </div>
                                
                            
                                
                    
                            
                                <div class="form-outline mb-4">
                                  
                                <label class="form-label" > </label>
                                 <p>Address</p>
      
                                  <label>City: *</label><input type="text" placeholder="Riyadh"  value="'.$row[5].'" class="form-control"  name="city" required>
                                  <label>Street: *</label><input type="text" placeholder="Hitten" class="form-control"  value="'.$row[6].'" name="street" required>
                                  <label>Zip-code(Five digit zip code"): *</label><input type="text" placeholder="123421"  value="'.$row[7].'" class="form-control" name="zipcode" " pattern="[0-9]{5}" title="Five digit zip code" required>
                                </div>
                            
                            
                            
                               

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="myfile">Photo (optional)</label>
                                    <input type="file" id="myfile" class="form-control" name="profilePhotoFile" accept="image/*"/>
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
    if(filter_var(  $parentEmail, FILTER_VALIDATE_EMAIL)){
    
    

        $Fname=$_POST['fname'];  
        $Lname=$_POST['lname'];
     $pass=$_POST['password']; 
     $city=$_POST['city']; 
     $street=$_POST['street']; 
     $zipcode=$_POST['zipcode']; 

     if(isset($_POST['profilePhotoFile']))
     { 
         $profilePhotoFile=$_POST['profilePhotoFile']; 
         $query = "UPDATE parent SET pass = '".$pass."', Fname = '".$Fname."', Lname = '".$Lname."', photo = '".$profilePhotoFile."' , city = '".$city."', street = '".$street."'  , zipcode = '".$zipcode."'  WHERE email =  '$parentEmail'"; 
     }
     else
     $query = "UPDATE parent SET pass = '".$pass."', Fname = '".$Fname."', Lname = '".$Lname."',  city = '".$city."', street = '".$street."'  , zipcode = '".$zipcode."'  WHERE email =  '$parentEmail' "; 
  
    $result = mysqli_query($database, $query);
    if($result)
    {

        echo"<script type='text/javascript'>
        window.location.href = 'parents-home.php';
        </script>";
    }   
     
    else  
       echo  $query;// "<script>alert('an error occurred, could not edit profile.')</script>";  
 


}
else
echo "<script>alert('Invalid email format')</script>"; 
}
else
echo "<script>alert('length of name should be less than or equal to 20 characters')</script>";    

}  
?>





    </body>
    
</html>
<?php
    }
    ?>