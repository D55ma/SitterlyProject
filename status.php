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
    <title>previousjoobs </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="CSShome.css">
    <link rel="stylesheet" href="c2.css">
    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="tables.css" >

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

        

    <h1>View current jobs:</h1>

  <table class="content-table" id= "center">
    <br>
        <thead>

        <tr>
        <th scope="col"> Kid's Photo</th>
        <th scope="col">Kids's Name</th>
        <th scope="col">Date</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Type Of Service</th>
        <th scope="col"> Price</th>
        <th scope="col"> City</th>
        <th scope="col">Status</th>
       


         

       


         
      </tr>
    </thead>
    <tbody>
      

        <?php 

        
    
if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "Sitterly" ))
die( "<p>Could not open URL database</p>" );

$bemail=$_SESSION["SitterEmail"];
          $query1= "SELECT * FROM Booking WHERE babySitterEmail= '$bemail'";
          $result1=mysqli_query($database, $query1);
          #$currtime="Select Convert(Time, GetDate())"
         # $TIME =mysqli_query($database, $currtime)
     if ($result1) {
      
     while ($data = mysqli_fetch_row($result1)) {
        if ($data[6]>=date('Y-m-d')){

      if(!empty($data[4]))
      $pic="img/".$data[4];
      else $pic = "img/nullprofilepic.png";
      if($data[11]=='accepted'){$color='submitA';$status='Accepted';}
        else if($data[11]=='rejected'){$color='submitR';$status='Rejected';}
            else if($data[11]==null){$color='submitP';$status='Pending..';}

      print("<tr>      
      <th scope='row'><p><img src=".$pic." alt='img' style='width:100px'></p>
      <td>".$data[1]."</td>
      <td>".$data[6]."</td>
      <td>".$data[7]."</td>   
      <td>".$data[8]."</td>
      <td>".$data[5]."</td>
      <td>".$data[9]."</td>
      <td>".$data[16]."</td>
      <td><input class=".$color." type='submit' value=".$status."> </td>
      </th></tr>");}}}
  mysqli_close($database);
    
     ?>
 </tbody>  </table>
          <!--  <h1>View current jobs:</h1> 
             <div class="nouf" >
                
                <div class="card" style="margin-left:15%;">
                    <img  src="img/IMG_7887.JPG" width="50%">
                    <div class="container_copy">
                        <h3>4 March 2023 from 3 PM to 7AM</h3>
                        <h1>Rand mohsen</h1>
                    
                    
                            <h4><b> type of service: After school babysitting</b></h4>
        
                  
                             <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%" ><span>500 SR</span>
                    <img src="img/IMG_7713 2.jpg" style="width:5%" ><span> 2 Years</span>
                    <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%"><span>Riyadh</span></div>
              
                        
                        
                            
                        
                        
                     
            </div> 
            <div class="card">
              <img src="img/happy-arab-woman-hijab-portrait-smiling-girl-posing-studio-background_155003-31120.jpg" alt="pic" style="width:50%">
                
                    <img  src="img/IMG_7889.JPG" width="50%">
                
                    <div class="container_copy">
                      <h3>4 january 2023 from 7 PM to 12 AM</h3>  
                        <h1>Raya ben</h1>
                    
                        <div>
                            <h4><b>type of service: Travel childcare</b></h4>
                           
                       
                         <img src="img/110.9-money-bag-icon-iconbunny.jpg" style="width:5%" ><span>400 SR</span>

                    <img src="img/IMG_7713 2.jpg" style="width:5%" ><span> 3 Year</span>
                    <img src="img/png-clipart-blue-google-map-arrow-icon-computer-icons-location-icon-miscellaneous-blue.png" style="width:5%"><span>Riyadh</span></div>
               
            
        </div>

            </div>

</div>-->

        <footer   style="margin-top:7%;" >
            <p>Author: Sitterly Team</p>
            <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>
          </footer>
   


        </body>
        </html>
        <?php
    }
?>