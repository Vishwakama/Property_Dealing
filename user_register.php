<?php
    include("include/links.php")
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
            width: 400px;
            length: 700px;
            background-color: #ffe5c9;
            margin-left: 510px;
            margin-top: 70px;
            border-radius: 20px;
        }
        form input[type=text] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            border-radius: 5px;
        }
        form input[type=tel] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            border-radius: 5px;
        }
        form input[type=email] {
            padding: 10px;
            border: 1px solid grey;
            width: 350px;
            margin: 8px;
            border-radius: 5px;
        }
        form input[type=password] {
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
   <form action="db_user_register.php" method="GET" align="center">
        <h3 align="center">User Registration</h3>
        <input type="text" name="name" id="name" placeholder="Enter your name...." required></br>
        <input type="text" name="address" id="address" placeholder="Enter your Address...." required></br>
        <input type="tel" name="contact" id="contact" pattern="[0-9]{10}" placeholder="Enter your Contact no...." required></br>
        <input type="email" name="email" id="email" placeholder="Enter your Email....." required></br>
        <input type="password" name="pass" id="pass" placeholder="Enter your password...." required></br>
        <input type="password" name="re_pass" id="re_pass" placeholder="Re-Enter your password...." required></br>
        <input type="checkbox" onclick="myFunction()" >Show Password
        <input type="checkbox" onclick="myFunction1()" >Show Re-type Password</br>
        <input type="submit" name="register" id="register" value="Register">
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


    function myFunction1() {
	var x = document.getElementById("re_pass");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	}
    //Reason for not working
    $(function () 
    {
        $("#Register").click(function () 
        {
            var password = $("#pass").val();  
            var confirmPassword = $("#re_pass").val();
            if (password != confirmPassword) 
            {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
    </script>
</html>