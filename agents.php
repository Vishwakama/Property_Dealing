<?php
  include("include/links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    table{
        width: 800px;
        length: 800px;
        background-color: #ffe5c9;
        margin-top: 50px;
        border-radius: 20px;
    }
    td{
      margin-top:10px;
    }
    #image{
        border-radius:50%; 
        border: 1px solid black;
        height: 150px;
        width: 150px;
    }
    button{
        border-radius: 10px;
    }
    </style>
</head>
<body>
<?php
  session_start();
  
?>
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
    <table align="center">
        <tr><td colspan="3"><h4 align="center">Our Agents</h4></td></tr>
        <tr align="center">
            <td><img src="image/60065866_2138811926210043_199929885815209984_n.jpg" alt="" id="image" ></td>
            <td><h5>Bipin Vishwakarma</h5>
            <p>bipinvishwakarma@gmail.com</p>
            <p>9856321478</p>
            </td>
            <td>
                <button>View Details</button>
            </td>
        </tr>
        <tr align="center">
            <td><img src="image/2.jpg" alt="" id="image" ></td>
            <td><h5>Mayank Vishwakarma</h5>
            <p>mayank23@gmail.com</p>
            <p>9652314785</p>
            </td>
            <td>
                <button>View Details</button>
            </td>
        </tr>
        <tr align="center">
            <td><img src="image/3.jpg" alt="" id="image" ></td>
            <td><h5>Risabh Vishwakarma</h5>
            <p>risabh13@gmail.com</p>
            <p>856985625</p>
            </td>
            <td>
                <button>View Details</button>
            </td>
        </tr>
    </table>
</body>
  </html>