
<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title>Sign in </title>
<link rel="stylesheet" type="text/css" href="c1.css">

</head>

<body>
  
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
<h2>Sign in </h2>

<form method="post" class = "scrollbar" id="style-1" required>
  
  


<label>Email *
    <input type="text" placeholder="Enter Email" name="email" required
    ></label>
    <br>


<label>Password *
    <input type="password" placeholder="Enter Password" name="password" required
    ></label>
    <br>
  <button type="submit" name= "submitParent"class="submitB" >Sign in </button>

     
    <button type="button" class="CancelB">Cancel</button>
    
    <p class = "mini">I don't have an account.  <a href = "welcome.html">Creat an account?</a> </p>
<footer>
  <p class="mini">Author: Sitterly Team
  <a href="mailto:Sitterly@gmail.com">Contact us<strong>&copy;</strong></a></p>
</footer>
</form>

<?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if (!( $database = mysqli_connect( "localhost", "root", "" )))
        die( "<p>Could not connect to database</p>" );

    if (!mysqli_select_db( $database, "Sitterly" ))
        die( "<p>Could not open URL database</p>" );
  
        $email=$_POST['email'];  //correct
        $password=$_POST['password'];  
        $query="select * from parent WHERE email='$email'AND pass='$password'";  
        $result_parent=mysqli_query($database, $query);  
        if($row=mysqli_fetch_row($result_parent)){
         
            header("location:parents-home.php");
            $_SESSION["ParentEmail"]=$email;
      }
      else {
        $query_bs="select * from babysitter WHERE email='$email'AND pass='$password'";  
        $result_babysitter=mysqli_query($database, $query_bs);
        if($row=mysqli_fetch_row($result_babysitter)){
         
          header("location:babysitter-home.php");
          $_SESSION["SitterEmail"]=$email;
    }
    else
    echo "<script>alert('Email or password is incorrect!')</script>";
 
  }
    
      }
        
       
  
   
    
    ?>

</body>
</div>
</div>
</html>