<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Trago</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <header>
      <img src="images/logo.png" />
      <nav>
        <ul>
          <li><a href="first.php"><b>Home</b></a></li>
          <li><a href="epass.php"><b>e-pass</b></a></li>
          <li><a href=" "><b>Your bus location</b></a></li>
          <li><a href="coordinates.html"><b>Your location and ETA</b></a></li>
          <li><a href="signout.php?logout='1'"><b>Sign out</b></a></li>
        </ul>
      </nav>
    </header>
    <br>
    <br>


    
    


<div class="coverPage">
<div class="coverImages" style="background-image: url(images/coverPage2.jpg);">
   </div> 
   <div class="coverPageText">
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
      
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
      

     
	
     
    
    <?php endif ?>
     </div>
     <marquee scrollamount="10"
direction="left"
behavior="scroll">
<b>Your bus is on the way...</b>
<img src="images/bus1.png" />
</marquee>
</div>
</div>
  

    <div class="introSection">
      <div class="introImage">
        <img src="images/photo.gif" alt="" srcset="" />
      </div>
      <div class="introText">
        <h1><b>Why Trago ?</b></h1>
        <p><b>
           Because we provide<br>
             -Accurate location of your bus<br>
             -ETA<br>
             -e-bus passes<br>
             -Notification System<br>
             -Safe journey of your child</b>
        </p>
      </div>
    </div>
 
  </body>
</html>