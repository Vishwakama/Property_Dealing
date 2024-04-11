<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      session_start();
    ?>
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
      width: 850px;
      height: 830px;
      background-color: White;
      border-radius: 10px;
      border: 2px solid black;
    }
    .image1{
      margin-top: 20px;
      margin-left: 280px;
      border: 2px solid black;
    }
    .image2{
      margin-left: 110px;
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
  <div class="container2">
      <img src="<?php echo $_GET['pimg1']; ?>" alt="" height="250px" width="250px" class="image1"></br>
        <div class="image2">
          <a href="<?php echo $_GET['pimg2']; ?>"><img src="<?php echo $_GET['pimg2']; ?>" alt="" height="70px" width="70px" class="image2"></a>
          <a href="<?php echo $_GET['pimg3']; ?>"><img src="<?php echo $_GET['pimg3']; ?>" alt="" height="70px" width="70px" class="image2"></a>
        </div>
        <h4 align="center"><input type="text" id="name" name="name" disabled="disabled" value="<?php echo $_GET['name']; ?>"><input type="checkbox" id="chkname" onclick="EnableDisableTextBox1(this)" /></h4>
        <p align="center"><input type="text" name="type" id="type" disabled="disabled" value="<?php echo $_GET['typ'];?>"> for SELL</p>
        <div class="details1" align="center">
          <p><input type="text" name="hall" id="hall" value="<?php echo $_GET['hll']; ?>" disabled="disabled"><input type="checkbox" id="chkhall" onclick="EnableDisableTextBox2(this)" /><input type="text" name="bedroom" id="bedroom" value="<?php echo $_GET['bd'];?>" disabled="disabled"><input type="checkbox" id="bdrm" onclick="EnableDisableTextBox4(this)" /></p>
          <p><input type="text" name="kitchen" id="kitchen" value="<?php echo $_GET['ktn']; ?>" disabled="disabled"><input type="checkbox" id="chkktn" onclick="EnableDisableTextBox3(this)" /><input type="text" name="bathroom" id="bathroom" value="<?php echo $_GET['br'];?>" disabled="disabled"><input type="checkbox" id="bathrm" onclick="EnableDisableTextBox5(this)" /></p>
          <p><input type="text" name="hosnm" id="hosnm" value="<?php echo $_GET['hsn']; ?>" disabled="disabled"><input type="text" name="hosdis" id="hosdis" value="<?php echo $_GET['hsd'];?>" disabled="disabled"></p>
          <p><input type="text" name="schnm" id="schnm" value="<?php echo $_GET['scn']; ?>" disabled="disabled"><input type="text" name="schdis" id="schdis" value="<?php echo $_GET['scd'];?>" disabled="disabled"></p>
          <p><input type="text" name="tmpnm" id="tmpnm" value="<?php echo $_GET['tmn']; ?>" disabled="disabled"><input type="text" name="tmpldis" id="tmpldis" value="<?php echo $_GET['tmd']; ?>" disabled="disabled"></p>
		  <p><input type="text" name="statnnm" id="statnnm" value="<?php echo $_GET['stn']; ?>" disabled="disabled"><input type="text" name="statndis" id="statndis" value="<?php echo $_GET['std']; ?>" disabled="disabled"></p>
		</div>
        <div class="details2" align="center">
		  <p>Add:<input type="text" name="localty" id="localty" disabled="disabled" value="<?php echo $_GET['loclty'].",".$_GET['ct']; ?>"></p>
          <p>Price:<input type="text" name="price" id="price" disabled="disabled" value="<?php echo $_GET['prc']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"><input type="checkbox" id="prc" onclick="EnableDisableTextBox6(this)" /></p>
          <p>Area: <input type="text" name="area" id="area" disabled="disabled" value="<?php echo $_GET['ar']; ?>"><input type="checkbox" id="are" onclick="EnableDisableTextBox8(this)" /></p>
          <p>Parking Area: <input type="text" name="park_ar" disabled="disabled" id="park_ar" value="<?php echo $_GET['par']; ?>"><input type="checkbox" id="pare" onclick="EnableDisableTextBox7(this)" /></p>
          <p>Developed by <input type="text" name="devlnm" id="devlnm" value="<?php echo $_GET['dvl']; ?>" disabled="disabled"></p>
          <p>Organisation <input type="text" name="orgnnm" id="orgnnm" value="<?php echo $_GET['orn']; ?>" disabled="disabled"></p>
        </div>
    </div>
  </div>
</body>
  <script type="text/javascript">
    function EnableDisableTextBox1(chkname) {
        var name = document.getElementById("name");
        name.disabled = chkname.checked ? false : true;
        if (!name.disabled) {
            name.focus();
        }
    }
	function EnableDisableTextBox2(chkhall) {
        var hall = document.getElementById("hall");
        hall.disabled = chkhall.checked ? false : true;
        if (!hall.disabled) {
            hall.focus();
        }
    }
	function EnableDisableTextBox3(chkktn) {
        var kitchen = document.getElementById("kitchen");
        kitchen.disabled = chkktn.checked ? false : true;
        if (!kitchen.disabled) {
            kitchen.focus();
        }
    }
	function EnableDisableTextBox4(bdrm) {
        var bedroom = document.getElementById("bedroom");
        bedroom.disabled = bdrm.checked ? false : true;
        if (!bedroom.disabled) {
            bedroom.focus();
        }
    }
    function EnableDisableTextBox5(bathrm) {
        var bathroom = document.getElementById("bathroom");
        bathroom.disabled = bathrm.checked ? false : true;
        if (!bathroom.disabled) {
            bathroom.focus();
        }
    }
    function EnableDisableTextBox8(are) {
        var area = document.getElementById("area");
        area.disabled = are.checked ? false : true;
        if (!area.disabled) {
            area.focus();
        }
    }
    function EnableDisableTextBox6(prc) {
        var price = document.getElementById("price");
        price.disabled = prc.checked ? false : true;
        if (!price.disabled) {
            price.focus();
        }
    }
    function EnableDisableTextBox7(pare) {
        var park_ar = document.getElementById("park_ar");
        park_ar.disabled = pare.checked ? false : true;
        if (!park_ar.disabled) {
            park_ar.focus();
        }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>