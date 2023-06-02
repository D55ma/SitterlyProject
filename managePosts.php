 
 <?php 
    session_start();

    // Check if the user has already logged in
    if(!(isset($_SESSION['ParentEmail'])))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location:signin.php");

    else
    {
      ?>
 <html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="tables.css" >
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
        <h1>Edit or delete your job request:</h1>


        
        <table class="content-table" id= "center">
          <br>
          
          <thead>
      
            <tr>
              <th scope="col"> img</th>
              <th scope="col">Kid Name</th>
              <th scope="col">Duration</th>
              <th scope="col">From</th>
              <th scope="col">To</th>
              <th scope="col">Type Of Service</th>
              <th scope="col"> Age</th>
              <th scope="col"> Edit/delet</th>
      
      
               
            </tr>
          </thead>
          <tbody>
            
            <?php
        
      
      
        if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
        die( "<p>Could not connect to database</p>" );
      
      if ( !mysqli_select_db($database, "Sitterly" ) )
        die( "<p>Could not open URL database</p>" );
        $pemail=$_SESSION["ParentEmail"];
      $query="SELECT * FROM request WHERE  parentEmail='$pemail' ";
      $result=mysqli_query($database, $query);
      
      
      if ($result) {
         while ($data = mysqli_fetch_row($result)) {
              if(!empty($data[7]))
              $pic="img/".$data[7];
              else $pic = "img/nullprofilepic.png";
             print("<tr>      
             <th scope='row'><p><img src=".$pic." alt='img' style='width:100px'></p>
             <td>".$data[1]."</td>
             <td>".$data[4]."</td>
             <td>".$data[5]."</td>
             <td>".$data[6]."</td>
             <td>".$data[3]."</td>
             <td>".$data[2]."</td>
            
             
              <td><a href=\"editReq.php?JobReqID=".$data[0]."\"><input class='submitB' type='submit' value='edit '>
              <a href=\"deletReq.php?JobReqID=".$data[0]."\"><input class='CancelB' type='submit' value='delete'></td>
             </th></tr>");
         }
      }
      else
      echo "An error occured while completing your request.";
      

        ?>
        
          
          </tbody>
        </table>

<footer style="margin-top: 10%;">
    <p>Author: Sitterly Team</p>
    <a href="mailto:Sitterly@gmail.com">Contact us</a><strong>&copy;</strong></p>
  </footer>

    </body>



    </html>
    <?php
    }
    ?>