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
         <meta charset="utf-8">

        
         <link rel="stylesheet" href="stylextra.css" >
         <link rel="stylesheet" href="CSShome.css">
         <link rel="stylesheet" href="c2.css">

    </head>

    <body>
      
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





       <form method="post" >
        <br><br><br>
        <h2> please enter your Email and password to confirm deleting your account.</h2> <br><br>
        <div class="login">

        <input type="text" placeholder="Enter Email" name="email" required>
   
        <input type="password" placeholder="Enter Password" name="password" required>  
          <br><br><br>
          <input type="submit"  class="submitB submitBp" style="margin-left:3.5% ;"  value="confirm">
        </div>


        <div class="shadow"></div>
       
        </form>



        <footer>
          <p>Author: Sitterly Team</p>
          <a href="mailto:Sitterly@gmail.com">Sitterly@gmail.com</a><strong>&copy;</strong></p>
        </footer>




        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  
       if (!( $database = mysqli_connect( "localhost", "root", "" )))
           die( "<p>Could not connect to database</p>" );
   
       if (!mysqli_select_db( $database, "Sitterly" ))
           die( "<p>Could not open URL database</p>" );
     
           $email=$_POST['email'];  //correct
           $password=$_POST['password'];  
           $query="select * from parent WHERE email='$email'AND pass='$password'";  
           $result_parent=mysqli_query($database, $query);  
           if($row=mysqli_fetch_row($result_parent) ){
            $query="DELETE FROM parent WHERE email='$email '" ;

mysqli_query($database ,$query );
mysqli_close($database);
header("location:welcome.html");
              
         }
        
         
       else
       echo "<script>alert('Email or password is incorrect!')</script>";
     }
       
         
           
          
     
      
       
       ?>







      </body>





   
</html>
<?php
    }
    ?>
