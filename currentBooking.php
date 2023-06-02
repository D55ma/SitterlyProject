<?php session_start();
 if(!isset($_SESSION['ParentEmail']))
 // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
 header("Location:signin.php");

else
{?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styling.css">
    
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="tables.css" >

        <title>viewPro</title>
    </head>
    
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





  <h1>View current booking :</h1>
     <body><table class="content-table" id= "center">
    <br>
        <thead>

      <tr>
        <th scope="col"> Babysitter's Photo</th>
        <th scope="col">Babysitter's Name</th>
        <th scope="col">Date</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Type Of Service</th>
        <th scope="col"> Kid's name</th>
        <th scope="col"> Price</th>
        <th scope="col"> City</th>
        <th scope="col"> Contact</th>

         
      </tr>
    </thead>
    <tbody>
      


        <?php 



   
    
if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "Sitterly" ))
die( "<p>Could not open URL database</p>" );



$pemail=$_SESSION["ParentEmail"];
    $query1= "SELECT * FROM booking WHERE status= 'accepted' AND parentEmail='$pemail' ";  
        $result1=mysqli_query($database, $query1);
       # $currtime="Select Convert(Time, GetDate())"
        #$TIME =mysqli_query($database, $currtime)
   if ($result1) {
   while ($data = mysqli_fetch_row($result1)) {
    if ($data[6]>=date('Y-m-d')){
    if(!empty($data[3]))
    $pic="img/".$data[3];
    else $pic = "img/nullprofilepic.png";
    print("<tr>      
   <th scope='row'><p><img src=".$pic." alt='img' style='width:100%'></p>
   <td>".$data[2]."</td>
   <td>".$data[6]."</td>
   <td>".$data[7]."</td>
   <td>".$data[8]."</td>
   <td>".$data[5]."</td>
   <td>".$data[1]."</td>
   <td>".$data[9]."</td>
   <td>".$data[16]."</td>
   <td> <a href='https://api.whatsapp.com/send/?phone=966".$data[15]."&text=hi&type=phone_number&app_absent=0'target='_blank'><img src='img/174879.png'style='width: 7% 'alt='whatsapp'>contact me </a></td>
    
   
   </th></tr>");}}}
   

  mysqli_close($database);
   ?>

   </tbody>
   </table>
    



    



   <!-- <h1>View current bookings:</h1>


            
            <div class="nouf" >
            <div class="card" style="margin-left:15%;">
                <img src="img/IMG_7903.jpg" alt="pic" style="width:45%">
                <div>
                    <h3>7 March 2023 from 3 PM to 5 AM</h3>
                    <h1><b>Jane Doe</b></h1>
                    <a href="https://api.whatsapp.com/send/?phone=966505444348&text=hi&type=phone_number&app_absent=0" target="_blank"><img src="img/174879.png" style="width:5%" alt="whatsapp"> </a>
                    <p><img src="img/110.9-money-bag-icon-iconbunny.jpg" alt="pic" style="width:5%;">300 RS</p>
            </div> 
            </div>
            <div class="card">
                <img src="img/happy-arab-woman-hijab-portrait-smiling-girl-posing-studio-background_155003-31120.jpg" alt="pic" style="width:50%">
                <div>
                    <h3>7 March 2023 from 3 PM to 5 AM</h3>
                    <h1><b> Anne Smith</b></h1>
                    <a href="https://api.whatsapp.com/send/?phone=966505444348&text=hi&type=phone_number&app_absent=0" target="_blank"><img src="img/174879.png" style="width:5%" alt="whatsapp"> </a>
                    <p><img src="img/110.9-money-bag-icon-iconbunny.jpg" alt="pic" style="width:5%;">300 RS</p>
            </div> 
            </div>
            
            
        </div>-->


        <footer style="margin-top:5%;">
            <p>Author: Sitterly Team</p>
            <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>
          </footer>
   
</body>

       
        </html>
        <?php  }?>