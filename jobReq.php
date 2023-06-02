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
<title>Manage Posts </title>

<link rel="stylesheet" type="text/css" href="c2.css">
<link rel="stylesheet" type="text/css" href="styling.css">

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


        <h1>Manage posts:</h1>
  <div class="nouf" style="margin-top:9%;" >
<a  href="postJobReq.php"><img src="img/D3378D0F-1B43-4FE6-9DB7-33D7C22406F5.JPEG" width="200px" alt="edit" height="200px" class="icon1" style="margin-left:250%;" ></a></label>
<a  href="managePosts.php"> <img src="img/16FE0F9A-7B35-4AE1-8208-198FEECAE026.JPEG" width="200px" alt="add" height="200px" class="icon2" style="margin-left:260%;" ></a>
</div>



<footer style="margin-top: 10%;">
    <p>Author: Sitterly Team</p>
    <a href="mailto:Sitterly@gmail.com">contact us</a><strong>&copy;</strong></p>
  </footer>





</body>
</html>
<?php
    }
    ?>