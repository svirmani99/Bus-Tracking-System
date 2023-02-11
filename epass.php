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
          <li><a href=" "><b>Track the location</b></a></li>
          <li><a href="coordinates.html"><b>Your location and ETA</b></a></li>
          <li><a href="signout.php?logout='1'"><b>Sign out</b></a></li>
        </ul>
      </nav>
    </header>
    <br>
    <br>

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
    <?php  if (isset($_SESSION['fees_status'])) : ?>
      <?php  if ( $_SESSION['fees_status']=="paid"): ?>
                <p>You have paid the fees. You are eligible for the bus service.</p>
    
      <?php endif ?>
      <?php  if ( $_SESSION['fees_status']=="unpaid"): ?>
                <p>You haven't paid the fees. You are not eligible for the bus service. Kindly pay the fees to enjoy our services.</p>
    
      <?php endif ?>
      <?php  if ( $_SESSION['fees_status']=="NULL"): ?>
                <p>Your fees status is not updated. Please login again. If you face the same issue please contact the ADMIN.</p>
    
      <?php endif ?>
      <?php endif ?>
 </body>
</html>