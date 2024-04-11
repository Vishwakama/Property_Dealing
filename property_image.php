<?php
    include("include/links.php");
    include('include/connection.php');
    session_start();
    //$p_id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAPPY HOME</title>
</head>
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
            margin-top: 90px;
            background-color: #ffe5c9;
            margin-left: 370px;
            border-radius: 20px;
            border: 1px solid black;
        }
        #profileDisplay{
            height:200px; 
            width:200px; 
            border-radius:50%;
            margin: 5px;
        }
        #profileDisplay1{
            height:200px; 
            width:200px; 
            border-radius:50%;
            margin: 5px;
        }
        #profileDisplay2{
            height:200px; 
            width:200px;
            border-radius:50%;
            margin: 5px;
        }
        form input[type=submit] {
            padding: 10px;
            border: 1px solid grey;
            width: 200px;
            margin: 8px;
            border-radius: 5px;
        }
    </style>
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
    <form action="db_property_image.php" class="form" method= "post" align="center" enctype="Multipart/form-data">
        <h4 align="center">UPLOAD IMAGE</h4>
        <img src="image/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg" onClick="triggerClick()" id="profileDisplay" required name="image">
        <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
        <img src="image/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg" onClick="triggerClick1()" id="profileDisplay1" required name="image">
        <input type="file" name="profileImage1" onChange="displayImage1(this)" id="profileImage1" class="form-control" style="display: none;">
        <img src="image/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg" onClick="triggerClick2()" id="profileDisplay2" required name="image">
        <input type="file" name="profileImage2" onChange="displayImage2(this)" id="profileImage2" class="form-control" style="display: none;">
        <input type="submit" value="uploadimage" name="submit">
    </form>
</body>
<?php
/*if($_POST['submit'])
{
    $filename = $_FILES["profileImage"]["name"];
    $tempname = $_FILES["profileImage"]["tmp_name"];
    $filename1 = $_FILES["profileImage1"]["name"];
    $tempname1 = $_FILES["profileImage1"]["tmp_name"];
    $filename2 = $_FILES["profileImage2"]["name"];
    $tempname2 = $_FILES["profileImage2"]["tmp_name"];
    $folder = "p_imges/".$filename;
    move_uploaded_file($tempname,$folder);
    $folder1 = "p_imges/".$filename1;
    move_uploaded_file($tempname1,$folder1);
    $folder2 = "p_imges/".$filename2;
    move_uploaded_file($tempname2,$folder2);

    $query1 = "INSERT INTO TM_IMAGE VALUES ('','$p_id','$folder','$folder1','$folder2')";
    $data1 = mysqli_query($conn, $query1);
    
    if($data1)
    {
        echo "record Inserted";
        header("location:admin_profile.php");
    }
    else
    {
        echo "Record not insert";
    }
}*/
?>
<script>
        function triggerClick(e) {
        document.querySelector('#profileImage').click();
        }
        function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
        }
        
        function triggerClick1(e) {
        document.querySelector('#profileImage1').click();
        }
        function displayImage1(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#profileDisplay1').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
        }

        function triggerClick2(e) {
        document.querySelector('#profileImage2').click();
        }
        function displayImage2(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
            document.querySelector('#profileDisplay2').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
        }
    </script>
</html>