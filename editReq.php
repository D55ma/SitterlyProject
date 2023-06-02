
<!DOCTYPE html>
<html>
<head> 
<title>Edit Request</title>
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="CSShome.css">
<link rel="stylesheet" href="c2.css">

<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 



</head>


<body class="gradient-custom-2">



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
            <li><a href="viewprofileParent.html">My Profile</a></li>
            <li><a href="view-offer-list.html">Offers List</a></li>
            <li>
                <a href="#">
                  <h3 class="pink">sitterly</h3>
                 
                </a></li>
            <li><a href="PostJobrequest0.html">Post Job Request</a></li>
           
          
            
          <li><a href="view-cur-booking-1.html">Current Booking</a></li>
            <li><a href="previosbooking.html">Previous Jobs</a></li>
            <li><a href="welcome.html">Log Out</a></li>
          </ul>
        </nav>
      </header>



    </div>


    














    <?php 
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
    die( "<p>Could not connect to database</p>" );
  
     if ( !mysqli_select_db($database, "Sitterly" ) )
      die( "<p>Could not open URL database</p>" );

      $parentEmail = $_SESSION["ParentEmail"]; 
   

    $query="SELECT * FROM request WHERE parentEmail='$parentEmail' ";
    $result=mysqli_query($database, $query);
    $row = mysqli_fetch_array($result);

   print('<div class="nouf"  >


<section class="h-100 gradient-form" style="background-color: rgba(238, 238, 238, 0.559);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg ">
              <div class="card-body p-md-5 mx-md-4">
                <h1>Edit Request</h1><hr><br>
                <form action="Postjobrequest3.php"  method="post">
                    <div class="form-outline mb-4">
                      <label>kid/s name:* </label>
                        <input type ="text" name = "kidname" id="name" class="form-control" value="'.$row[1].'"" trim pattern="[A-Z-a-z]{3,80}" title="please enter name/s in this format (nouf-haifa) (numbers/special characters are not accepted)" required />
                        <label class="form-label" for="name"></label>
                      </div>
                      <div class="form-outline mb-4">
                        <label>kid/s age:* NOTE that 0 is for (new born)</label>
                        <input type ="text" name = "kidage" id="age" class="form-control" value="'.$row[2].'"" pattern="[0-9-]{1,51}" title="please enter valid ages"required/>
                        <label class="form-label" for="age"></label>
                      </div>

                      <div class="form-outline mb-4">
                      <label>type of service:*</label>
                      <select name = "type" class="form-select" value="'.$row[3].'"">
                      
                      <option >In-room babysitting</option>
                      <option value="1" >Travel childcare</option>
                     <option value="2" >Night babysitting</option>
                     <option value="3">After school babysitting</option>
                    <option value="4">outdoor babysitting</option>
                   <option value="5">others </option>
                      </select>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="name">duration*:</label>

<input type="date"  name = "duration"id="birthdate" class="form-control" value="'.$row[4].'"" min="2022-11-09"   required />
                        <label class="form-label" for="birthdate"></label>
                      </div>
                      <div class="form-outline mb-4">
                       <!-- <label class="form-label" for="name">Time</label><br> -->
                        <label>from:*</label>
                        <input type="time" name = "Tfrom" class="form-control" id="appt1" name="appt" required>
                        <label>to:*</label><input type="time" name = "Tto" class="form-control" id="appt" name="appt"required>
                      </div>


                





                      <div class="form-outline mb-4">
                        <label class="input-group-text" for="inputGroupFile01">Add a photo of (optional)</label>
                        <input type="file" name = "photo" class="form-control" id="inputGroupFile01" accept="image/*" >
                      </div>






              
                      <hr><div>
                      <a href="Postjobrequest3.php"><p><input  type="submit"  value="Submit" style="display: inline-block; align-items: center;
                          font-family: inherit;
                          font-weight: 500;
                          font-size: 16px;
                         padding: 0.7em 1.4em 0.7em 1.1em;
                        
                        
                          color: white;
                          
                          background:rgb(210, 182, 205);
                          border: none;
                      
                          letter-spacing: 0.05em;
                          border-radius: 20em;">
                          <a href="parents-home.php"><button type="button"   style="  display: inline-block; align-items: center; font-family: inherit; font-weight: 500; font-size: 16px;
                            padding: 0.7em 1.4em 0.7em 1.1em;
                            color: white;
                            
                            background:rgb(162, 189, 227);
                            border: none;
                            
                            letter-spacing: 0.05em;
                            border-radius: 20em;
                            ">Cancel</button>
                            </p></a></div>
                                                      
                </form>
                <footer>
        <p>Author: Sitterly Team</p>
        <a href="mailto:Sitterly@gmail.com">Sitterly@gmail.com</a><strong>&copy;</strong></p>
      </footer>
');
                    
                  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
       die( "<p>Could not connect to database</p>" );

    if ( !mysqli_select_db( $database, "Sitterly") )
       die( "<p>Could not open URL database</p>" );

       
        
       $name =  $_POST["kidname"];

if( strlen($name) <80  ){
        
       $kidage = $_POST["kidage"];
       $type=  $_POST["type"];
       $duration=  $_POST["duration"];
       $Tfrom=  $_POST["Tfrom"];
       $Tto=  $_POST["Tto"];
       $photo =  $_POST["photo"];
       $email = $_SESSION["ParentEmail"];



$kidsagelist=(explode("-",$kidage));
$error=false;
foreach($kidsagelist as $key => $value)
{ if( $value >18 || $value <0) 
{ echo "<script>alert('kid/s age should be <18 or >= 0 ')</script>";


$error=true;

}}

if(!$error){
  
  $query = "UPDATE request SET KidName = '".$name."', KidAge = '".$kidage."',Service = '".$type."',duration= '".$duration."',StartingTime= '".$Tfrom."' ,EndingTime= '".$Tto."' ,photo= '".$photo."'  WHERE parentEmail =  '$parentEmail' "; 

}
else
echo "<script>alert('kid/s age should be <18 or >= 0 ')</script>"; 

}
else
echo "<script>alert('length of kid/s name should be less than or equal to 50 characters')</script>";





}

      /*
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                           die( "<p>Could not connect to database</p>" );
       
                        if ( !mysqli_select_db( $database, "Sitterly") )
                           die( "<p>Could not open URL database</p>" );
                    
                           
                            
                           $name =  $_POST["kidname"];

if( strlen($name) <80  ){
                            
                           $kidage = $_POST["kidage"];
                           $type=  $_POST["type"];
                           $duration=  $_POST["duration"];
                           $Tfrom=  $_POST["Tfrom"];
                           $Tto=  $_POST["Tto"];
                           $photo =  $_POST["photo"];
                           $email = $_SESSION["ParentEmail"];



   $kidsagelist=(explode("-",$kidage));
   $error=false;
       foreach($kidsagelist as $key => $value)
     { if( $value >18 || $value <0) 
     { echo "<script>alert('kid/s age should be <18 or >= 0 ')</script>";
        

        $error=true;

    }}

if(!$error){

                        $query="INSERT INTO request (KidName,KidAge,serv,duration,StartingTime,EndingTime,photo,parentEmail) VALUES ('".$name."','".$kidage."' ,'".$type."','".$duration."','".$Tfrom."','".$Tto."' ,'".$photo."',' ".$email."');";
$result=mysqli_query($database, $query);
                        if($result)
                        echo"<script type='text/javascript'>
                        window.location.href = 'managePosts.html';
                        </script>";
                           else
                               echo "An Error occured while completing your request.";
} 
                }

                  else
                 echo "<script>alert('length of kid/s name should be less than or equal to 50 characters')</script>"; 


                  }


*/
               ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div></div>
    </section>

    

    
    </body>


</html>


