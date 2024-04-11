<?php
    include('include/links.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAPPY HOME</title>
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
        h2{
            padding: 5px;
        }
        .form{
            width: 800px;
            length: 800px;
            margin-top: 50px;
            margin-bottom: 50px;
            background-color: #ffe5c9;
            margin-left: 370px;
            border-radius: 20px;
            border: 1px solid black;
        }
        form input[type=text] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            border-radius: 5px;
        }
        form input[type=submit] {
            padding: 10px;
            border: 1px solid grey;
            width: 200px;
            margin: 8px;
            border-radius: 5px;
        }
        select{
            padding: 5px;
            border: 1px solid grey;
            width: 350px;
            height: 45px;
            margin: 8px;
            border-radius: 5px;
        }
        #hos_nm{
            border: 1px solid grey;
            width: 180px;
            margin-right: 0px;
            border-radius: 5px 0px 0px 5px;
        }
        #hos_dis{
            border: 1px solid grey;
            width: 163px;
            margin-left: 0px;
            height: 45px;
            border-radius: 0px 5px 5px 0px;   
        }
        #sch_nm{
            border: 1px solid grey;
            width: 180px;
            margin-right: 0px;
            border-radius: 5px 0px 0px 5px;
        }
        #sch_dis{
            border: 1px solid grey;
            width: 163px;
            height: 45px;
            margin-left: 0px;
            border-radius: 0px 5px 5px 0px;   
        }
        #tmpl_nm{
            border: 1px solid grey;
            width: 180px;
            margin-right: 0px;
            border-radius: 5px 0px 0px 5px;
        }
        #tmpl_dis{
            border: 1px solid grey;
            width: 163px;
            height: 45px;
            margin-left: 0px;
            border-radius: 0px 5px 5px 0px;   
        }
        #statn_nm{
            border: 1px solid grey;
            width: 180px;
            margin-right: 0px;
            border-radius: 5px 0px 0px 5px;
        }
        #statn_dis{
            border: 1px solid grey;
            width: 163px;
            height: 45px;
            margin-left: 0px;
            border-radius: 0px 5px 5px 0px;   
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
        <a class="nav-link" href="" ><?php echo $_SESSION["ADMIN_NAME"]; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_logout.php">LOG OUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php" >ABOUT US</a>
      </li>
  </ul>
  </div>
</nav>
    <form action="db_property_register.php" method="get" align="center" class="form" enctype="multipart/data">
    <h4 align="center">Property Registration</h4>
        <select name="type" id="type" required>
            <option value="-1">Select Property Type</option>
            <option value="Flat">Flat</option>
            <option value="Apartment">Apartment</option>
            <option value="Villa">Villa</option>
            <option value="Floor Apartment">Builder Floor Apartment</option>
            <option value="Plot">Residential Land/ Plot</option>
            <option value="Farmhouse">Farm House</option>
        </select></br>
        <input type="text" name="ptitle" id="ptitle" placeholder="Enter Project Name..." required>
        <input type="text" name="city" id="city" placeholder="Enter proprty City..." required></br>
        <input type="text" name="locality" id="locality" placeholder="Enter proprty Locality..." required>
        <input type="text" name="landmark" id="landmark" placeholder="Enter proprty Landmark..."></br>
        <input type="text" name="build_yr" id="build_yr" placeholder="Enter proprty Build Year....">
        <input type="text" id="price" name="price" placeholder="Enter expected price......" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
        </br>
        <select name="bedroom" id="bedroom" required>
            <option value="1-Bedroom">Bedroom</option>
            <option value="1-Bedroom">1 Bedroom</option>
            <option value="2-Bedroom">2 Bedrooms</option>
            <option value="3-Bedroom">3 Bedrooms</option>
            <option value="4-Bedroom">4 Bedrooms</option>
            <option value="More then 4 Bedroom">More then 4</option>
        </select>
        <select name="hall" id="hall">
            <option value="1-Hall">Hall</option>
            <option value="1-Hall">1 Hall</option>
            <option value="2-Hall">2 Halls</option>
            <option value="3-Hall">3 Halls</option>
            <option value="4-Hall">4 Halls</option>
            <option value="More then 4 Hall">More then 4</option>
        </select></br>
        <select name="kitchen" id="kitchen">
            <option value="1-Kitchen">Kitchen</option>
            <option value="2-Kitchen">1 Kitchens</option>
            <option value="3-Kitchen">2 Kitchens</option>
            <option value="4-Kitchen">3 Kitchens</option>
            <option value="More then 4 Kitchen">More then 3</option>
        </select>
        <select name="bathroom" id="bathroom">
            <option value="1-Bathroom">Bathroom</option>
            <option value="1-Bathroom">1 Bathroom</option>
            <option value="2-Bathroom">2 Bathrooms</option>
            <option value="3-Bathroom">3 Bathrooms</option>
            <option value="4-Bathroom">4 Bathrooms</option>
            <option value="More then 4 Bathroom">More then 4</option>
        </select></br>
        <!--<input type="text" name="floor" id="floor" placeholder="Enter floors of property">-->
        <input type="text" name="area" id="area" placeholder="Enter Build Up Area..." required>
        <input type="text" name="parkng_ar" id="parkng_ar" placeholder="Enter Parking Sq/ft Area..."></br>
        <input type="text" name="hos_nm" id="hos_nm" placeholder="Hospital near property....">
        <select name="hos_dis" id="hos_dis">
            <option value="Not Mentioned">Hospital Distance</option>
            <option value="Under 1KM">Under 1 KM</option>
            <option value="Under 2KM">Under 2 KM</option>
            <option value="Under 3KM">Under 3 KM</option>
            <option value="Under 4KM">Under 5 KM</option>
            <option value="Above 4KM">More then 5 KM</option>
        </select>
        <input type="text" name="sch_nm" id="sch_nm" placeholder="School near property....">
        <select name="sch_dis" id="sch_dis">
            <option value="Not Mentioned">School Distance</option>
            <option value="Under 1KM">Under 1 KM</option>
            <option value="Under 2KM">Under 2 KM</option>
            <option value="Under 3KM">Under 3 KM</option>
            <option value="Under 5KM">Under 5 KM</option>
            <option value="Above 5KM">More then 5 KM</option>
        </select>
        <input type="text" name="tmpl_nm" id="tmpl_nm" placeholder="Temple near property....">
        <select name="tmpl_dis" id="tmpl_dis">
            <option value="Not Mentioned">Temple Distance</option>
            <option value="Under 1KM">Under 1 KM</option>
            <option value="Under 2KM">Under 2 KM</option>
            <option value="Under 3KM">Under 3 KM</option>
            <option value="Under 5KM">Under 5 KM</option>
            <option value="Above 5KM">More then 5 KM</option>
        </select>
        <input type="text" name="statn_nm" id="statn_nm" placeholder="Station from property...">
        <select name="statn_dis" id="statn_dis">
            <option value="Not Mentioned">Station Distance</option>
            <option value="Under 1KM">Under 1 KM</option>
            <option value="Under 2KM">Under 2 KM</option>
            <option value="Under 3KM">Under 3 KM</option>
            <option value="Under 5KM">Under 5 KM</option>
            <option value="Above 5KM">More then 5 KM</option>
        </select>
        </br>
        <input type="text" name="devlp_name" id="devlp_name" placeholder="Enter developer name..." required>
        <input type="text" name="orgn_nm" id="orgn_nm" placeholder="Enter organisation that develope Property..."></br>
        <input type="submit" value="submit" name="submit" id="submit">
    </form>
</body>
</html>