<?php
    include("include/links.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        form{
            margin-top: 180px;
            margin-left: 510px;
            width: 380px;
            height: 280px;
            border-radius: 30px;
            border: 1px solid black; 
            background-color: #ffe5c9;
        }
        input[type=email]{
            width: 300px;
            height: 45px;
            padding: 5px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid grey;
        }
        input[type=password]{
            width: 300px;
            height: 45px;
            padding: 5px;
            border-radius: 5px;
            margin: 10px;
            border: 1px solid grey;
        }
        input[type=text]{
            width: 300px;
            height: 45px;
            padding: 5px;
            border-radius: 5px;
            margin: 10px;
            border: 1px solid grey;
        }
        input[type=submit]
        {
            margin-top: 10px;
            width: 150px;
            height: 40px;
        }
        h3{
            margin-top: 5px;
        }
        #signup{
            margin-left: 10px;
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
    <form action="#" method="POST" align="center">
        <h3>User Login</h3>
        <input type="email" name="email" id="email" placeholder="Enter your Email...."></br>
        <input type="password" name="pass" id="pass" placeholder="Enter your Password...."></br>
        <input type="checkbox" name="" onclick="myFunction()"><label for="">Show Password</label>
        <a href="user_register.php" name="signup" id="signup">Don't have account</a></br>
        <input type="submit" name="login" id="login" value="Login">
    </form>
</body>
    <script>
        function myFunction() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
    </script>
</html>