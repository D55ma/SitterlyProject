
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
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="tables.css" >
        <title>offers-List</title>
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

    <h1>View offer list:</h1>
    <table class="content-table" id= "center">
    <br>
    
    <thead>

      <tr>
        <th scope="col"> img</th>
        <th scope="col">Babysitter Name</th>
        <th scope="col">price</th>
        <th scope="col">Duration</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Type Of Service</th>
        <th scope="col">bio</th>
        <th scope="col"> See my profile</th>
        <th scope="col">Accept/Reject</th>



         
      </tr>
    </thead>
    <tbody>
      
      <?php
  


  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Sitterly" ) )
  die( "<p>Could not open URL database</p>" );


  $pemail=$_SESSION["ParentEmail"];

$query="SELECT * FROM Booking  WHERE parentEmail='$pemail' ";
$result=mysqli_query($database, $query);


if ($result) {
   while ($data = mysqli_fetch_row($result)) {
    if($data[11]==null){
    if(!empty($data[3]))
    $pic="img/".$data[3];
    else $pic = "img/nullprofilepic.png";
       print("<tr>      
       <th scope='row'><p><img src=".$pic." alt='img' style='width:70px'></p>
       <td>".$data[2]."</td>
       <td>".$data[9]."<p>SR</p></td>
       <td>".$data[6]."</td>
       <td>".$data[7]."</td>
       <td>".$data[8]."</td>
       <td>".$data[5]."</td>
       <td>".$data[10]."</td>
       <td><a href='OFLviewPro.php?babySitterEmail".$data[12]."\' target='_blank';>See my profile</a></td>

       <td> <a href=\"acceptOffer.php?JobReqID=".$data[13]."\"><input class='submitB' type='submit' value='Book'>
       <a href=\"rejectOffer.php?JobReqID=".$data[13]."\"><input class='CancelB' type='submit' value='Reject'></tr>");
       /*if(isset($_post['reject']))
       mysqli_query($database ,"UPDATE Booking SET Status = 'reject' WHERE JobReqID='".$id."'");*/
       
   }
}}
else
echo "An error occured while completing your request.";

  ?>
  
    
    </tbody>
  </table>
    
<!--<div class ="nouf" >
        <div class="card" style="margin-left:15%;" >
            <img src="img/IMG_7904.JPG" alt="pic" style="width:60%">
            <div>
                <h4><b>Jane Doe</b></h4>
                <img src="img/Screen Shot 2565-09-25 at 7.52.14 PM.png" alt="pic"style="width:5%" ><span>4.9</span>
                <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%" ><span>400 SR</span>
                <img src="img/4185758.png" style="width:5%" ><span>3 Years</span>
                <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%"><span>Riyadh</span></div>
                <p>For me, babysitting is a gift, NOT a job! </p>
                <a href="offer1.html"><button id="d">view offer details</details></button></a>
                <a href="viewProfileBabySitter-1.html" target="_blank">See my profile</a>
                <a href="https://api.whatsapp.com/send/?phone=966505444348&text=hi&type=phone_number&app_absent=0" target="_blank"><img src="img/174879.png" style="width:5%" alt="whatsapp"> </a>
                <hr>
                <div >
                    <input class="submitB" type="submit" value=" Book  ">
                    <input class="CancelB" type="submit" value=" Reject">
                </div>
            </div>
       

        <div class="card" >
            <img src="img/IMG_7905 2.jpg"  alt="pic" style="width:60%">
            <div>
                <h4><b>Moliy Stone</b></h4> 
                <img src="img/Screen Shot 2565-09-25 at 7.52.14 PM.png" alt="pic"style="width:5%" ><span>4.5</span>   
                <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%"><span>450 SR</span>
                <img src="img/4185758.png" style="width:5%" ><span>5 Years</span>
                <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%" ><span>Riyadh</span></div>
                <p>It's nice to have a helping hand! </p>  
                <a href="offers2.html"><button id="d">view offer details</details></button></a>
                <a href="viewProfileBabySitter-1.html" target="_blank">See my profile</a>
                <a href="https://api.whatsapp.com/send/?phone=966505444348&text=hi&type=phone_number&app_absent=0" target="_blank"><img src="img/174879.png" style="width:5%" alt="whatsapp"> </a>
                <hr>
                <div >
                   
                </div>
        </div>
        
    

            </div>-->

            <footer style="margin-top:5%;">
                <p>Author: Sitterly Team</p>
                <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>
              </footer>
       
    </body>




</html>
<!--<a href=\"acceptOffer.php?id=".$data[12]."\"><input class='submitB' type='submit' value='Book'>
       <a href=\"rejectOfer.php?id=".$data[12]."\"><input class='CancelB' type='submit' value='Reject'>-->
       <!--<form method ='post' action='acceptOffer.php'><input class='submitB' type='submit' value='Book'></form>
       <form method ='post' action='rejectOfer.php'><input class='CancelB' type='submit' value='Reject'></form>-->
       <?php
    }
    ?>