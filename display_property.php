<?php
    include("include/links.php");
    include('include/connection.php');    
    $get=$_GET['Search'];
    $get1=$_GET['type'];
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
        table{
            width: 850px;
            height: 180px;
            margin-top: 5px;
            background-color: #ffe5c9;
            border-radius: 20px;
        }
        td{
            margin-top:10px;
        }
        #image{
            border-radius: 20px; 
            border: 1px solid black;
            height: 150px;
            width: 150px;
        }
        button{
            border-radius: 10px;
            width: 110px;
            margin: 2px;
        }
        h3{
            margin-top: 20px;
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
            <a class="nav-link" href="agents.php">AGENTS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="builders.php">BUILDERS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about_us.php" >ABOUT US</a>
        </li>
    </ul>
    </div>
    </nav>
    <h3 align="center">Your searched Properties</h3>
    <?php
    if($get){
		$show = "SELECT * FROM tm_property INNER JOIN tm_image ON tm_property.p_id = tm_image.p_id WHERE tm_property.p_city LIKE '%$get%' OR tm_property.p_locality LIKE '%$get%' AND tm_property.p_type LIKE '%$get1%'";
		$result = mysqli_query($conn,$show);
        while($rows = mysqli_fetch_array($result))
		{
        ?>
    <table align="center">
        <tr align="center">
            <td><img src="<?php echo $rows['proprty_img1']; ?>" alt="" id="image" ></td>
            <td>
                <p><?php echo $rows['p_title']; ?></p>
                <p><?php echo $rows['p_type']; ?> for SELL</p>
                <p><?php echo $rows['p_locality']; ?>,<?php echo $rows['p_city']; ?></p> 
            </td>
            <td>
                <p><?php echo $rows['p_bedroom']; ?></p>
                <p>Area:<?php echo $rows['p_area']; ?></p>
                <p>price:<?php echo $rows['p_price']; ?></p>
            </td>
            <td>
            <?php echo "<a href='full_u_property.php?id=$rows[p_id]&typ=$rows[p_type]&name=$rows[p_title]&ct=$rows[p_city]&loclty=$rows[p_locality]&plnd=$rows[p_landmark]&bldyr=$rows[p_buildyr]&prc=$rows[p_price]&bd=$rows[p_bedroom]&br=$rows[p_bathroom]&hll=$rows[p_hall]&ktn=$rows[p_kitchen]&brm=$rows[p_bathroom]&ar=$rows[p_area]&par=$rows[p_prkarea]&hsn=$rows[p_hosnm]&hsd=$rows[p_hosdis]&scn=$rows[p_schnm]&scd=$rows[p_schdis]&tmn=$rows[p_tmplnm]&tmd=$rows[p_tmpldis]&stn=$rows[p_statnnm]&std=$rows[p_statndis]&dvl=$rows[p_devlnm]&orn=$rows[p_orgnnm]&pimg1=$rows[proprty_img1]&pimg2=$rows[proprty_img2]&pimg3=$rows[proprty_img3]'><button>Details</button></a></br>";?>
                <button>Contact</button>
            </td>
        </tr>
    </table>
    <?php
    }
}
else
{
    echo"<h2>No Property listed in this City or Locality.</h2>";
}
?>
</body>
</html>