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

  <link rel="stylesheet" href="profiles.css">
  <link rel="stylesheet" href="CSShome.css">
  <link rel="stylesheet" href="styling.css" >
  <link rel="stylesheet" href="c2.css" >
<title>  Babysitter's Profile </title>
</head>
<body>

  <div class="nouf2" >
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

    <h1>View profile:</h1>
<div class="nouf">
<div class="card" style="margin-left: 30%;">


<?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

   if ( !mysqli_select_db($database, "Sitterly" ) )
    die( "<p>Could not open URL database</p>" );

    $sitterEmail = $_SESSION["SitterEmail"];

  $query="SELECT * FROM babysitter WHERE email= '$sitterEmail' ";
  $result=mysqli_query($database, $query);
  $row = mysqli_fetch_array($result);
 
  if(!empty($row[8])) {
  
  $pic= "img/".$row[8];

    echo " <img src=$pic alt='Profile ' style='width:100%'> ";
   }
  else {
    echo " <img src = 'img/nullprofilepic.png' style='width:100%' alt='Profile Picture'>" ;
  }
  
  //cheack if not null, edit size
  //echo "<div class='profilePic'> <img src= 'images/" .$row[6]. "' class= 'profile' alt='Pet Picture'> </div>";

  





//<img src="depositpho8tos_94394356-stock-photo-passport-photo-of-a-blond.jpeg" alt="Salem" style="width:100%"> //
 
  echo"<p class='title'>$row[0] $row[1]</p>";

  echo"<p class='city'> $row[10]</p>";
  echo"<p>$row[9]</p>"
  
  ?>
  <p><button><a href="editBabysitterPro.php">Edit Profile</a></button> <button><a href="viewRateAndRev.php">View my rates and reviews Profile</a></button>  <button  style="background:rgb(201, 25, 25);"><a href="deleteBabysitterPro.php">Delete Profile</a></button></p>
 
 
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