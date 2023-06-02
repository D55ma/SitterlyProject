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
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="CSShome.css">
        <link rel="stylesheet" href="c2.css">
        <link rel="stylesheet" href="styling.css">

        <title>Home</title>
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
   <!--    <br><br>
        <section>  
            <h1>Welcome,<h4></h4></h1>
            <div class ="b">
                <a href=""><button class="bb">My Profile</button></a>
       </div>  
            <div class ="b">
               <a href="view-offer-list.html"><button class="bb">Offers</button></a>
      </div>  
           <div class ="b">
           <a href="view-cur-booking-1.html"><button class="bb">Current Booking</button></a>
      </div> 
   <div class ="b">
       <a href="previos booking .html"><button class="bb">Previous Booking</button></a>
       </div>  
         </section> --> 
        

        <div class ="nouf">
            <div class="card" style="margin-left:30% ;">

                <div class = "img_pod">
                <img src="img/photo_2022-10-02_08-18-18 (2).jpg" alt="child pic" style="width:70%">
                </div>
                <div class="container_copy">
                    <h1>our vision:</h1>


         <h6 id="r"> For families who need consistent care 

            Our team of skilled care recruiters understand the care market and how to find high-quality nannies. We offer a highly customized search and rigorous candidate screening process. Our program works like a nanny placement agency, but faster, clearer, and more affordable. Don’t waste time on marketplace sites messaging 100 care providers. We’ll do the legwork for you. </h6>
         
         <hr>
        <h1 id="services" >Services</h1>
        <h6 id="l">A mom came to our team to find a nanny to care for her children while she worked from home and for occasional overnights. She wanted a nanny who was up for taking the kids on adventures and keeping them stimulated at home. Mom interviewed three candidates and chose the first. Upon checking in months later, Mom let us know that she and her sons absolutely love their nanny and noted, “they have a blast!”

            “I appreciated the fast communication and the compassion/human element of the process. I was speaking with someone who understood the reality of child care needs and was not only helpful but truly kind and knowledgeable. She helped us find the right person at the right time!”
            
            -Helpr client</h6>
        </div></div></div>





         <footer>
            <p>Author: Sitterly Team</p>
            <a href="mailto:Sitterly@gmail.com">Contact us/a></p>
          </footer>

    </body>
    </html>
    <?php
    }
    ?>