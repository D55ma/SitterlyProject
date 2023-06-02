
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
        <link rel="stylesheet" href="c2.css" >
        <link rel="stylesheet" href="tables.css" >
    

        <title>Rate and Reviews</title>
    

    </head>


      <body class="gradient-custom-2">

      
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
            

     
             <h1>View rate and reviews:</h1>


             <table class="content-table" id= "center">
           <br>
  
           <thead>

             <tr>

             
             <th scope="col">review</th>
             <th scope="col">stars</th>
             
             </tr>
      </thead>
       <tbody>
    
        <?php

       print(" <div class='nouf2'> ");
  
     if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );

     if ( !mysqli_select_db($database, "Sitterly" ) )
    die( "<p>Could not open URL database</p>" );

   $query="SELECT * FROM review ";
     
     if ($result=mysqli_query($database, $query)) {

  

       while ($data = mysqli_fetch_row($result)) {


       print("<tr>      
     
        <td>".$data[1]."</td>
        <th scope='row'><p><img src='img/star.png' alt='img' style='width:8%'></p>".$data[2]."
       
     


       </th></tr>");




      }
     }



     else
      echo "An error occured while completing your request.";


      print("</div>") ;
      ?>









    <!--  
      <div class="nouf" >

        <div class="card">
            <img src="twins.jpeg" alt="pic" style="width:50%">
            <div>
                <h4><b>Amal Ali</b></h4>
                <h6>12/06/2022 5:27pm</h6>
                <img src="Screen Shot 2565-09-25 at 7.52.14 PM.png " alt="pic"style="width:5%" > <img src="Screen Shot 2565-09-25 at 7.52.14 PM.png "  alt="pic"style="width:5%" > <img src="Screen Shot 2565-09-25 at 7.52.14 PM.png " alt="pic"style="width:5%" > <img src="Screen Shot 2565-09-25 at 7.52.14 PM.png " alt="pic"style="width:5%" > <img src="Screen Shot 2565-09-25 at 7.52.14 PM.png " alt="pic"style="width:5%" > 
                <br><br>
               <textarea name="bio" rows="4" cols="36">Marcela was a fantastic sitter for my 3-year-old twin girls.She was on time, sweet, and immediately connected with the girls, who can be very hard to please sometimes!
             </textarea>

               </div>
                
                <a href="offer1.html"><button id="d">view offer details</details></button></a>
                
                <hr>
                
            </div> 
    
         
                </div> -->
     
     


     

                        
    </body>
    <body>
    <!--<footer style="margin-top: 5%" >
              <p>Author: Sitterly Team</p>
              <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>-->
    </body>
</html> 

<?php
    }
    ?>