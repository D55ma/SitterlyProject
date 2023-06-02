<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="tables.css" >
        <link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <title>manage posts</title>
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
        <h1>Edit your job request:</h1>


        
        <table class="content-table" id= "center">
          <br>
          
          <thead>
      
            <tr>
              
              <th scope="col">Kid Name</th>
              <th scope="col">Duration</th>
              <th scope="col">From</th>
              <th scope="col">To</th>
              <th scope="col">Type Of Service</th>
              <th scope="col"> Age</th>
              <th scope="col"> Submit</th>
      
      
               
            </tr>
          </thead>
          <tbody>
            
            
        
      
        
        <?php
        print("<form method='POST' action= <?php 'EditReqNew.php.php?id='.$id ?>>");
        if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
        die( "<p>Could not connect to database</p>" );
      
      if ( !mysqli_select_db($database, "sitterly" ) )
        die( "<p>Could not open URL database</p>" );
      $id = $_GET['JobReqID'];
      $query="SELECT * FROM request WHERE JobReqID='".$id."'";
      $result=mysqli_query($database, $query);
      
      
      if ($result) {
        $data = mysqli_fetch_row($result);
           
             print("<tr>      
             <th scope='row'><td><input type ='text' name = 'kidname' id='name' value='".$data[1]."'class='form-control'trim pattern='[A-Z-a-z]{3,80}' title='please enter name/s in this format (nouf-haifa) (numbers/special characters are not accepted)' /></td>
             <td><inputtype='date'  value='".$data[4]."'name = 'duration'id='birthdate' class='form-control'  min='2022-11-09' /></td>
             

             <td><input type='text' value='".$data[5]."'name = 'Tfrom' class='form-control' id='appt1' min='13:00:00' ></td>
             <td><input type='text' value='".$data[6]."'name = 'Tto' class='form-control' id='appt' ></td>
             <td>
             <select name = 'type' value='".$data[3]."'class='form-select' aria-label='Default select example' >
                          
            <option >In-room babysitting</option>
            <option value='1' >Travel childcare</option>
            <option value='2' >Night babysitting</option>
            <option value='3'>After school babysitting</option>
            <option value='4'>outdoor babysitting</option>
            <option value='5'>others </option>
             </td>
            
             
              <td><input type ='text' name = 'kidage' id='age' value='".$data[2]."'class='form-control'  pattern='[0-9-]{1,51}' title='please enter valid ages'/></td>
              <td><input class='submitB' type='submit' value='Submit '>
              
             </th></tr>");
             print("</form>");
         }
      
      else
      echo "An error occured while completing your request.";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        $kidname=  $_POST["kidname"];
        $duration =   $_POST["duration"];
        $Stime =  $_POST["Tfrom"];
        $Etime =  $_POST["Tto"];
        $type=  $_POST["type"];
        $kidage=  $_POST["kidage"];
        
        $query = "UPDATE request SET KidName ='".$name."',duration= '".$duration."',StartingTime= '".$Stime."',EndingTime= '".$Etime."',Service= '".$type."',KidAge='".$kidage."' WHERE JobReqID='".$id."'";
     $result=mysqli_query($database, $query);
     if($result)
            header("location: managePosts.php");

        else
            echo "An error occured while completing your request.";
      }
        
        
          
         print("</tbody>") ;
        print("</table>");
      ?>
<footer style="margin-top: 10%;">
    <p>Author: Sitterly Team</p>
    <a href="mailto:Sitterly@gmail.com">Contact us</a><strong>&copy;</strong></p>
  </footer>

    </body>



    </html>
    <!--<td><input type='file' value='".$data[7]."'name = 'photo' accept='image/*' ></td>-->