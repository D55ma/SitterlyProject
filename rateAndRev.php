
<?php session_start();
 if(!isset($_SESSION['ParentEmail']))
 // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
 header("Location:signin.php");

else
{?>
<!DOCTYPE html>
<html>

    <head>
        <title>Rate&review</title>
         <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="styling.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="star.css">
<style>
  /*.rating1{
    margin:0;
    padding:0;
    background:#262626;
  }
  .rating{
  display : flex;
  position:absolute;
  top:50%;
  left:50%;
   transform:translate(-50%,-50%)rotateY(180deg);
}

.rating input{
 
}

.rating label{
  width      : 50px;
 display :block;
 cursor :pointer;
  background : #acc;
}
.rating label:before{
  content :'\f005';
  font-family: fontAwesome;
position:relative;
displsy:block;
font-size:50px;
color:#101010;}
.rating label:after{
  content :'\f005';
  font-family: fontAwesome;
position:relative;
displsy:block;
font-size:50px;
color:#1f9cff;
top:0;
opacity:0;
transition:.5%;
text-shadow:0 2px 5px rgba(0,0,0,.5); }
.rating label:hover:after,
.rating label:hover: ~label:after,
.rating input:checked ~label:after{
  opacity:1;
}*/
.container .star-widget input {
    display:none;
}

.star-widget label {
    font-size:40px;
    color:#444;
    padding:10px;
    float:right;
    transition:all 0.2s ease;
   
}

input:not(:checked) ~  label:hover ,
input:not(:checked) ~  label:hover ~ label {
color:#fd4
}

input:checked ~ label {
color:#fd4
}

input#rate-5:checked ~ label {
color:#fe7;
text-shadow:0 0 20px rgb(217, 190, 72);
}

input#1:checked ~ form header:before{
   content:"I don't like it";    }

input#2:checked ~ form header:before{
  content:"It's not bad";    }

input#3:checked ~ form header:before{
   content:"It is nice";    }

input#4:checked ~ form header:before{
    content:"It is awesome!";    }

 input#5:checked ~ form header:before{
    content:"I just love it";    }

form header {

    width:100%;
    font-size:25px;
    color:rgb(41,33,78);;
    font-weight:500;
    margin: 5px 0 20px 0;
    text-align: center;
    transition: all 0.2s ease;
}

form .textarea {
    overflow: hidden;
    height:100px;
    width:100%
  
}

form .textarea textarea {

height: 100%;
width: 100%;
outline:none; 
border: 1px solid #333;
background:whitesmoke;
padding:10px;
color:#404040;
resize:none;
}

form .btn {
    height:45px;
    width:100%;
    margin: 15px 0; }

 form .btn  button:hover{
            background-color: rgb(72, 56, 133);
                border-color: rgb(72, 56, 133);
              fill: rgb(72, 56, 133); 
              transition: all 400ms linear;
              /* when cursor pass change the button's color*/
              cursor:pointer;
            } 
        
        
       
form .btn button {
    height:100%;
    width:100%;
    border: 1px solid #444;
    outline:none;
    background : rgb(41,33,78);
    font-size:17px;
    color:white;
    font-weight:500;
    text-transform:uppercase;
    cursor:pointer;
    transition: all 0.3s ease; 
    border-radius:12px;
   /*
  background :aliceblue;
  margin-top:5px;
  border:none;
  height:40px;
  width:35%;
  color:rgb(41,33,78);
  font-size:16px;
   
  border-radius:12px;
  font-weight:500;
  text-transform:uppercase;
  cursor:pointer;
  transition: all 0.3s ease; */
}

.btn :focus {

    color: #ffffff;
  }







</style>
        
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
    
    
    
        </div>

      <?php $babysittername=$_GET['babysittername'];
      $pemail=$_SESSION["ParentEmail"]; 
      $bookingId=$_GET['bookingId'];
     ?>
    <div class="nouf" >
      <div   id ="submited"class ="card">
      <form   method ="POST" action =<?php echo "\"rateAndRev.php?babysittername=".$babysittername."&bookingId=".$bookingId."\""?> >
     <label> <h2>Rate your experience with<?php print("  $babysittername  ") ?><h2> <br>hope you liked it!! </h2></label> 
    <!--review and rate card-->

<div  class="container" >
    <div  style="padding-right:  6em ;" class="star-widget">
       <input type="radio" name="rate" id="5"  value="5">
        <label for="5" class="fa fa-star "></label>
       <input type="radio" name="rate" id="4" value="4">
        <label for="4" class="fa fa-star "></label> 
       <input type="radio" name="rate" id="3" value="3">
        <label for="3" class="fa fa-star"></label>
       <input type="radio" name="rate" id="2" value="2">
        <label for="2" class="fa fa-star"></label>
      <input type="radio" name="rate" id="1" value="1">
        <label for="1" class="fa fa-star"></label>
       
</div>
            <header> </header>
           
<br><br><br>

<label><h3 >if you have any comments we are here for you  :</h3></label>
      
<textarea name="rev" rows="4" cols="36">enter your commnets here</textarea>
<br>
          <input name ="submit1" class="submitB" type="submit" value="Submit">
       </form>
       
      </div></div> 
    </div>

    <?php 




if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (!( $database = mysqli_connect( "localhost", "root", "" )))
die( "<p>Could not connect to database</p>" );

if (!mysqli_select_db( $database, "Sitterly" ))
die( "<p>Could not open URL database</p>" );
$querycond="SELECT * FROM review where  review.bookingID= $bookingId";
$resultcond = mysqli_query($database,$querycond);
if(!($row=mysqli_fetch_row($resultcond))){
$babysittername=$_GET['babysittername'];
$rev="";
#$babysittername=$_GET['babysittername'];
  $rev=$_POST['rev'];
 # $stars1=$_POST['rate'];
$stars=0;
$stars1="";
    
    if(isset($_POST['rate'])){
      $stars1=$_POST['rate'];
      if( $stars1=="5")
      $stars=5;
      if( $stars1=="4")
      $stars=4;
      if( $stars1=="3")
      $stars=3;
     if( $stars1=="2")
      $stars=2;
      if( $stars1=="1")
      $stars=1;}
      else {
        $stars=0;
      }
      
      if( strlen($rev) <250  ){
      $query =" INSERT INTO review (review,starsnum,babysittername,parentEmail,bookingID) 
       VALUES ('".$rev."','".$stars."' ,'".$babysittername."','".$pemail."','".$bookingId."');";  #starrrrs
      $result = mysqli_query($database,$query); #(('".$rev."',,$stars ,$babysittername ,$pemail ) ";
      if($result){
      echo"<script type='text/javascript'>
        window.location.href = 'previousBooking.php';
        </script>";}
      
    }
  else echo "<script>alert('length of your review should be less than or equal to 250 characters')</script>"; 

  }
  else echo "<script>alert('you have  already rated this booking')</script>"; 
}

     
    
  mysqli_close($database);
    ?>
      



    
       

       <footer style="margin-top: 45%;">
        <p>Author: Sitterly Team</p>
        <a href="mailto:Sitterly@gmail.com">Sitterly@gmail.com</a><strong>&copy;</strong></p>
      </footer>

    </body>



    







</html>
<?php  }?>