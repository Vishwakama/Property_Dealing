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
            width: 400px;
            background-color: #ffe5c9;
            margin-left: 510px;
            margin-top: 100px;
            border-radius: 20px;
            border: 1px solid black;
        }
        label{
            font-size: 20px;
            margin: 4px;
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
        form input[type=password] {
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
        form input[type=submit] {
            padding: 10px;
            border: 1px solid grey;
            width: 200px;
            margin: 8px;
        }
        #message {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }
        #message p {
            padding: 5px 15px;
            font-size: 13px;
        }
        .valid {
            color: green;
        }
        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
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
            <a class="nav-link" href="#">RENT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">BUY</a>
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
    <form action="db_admin_regist.php" method="GET" align="center">
        <h4 align="center">Registration</h4>
        <input type="radio" name="profession" required value="Owner" value="owner">
        <label>Owner</label>
        <input type="radio" name="profession" required value="Agent" value="Agent">
        <label>Agent</label>
        <input type="radio" name="profession" required value="Builder" value="Builder">
        <label>Builder</label>
        <input type="text" required name="a_name" id="a_name" placeholder="Enter your name...."></br>
        <input type="text" required name="a_address" id="a_address" placeholder="Enter your Address...."></br>
        <input type="tel" required name="tel" id="tel" pattern="[0-9]{10}" placeholder="Enter your contact No....."></br>
        <input type="email" required name="email" id="email" placeholder="Enter your Email...." />
        <input type="password" required name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your password...."></br>
        <div id="message">
            <h4>Password must contain the following:</h4>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="letter" class="invalid">A <b>small (lowercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Atlest <b>8 characters</b></p>
        </div>
        <input type="password" name="re_pass" id="re_pass" placeholder="Enter your password again...."></br>
        <input type="checkbox" onclick="myFunction()" >Show Password
        <input type="checkbox" onclick="myfunction1()">Show Re-type Password</br>
        <input type="submit" name="submit" id="register" value="Register"> 
    </form>
</body>
    <script>
    var myInput = document.getElementById("pass");
	var letter = document.getElementById("letter");
	var capital = document.getElementById("capital");
	var number = document.getElementById("number");
	var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
	myInput.onfocus = function() {
		document.getElementById("message").style.display = "block";
	}

// When the user clicks outside of the password field, hide the message box
	myInput.onblur = function() {
		document.getElementById("message").style.display = "none";
	}

// When the user starts to type something inside the password field
	myInput.onkeyup = function() {
// Validate lowercase letters
	var lowerCaseLetters = /[a-z]/g;
	if(myInput.value.match(lowerCaseLetters)) {  
		letter.classList.remove("invalid");
		letter.classList.add("valid");
	} else {
		letter.classList.remove("valid");
		letter.classList.add("invalid");
	}
  
 // Validate capital letters
	var upperCaseLetters = /[A-Z]/g;
	if(myInput.value.match(upperCaseLetters)) {  
		capital.classList.remove("invalid");
		capital.classList.add("valid");
	} else {
		capital.classList.remove("valid");
		capital.classList.add("invalid");
	}

  // Validate numbers
	var numbers = /[0-9]/g;
	if(myInput.value.match(numbers)) {  
		number.classList.remove("invalid");
		number.classList.add("valid");
	} else {
		number.classList.remove("valid");
		number.classList.add("invalid");
	}
  
 // Validate length
	if(myInput.value.length >= 8) {
		length.classList.remove("invalid");
		length.classList.add("valid");
	} else {
		length.classList.remove("valid");
		length.classList.add("invalid");
	}
	}

    //Show PAssword
    function myFunction() {
	var x = document.getElementById("pass");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	}
	function myfunction1() {
	var x = document.getElementById("re_pass");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	}

    //Match Password
    $(function () {
        $("#register").click(function () {
            var password = $("#pass").val();  
            var confirmPassword = $("#re_pass").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
    </script>
</html>