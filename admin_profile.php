<?php
    session_start();
    include("include/links.php");
    include("include/function.php");
    $member_id=$_SESSION["logged"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAPPY HOME</title>
    <link href="include/header.css" rel="stylesheet">
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
    .container1{
      width: 300px;
      float: left;
    }
    .container2{
      width:200px;
      height: 200px;
      float: left;
      margin-left:20px;
      background-color: white;
      border: 2px solid black;
      border-radius: 10px;
    }
    h2{
      margin-top: 20px;
      color: #835535;
    }
    .d-block{
      margin: 10px;
      width: 250px;
      font-size: 20px;
      height: 60px;
      color: #835535;
    }
    button{
      margin-left:60px;
    }
    span:hover{
      color: #ff7f27;
      background-color: blue; 
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
        <a class="nav-link"><?php echo $_SESSION["ADMIN_NAME"]; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">LOG OUT</a>
      </li>
  </ul>
  </div>
</nav>
    <h2 align="center">DASH BOARD</h2> 

<div class="container1">
    <a href="main.php"><span class="d-block p-2 bg-white" align="center">Home</span></a>
    <a href="property_register.php"><span class="d-block p-2 bg-white" align="center">Register Property</span></a>
    <a href="admin_profile_update.php"><span class="d-block p-2 bg-white" align="center">Detail/Update</span></a>
    <a href="#"><span class="d-block p-2 bg-white" align="center">About Us</span></a>
    <a href="#"><span class="d-block p-2 bg-white" align="center">Send SMS</span></a>
  </div>
  <?php
 $result1 = mysqli_query($conn,"SELECT * FROM tm_property INNER JOIN tm_image ON tm_property.p_id = tm_image.p_id WHERE tm_property.admin_id ='$member_id'");
 if(mysqli_num_rows($result1) > 0)
 {
    while($row1 = mysqli_fetch_assoc($result1))
    {
        echo"
          <div class='container2'>";?>

              <img src='<?php echo $row1['proprty_img3']; ?>' alt='' width='70px' height='70px' style='margin-left:50px; margin-top:10px;'></br>
              <?php echo" <h5 align='center'> ".$row1['p_title']."</h5>
              <p align='center'>".$row1['p_type']." for SALE</p>
              <a href='full_property.php?id=$row1[p_id]&typ=$row1[p_type]&name=$row1[p_title]&ct=$row1[p_city]&loclty=$row1[p_locality]&plnd=$row1[p_landmark]&bldyr=$row1[p_buildyr]&prc=$row1[p_price]&bd=$row1[p_bedroom]&br=$row1[p_bathroom]&hll=$row1[p_hall]&ktn=$row1[p_kitchen]&brm=$row1[p_bathroom]&ar=$row1[p_area]&par=$row1[p_prkarea]&hsn=$row1[p_hosnm]&hsd=$row1[p_hosdis]&scn=$row1[p_schnm]&scd=$row1[p_schdis]&tmn=$row1[p_tmplnm]&tmd=$row1[p_tmpldis]&stn=$row1[p_statnnm]&std=$row1[p_statndis]&dvl=$row1[p_devlnm]&orn=$row1[p_orgnnm]&pimg1=$row1[proprty_img1]&pimg2=$row1[proprty_img2]&pimg3=$row1[proprty_img3]'><button>Details</button></a>
              </div>";  
    }
  }
  else
  {
    echo"<h3 align='center'>You had not register any Property.</h3>";
  }
  ?>
</body>
</html>