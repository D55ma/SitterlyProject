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
<html lang="English"> 
<head>

  <link rel="stylesheet" href="profiles.css">
  <link rel="stylesheet" href="styling.css" >
  <link rel="stylesheet" href="c2.css" >

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
                <li><a href="viewProfileParent.php">My Profile</a></li>
                <li><a href="viewOfferList.php">Offers List</a></li>
                <li>
                    <a href="#">
                      <h3 class="pink">sitterly</h3>
                     
                    </a></li>
                <li><a href="jobReq.php">Post Job Request</a></li>
              <li><a href="currentBooking.php">Current Booking</a></li>
                <li><a href="previousBooking.php">Previous Booking</a></li>
                <li><a href="signOut.php">Log Out</a></li>
              </ul>
            </nav>
          </header>



    </div>




    <h1>View profile: </h1>
       
<div class= "nouf">


<div class="card" style="margin-left: 30%;">

<?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

   if ( !mysqli_select_db($database, "Sitterly" ) )
    die( "<p>Could not open URL database</p>" );

    $ParentEmail = $_SESSION["ParentEmail"];

  $query="SELECT * FROM parent WHERE email= '$ParentEmail' ";
  $result=mysqli_query($database, $query);
  $row = mysqli_fetch_array($result);
 
  if(!empty($row[4])) {
  
  $pic= "img/".$row[4];

    echo " <img src=$pic alt='Profile ' style='width:100%'> ";
   }
  else {
    echo " <img src = 'img/nullprofilepic.png' style='width:100%' alt='Profile Picture'>" ;
  }
  
  //cheack if not null, edit size
  //echo "<div class='profilePic'> <img src= 'images/" .$row[6]. "' class= 'profile' alt='Pet Picture'> </div>";

  






 
  echo"<p class='title'>$row[2] $row[3]</p>";

  echo"<p class='city'> $row[5]</p>";

  ?>





<!--<img src="img/salempic.png" alt="Salem" style="width:100%">
 
 
  <p class="title">Salem ali</p>
  <p class="city">Saudi Arabia , Riyadh</p>
  <p>Hello!

    We are looking for a kind, caring and fun nanny to join our family to help with our two kids. We live in AlNakheel neighborhood and have two little ones - a 4 year old girl and 2 year old boy.</p>
  
-->
  <p><button><a href="editParentPro.php">Edit Profile</a></button> <button  style="background:rgb(201, 25, 25);"><a href="deleteParentPro.php">Delete Profile</a></button> </p>
 
</div>
</div>

<footer>
  <p>Author: Sitterly Team</p>
  <a href="mailto:Sitterly@gmail.com">contact us</a><strong>&copy;</strong></p>
</footer>

</body>








</html>


<?php
    }
    ?>

      <!-- <p> <a href="edit.html">Edit Profile</a></p>

         <a href="delete.html">Delete Profile</a></body> </p>-->