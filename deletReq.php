
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

if ( !mysqli_select_db($database, "sitterly" ) )
die( "<p>Could not open URL database");
$id = $_GET['JobReqID']; 

mysqli_query($database ,"DELETE FROM request WHERE JobReqID='".$id."'");
mysqli_close($database);
header("Location: managePosts.php");
?>
<?php
    }
    ?>

