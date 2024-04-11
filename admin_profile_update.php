<!DOCTYPE html>
<?php include("include/links.php"); 
session_start();
$conn = mysqli_connect("localhost","root","","db_property");
?>
<html>
<head>
	<title>HAPPY HOME</title>
	<link href="include/header.css" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url("image/francesca-tosolini-6japTIjUQoI-unsplash.jpg");
		    background-repeat: no-repeat;
		    background-attachment: scroll;
		    background-position: center center;
		    margin-bottom: 200px;
		    background-attachment: fixed;
		    background-size: 100% 900px;
		}
		form{
        width: 400px;
        background-color: #ffe5c9;
        margin-left: 510px;
        margin-top: 100px;
        border-radius: 20px;
        border: 1px solid black;
    }
        form input[type=text] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            margin-left: 25px;
            border-radius: 5px;
        }
        form input[type=email] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            margin-left: 25px;
            border-radius: 5px;
        }
        form input[type=tel] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            border-radius: 5px;
            margin-left: 25px;
        }
        form input[type=submit] {
            padding: 10px;
            border: 1px solid grey;
            width: 200px;
            margin: 8px;
            border-radius: 5px;
            margin-left: 100px;
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
	<?php 
  		$member_id = $_SESSION["ADMIN_ID"];
  		$result1 = mysqli_query($conn,"SELECT * FROM tm_admin WHERE admin_id ='$member_id'");
  		if(mysqli_num_rows($result1) > 0)
     	{
        	while($row1 = mysqli_fetch_assoc($result1))
        	{
  ?>
		<form action="db_ad_profile_update.php" method="GET">
			<h3 align="center">Update Personal Details</h3>
			<input type="text" name="name" value="<?php echo $row1['admin_name']; ?>">
			<input type="text" name="Add" value="<?php echo $row1['admin_add']; ?>"></br>
			<input type="tel" name="tel" value="<?php echo $row1['admin_cont']; ?>">
			<input type="email" name="email" value="<?php echo $row1['admin_email']; ?>"></br>
			<input type="submit" name="submit" id="submit">
		</form>
</body>
<?php
   	}
      }
      else
      {
        echo"<h3 align='center'>You are not logged in.</h3>";
      }
?>
</html>