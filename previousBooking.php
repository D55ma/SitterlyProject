<?php
    session_start();
    if(!isset($_SESSION['ParentEmail']))
    // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
    header("Location:signin.php");
else
{
?>
<!DOCTYPE html>
<html>

    <head>
        <title>previous booking </title>
<link rel="stylesheet" href="styleprev.css" type="text/css">
<link rel="stylesheet" href="styling.css">
<link rel="stylesheet" href="CSShome.css">
<link rel="stylesheet" href="c2.css">
<link rel="stylesheet" href="tables.css" >
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
    
    <!--
        </div>
    

        <h1>previous bookings:</h1>
       
       
       

       alot of recs in CSS<div class="gradient-border" id="box">
    
        <ul>
            <li>  Child's name :</li>
            <li> appontment date :</li>
            <li>  duration:</li>
            <li>price : </li>
            <li>Babysitter'name: </li>
            <li>Type of servi
     ce </li>
    

        </ul>-->
        <h1>View previous bookings:</h1>
        <table class="content-table" id= "center">
    <br>
        <thead>

      <tr>
        <th scope="col"> Babysitter's Photo</th>
        <th scope="col">Babysitter's Name</th>
        <th scope="col">Date</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Type Of Service</th>
        <th scope="col"> Kid's Name</th>
        <th scope="col"> Price</th>
        <th scope="col"> City</th>
        <th scope="col"> Contact</th>
        <th scope="col"> Rate&Review </th>


         
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
        #$currtime="Select Convert(Time, GetDate())"
       # $TIME =mysqli_query($database, $currtime)
   if ($result1) {
   while ($data = mysqli_fetch_row($result1)) {
   # if ($data[5]>=date('Y-m-d')||($data[5]=date('Y-m-d'))&& ){#check if its synataxitly correct 
    if ($data[6]<date('Y-m-d')){
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
   <td>".$data[9]."</td>
   <td> <a href='https://api.whatsapp.com/send/?phone=966".$data[15]."&text=hi&type=phone_number&app_absent=0'target='_blank'><img src='img/174879.png'style='width: 7% 'alt='whatsapp'>contact me </a></td>
    <td><a href='rate&review.php?babysittername=".$data[2]."&bookingId=".$data[0]."'> 
    <input  class='submitB 'type ='button'value='Rate & Review'> 
      </a></td>
   </th></tr>");}}}
  mysqli_close($database);
   ?>

   </tbody>
   </table>
    
    
  
   <!--<div class="nouf">
        <div class="card" style="margin-left:15%;">
            <img src="img/Screen Shot 2565-09-28 at 9.12.08 PM.png " alt="pic" style="width:50%">
            <div>
                <h4><b>Nora </b></h4>
                <img src="img/83079.png" alt="pic"style="width:5%" ><span>In-room babysitting</span>
                <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%" ><span>600 SR</span>
                <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%"><span>Riyadh</span></div>
                <img src="img/free-time-icon-968-thumb.png" style="width:5%" ><span>4 hours</span>
                <img src="img/1702240.png" style="width:5%" ><span>$data[2]</span>
                

                <div class="lastedit">
               
                <a href="offer1.html"><button id="d">view offer details</details></button></a>
                <a href="rate&review.html">
                    <input class="submitB" type ="button" value="Rate & Review">
               </a> </div>
                
            </div>
       
     
        <div class="card">
            <img src="img/studio-shot-cheerful-religious-muslim-woman-keeps-arms-folded-smiles-broadly-has-white-teeth_273609-27065.jpg" alt="pic" style="width:50%">
            <div>
                <h4><b>Sara </b></h4>
                <img src="img/83079.png" alt="pic"style="width:5%" ><span>In-room babysitting</span>
                <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%" ><span>400 SR</span>
                <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%"><span>Riyadh</span></div>
                <img src="img/free-time-icon-968-thumb.png" style="width:5%" ><span>3 hours</span>
                <img src="img/1702240.png" style="width:5%" ><span>omar</span>-->
                

                <!--<div id="status2">
                    
                <a href="offer1.html"><button id="d">view offer details</details></button></a>
                    <input  class="submitB" type ="button" value="Rate & Review">  as prev code
               </a> </div>-->
                
            </div>
      
        </div>

      
    <!--for rate &review linking -->
    <footer style="margin-top:7%;">
        <p>Author: Sitterly Team</p>
        <a href="mailto:Sitterly@gmail.com">Contact us</a><strong>&copy;</strong></p>
      </footer> 
      
    
    
    
    </body>
    </html>
    <?php }?>