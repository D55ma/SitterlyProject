
<?php 
    session_start();

    // Check if the user has already logged in
   if(!(isset($_SESSION['SitterEmail'])))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location: signin.php");

    else
    { 
      ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="styling.css" >
        <link rel="stylesheet" href="c2.css" >
        <link rel="stylesheet" href="tables.css" >
      
        <title>job-offers-List</title>
   
  
        <link rel="stylesheet" href="stylecard.css" >
        <title>job-offers-List</title>
    </head>


     <body>
<p id="h"></p>
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
          
        <h1>View job request list:</h1>
     </body>
<body>


<table class="content-table" id= "center">
    <br>
    
    <thead>

      <tr>
        <th scope="col">kid/s photo</th>
        <th scope="col">Kid Name</th>
        <th scope="col"> Age</th>
        <th scope="col">Duration</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Type Of Service</th>
        
        <th scope="col"> Address</th>
        
        <th scope="col"> Price</th>
        <th scope="col"> Send</th>
        <th scope="col"> countdown</th>

         
      </tr>
    </thead>
    <tbody>

      <?php
  

  

  if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
  die( "<p>Could not connect to database</p>" );

if ( !mysqli_select_db($database, "Sitterly" ) )
  die( "<p>Could not open URL database</p>" );

$query="SELECT * FROM request ";
if ($result=mysqli_query($database, $query)) {

     if( !($delete = mysqli_query($database ,"DELETE FROM request WHERE timestamp <= DATE_SUB(NOW(), INTERVAL 60 MINUTE)")) ) 
      echo "<p>Could not open URL database</p>";
      $i=0;
   while ($data = mysqli_fetch_row($result)) {

    $email = $_SESSION["SitterEmail"];
    $conflict = mysqli_query ( $database ,"SELECT FROM  Booking WHERE babySitterEmail= $email and  date= $data[6]" ) ;
    if($conflict)
    continue;



    if(!empty($data[7]))
    $pic="img/".$data[7];
    else $pic = "img/nullprofilepic.png";
   print("<tr>      
   <th scope='row'><p><img src=".$pic." alt='img' style='width: 100px;%'></p> </th>
   <td>".$data[1]."</td>
   <td>".$data[2]."</td>
   <td>".$data[4]."</td>
   <td>".$data[5]."</td>
   <td>".$data[6]."</td>
   <td>".$data[3]."</td>
   <td>".$data[10]. "-".$data[11]. "-" .$data[12].   "</td>




   <td><form method = 'post' action ='sendOffer.php?JobReqID=".$data[0]."  ' > <span> <input type='text'name='price' size='8' placeholder='SR'></span>  </td>
   

<td><a href= 'sendOffer.php?JobReqID=".$data[0]."  '> <input class='submitB'type='submit' value='send offer'> </a></td>
    



<td id='demo.$i'></td>


   </th></tr> </form> "  );









    $start=substr($data[9],11);

$end=substr($data[9],0,10);
    
    $x="$end,$start";
    
    
    
    

    print("<script>
    // post job time
    var diff = (new Date('$x').getTime());
    // post job time after an hour
    var countDownDate = diff+3600000;
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // request's starting time
      var now = new Date().getTime();
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
      
      // Time calculations for days, hours, minutes and seconds
   
      var days= Math.floor(distance / (1000 * 60 * 60 * 24));

      var hours= Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        var h =hours + 'h '
        + minutes + 'm ' + seconds + 's ';
      
      // Output the result in an element with id='demo'
      document.getElementById('demo.$i').innerHTML =  h;
 
      // If the count down is over, write some text 
      if (distance < 0) {
        
        clearInterval(x);
        document.getElementById('demo.$i').innerHTML = 'EXPIRED';
        
      }




    }, 1000) ;
    
    </script>" 
 );
    
    
$i=$i+1;










   }
}



else
echo "An error occured while completing your request.";

  ?>










    </body>
</html>


<?php
    }
?>