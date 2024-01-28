<?php

//session_start();
//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
//{   header("location: login page.php");}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Page</title>
    <link href="homepage.css" rel="stylesheet" type="text/css">
    <link  media="screen and (max-width: 1170px)" href="phne.css" rel="stylesheet" type="text/css">
</head>

<body>

<style>
body {
    

}
</style>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="logout.php"> <button class="logbtn">Log out</button></a></li>
                <!-- <li><a href="#">About</a></li> -->
                <li><a href="View_Profile.html">MyProfile</a></li>
               
                <li><a href="#">FAQs</a></li>

                <li><a href="Raise Complaint.php">Raise Complaint</a></li>

                <li><a href="Offers(1).html">Offers</a></li>
                <li><a href="#" class="active">Home </a></li>
                <img src="download.png" alt="">
            </ul>
        </nav>
    </header>
    
    <div class="textblck">
        <p>Welcome to</p>
        <p>Customer Relationship </p>
        <p>Management</p>
        <p id="txt">Customer Relationship management is the strongest and the most efficient approach in maintaining and
            creating relationships with customers.CRM helps businesses build a relationship with their customers that,
            in turn, creates loyalty and customer retention.</p>
    </div>
   
    <!-- <div class="btnblck" >
        <a href="#" ><button class="btn" >Sign Up Now</button></a>
    </div> -->
   
         
    <footer class="footer">
        <p class="footer-txt">
            Copyright &copy; 2027 www.CRMSystem.com - All rights reserved
        </p>
    </footer>
   
       
</div>

</body>

</html>