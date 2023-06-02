
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

        /*$Email = $_SESSION["babySitterEmail"];*/

  $query="SELECT * FROM babysitter /*WHERE babySitterEmail= '$Email'*/ ";
  $result=mysqli_query($database, $query);
  $row = mysqli_fetch_array($result);
 
  if(!empty($row[3])) {
  
  $pic= "img/".$row[3];

    echo " <img src=$pic alt='Profile ' style='width:100%'> ";
   }
  else {
    echo " <img src = 'img/nullprofilepic.png' style='width:100%' alt='Profile Picture'>" ;
  }
  echo " <p>My Name is ".$row[0]." ".$row[1]."</p>";
  echo " <p> ".$row[9]." </p>";
  echo"<a href='https://api.whatsapp.com/send/?phone=".$row[6]."&text=hi&type=phone_number&app_absent=0'target='_blank'><img src='img/174879.png'style='width: 7% 'alt='whatsapp'>contact me </a></td>";
  


  ?>





<!--<img src="img/salempic.png" alt="Salem" style="width:100%">
 
 
  <p class="title">Salem ali</p>
  <p class="city">Saudi Arabia , Riyadh</p>
  <p>Hello!

    We are looking for a kind, caring and fun nanny to join our family to help with our two kids. We live in AlNakheel neighborhood and have two little ones - a 4 year old girl and 2 year old boy.</p>
  
-->
  <p><button><a href="VOFLviewRateAndRev.php">View My Rating And Review</a>
 
</div>
</div>



</body>


<body>
<footer>
  <p>Author: Sitterly Team</p>
  <a href="mailto:Sitterly@gmail.com">contact us</a><strong>&copy;</strong></p>
</footer>
</body>





</html>

<?php
    }
    ?>