<?php 
    session_start();

    // Check if the user has already logged in
   if(!(isset($_SESSION['SitterEmail'])))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location: signin.php");

    else
    {

      if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
      die( "<p>Could not connect to database</p>" );




   if ( !mysqli_select_db($database, "Sitterly" ) )
     die( "<p>Could not open URL database</p>" );


  else{

    $id = $_GET['JobReqID'];  



   $email = $_SESSION['SitterEmail'];
    $queryS = "SELECT * FROM babysitter WHERE email= '$email'   " ;

   if($x = mysqli_query($database ,$queryS)){
   
    $results=mysqli_fetch_row($x);
   $Fname=$results[0];
   $Lname=$results[1];
   $phone=$results[6];
   $photo=$results[8];
   $bio =$results[9];
   // we don't need babysitter's add in booking $city=$results[10];
   $fullname= $Fname ." ". $Lname;
   $price = $_POST['price'];
   
    if ($price> 0 or $price <= 1500 ){
   

     $queryR= "SELECT * FROM request WHERE JobReqID=  '$id'   " ;
     if($z =mysqli_query($database ,$queryR)){
      $resultR=mysqli_fetch_row($z);
     $kidName = $resultR[1];
     // $kidAge=$resultR[2];
     $Service =$resultR[3];
     $duration= $resultR[4];


    $Stime =$resultR[5];
    $Etime = $resultR[6];
    $Kidphoto =$resultR[7];
    $parentEmail = $resultR[8];
    $city=$resultR[10];
    $street= $resultR[11];
    $Zip_code =$resultR[12];

   $query= "INSERT INTO Booking (KidName, BabtsitterName, BabysitterPhoto, kidPhoto, Serv, duration, StatingTime, EndingTime, Price, babysitterBio, babySitterEmail, JobReqID, parentEmail,phoneNumber,city,Street,Zip_code)
                 VALUES ('".$kidName." ',' ".$fullname."','".$photo."' ,'".$Kidphoto."','".$Service."','".$duration ." ',' ".$Stime." ','   ".$Etime."  ',' ". $price  ." ',' ".$bio."  ','  ".  $email  ."  ',' ".$id."  ',' ".$parentEmail."  ',' ".$phone." ',' ".$city."  ',' ".$street." ','  ".$Zip_code."  ');";  


    if(   ! ($result=mysqli_query($database ,$query))  ) 
    echo  ( "<p>Could not process query1</p>" );
 
       if( !($resultD= mysqli_query($database ,"DELETE FROM request WHERE  JobReqID = '$id'  ")  ) ) 
             echo( "<p>Could not process query2</p>" );

       else
      header('location: viewjobrequestlist.php'); 

             

   }
    else
      echo( "<p>Could not process query3</p>" );

   }
   else{
echo "<script>alert('price is not in range please re-enter the price (1-1500')</script>"; 
header('location: viewjobrequestlist.php');}


 }
 else
 echo( "<p>Could not process query4</p>" );


 

}

    }
?>