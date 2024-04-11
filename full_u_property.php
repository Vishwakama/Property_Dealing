<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAPPY HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="header.css" rel="stylesheet">
    <style>
    body{
      background-image: url("image/francesca-tosolini-6japTIjUQoI-unsplash.jpg");
      background-repeat: no-repeat;
      background-attachment: scroll;
      background-position: center center;
      margin-bottom: 200px;
      background-attachment: fixed;
      background-size: 100% 900px;
    }
    .container2{
      float: right;
      margin-right: 400px;
      margin-top: 50px;
      margin-bottom: 50px;
      width: 650px;
      height: 730px;
      background-color: White;
      border-radius: 10px;
      border: 2px solid black;
    }
    .image1{
      margin-top: 20px;
      margin-left: 180px;
      border: 2px solid black;
    }
    .image2{
      margin-left: 80px;
      margin-right: 80px;
      margin-top: 10px
    }
    .details1{
      margin-left: 60px;
      float: left;
    }
    .details3{
      float: right;
      margin-right: 40px;
    }
    button{
      margin-left: 270px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="" width="40" height="30" class="d-inline-block align-top">
      HAPPY HOME
    </a>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="user_login.php">BUY</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin_login.php">SELL</a>
        </li>
      <li class="nav-item">
        <a class="nav-link">AGENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">BUILDERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link">ABOUT US</a>
      </li>
  </ul>
  </div>
</nav>
  <div class="container2">
      <img src="<?php echo $_GET['pimg1']; ?>" alt="" height="250px" width="250px" class="image1"></br>
        <div class="image2">
          <a href="<?php echo $_GET['pimg2']; ?>"><img src="<?php echo $_GET['pimg2']; ?>" alt="" height="70px" width="70px" class="image2"></a>
          <a href="<?php echo $_GET['pimg3']; ?>"><img src="<?php echo $_GET['pimg3']; ?>" alt="" height="70px" width="70px" class="image2"></a>
        </div>
        <h4 align="center"><?php echo $_GET['name']; ?></h4>
        <p align="center"><?php echo $_GET['typ'];?> for SELL</p>
        <div class="details1" align="center">
          <p>Add:<?php echo $_GET['loclty']; ?>, <?php echo $_GET['ct']; ?> </p>
          <p><?php echo $_GET['hll']; ?>,<?php echo $_GET['bd']; ?></p>
          <p><?php echo $_GET['ktn']; ?>,<?php echo $_GET['br']; ?></p>
          <p><?php echo $_GET['hsn']; ?> <?php echo $_GET['hsd']; ?></p>
          <p><?php echo $_GET['scn']; ?> <?php echo $_GET['scd']; ?></p>
          <p><?php echo $_GET['tmn']; ?> <?php echo $_GET['tmd']; ?></p>
        </div>
        <div class="details3" align="center">
          <p>Price: <?php echo $_GET['prc']; ?></p>
          <p>Area: <?php echo $_GET['ar']; ?></p>
          <p>Parking Area: <?php echo $_GET['par']; ?></p>
          <p><?php echo $_GET['stn']; ?> <?php echo $_GET['std']; ?></p>
          <p>Developed by <?php echo $_GET['dvl']; ?></p>
          <p>Organisation <?php echo $_GET['orn']; ?></p>
        </div>
    </div>
  </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>