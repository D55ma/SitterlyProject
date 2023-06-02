

 <?php 
    session_start();

    // Check if the user has already logged in
    if(!(isset($_SESSION['ParentEmail'])))
        // header() is used to send a raw HTTP header. It must be called before any actual output is sent.
        header("Location:signin.php");

    else
    {
      ?>
<?php 
          
          
              if ( !( $database = mysqli_connect( "localhost", "root", "" ) ) )
                 die( "<p>Could not connect to database</p>" );

              if ( !mysqli_select_db( $database, "Sitterly") )
                 die( "<p>Could not open URL database</p>" );
                 $id= $_GET['JobReqID'];
                 
                
                 mysqli_query($database ,"UPDATE Booking SET Status = 'accepted' WHERE JobReqID='".$id."'");
                
                     header("location:viewOfferList.php");
         
                
      
 
           ?>
           <?php
    }
    ?>