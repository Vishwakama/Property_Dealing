<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="header.css" rel="stylesheet">
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
    form{
       margin-top: 300px;
       margin-left: 380px;
    }
    form input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 40%;
        background: #f1f1f1;
        border-radius: 10px 0px 0px 10px;
    }

    form select{
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 15%;
        background: #f1f1f1;
        border-radius: 0px 0px 0px 0px;
    }
    form input[type=submit] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 15%;
        color: white;
        background-color: #95572d;
        border-radius: 0px 10px 10px 0px;
    }
    h2{
        margin-left: 200px;
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
            <a class="nav-link" href="user_login.php">USER LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="admin_login.php">ADMIN LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about_us.php" >ABOUT US</a>
        </li>
    </ul>
    </div>
    </nav>
    <form class="" action="display_property.php" method="get">
    <h2>Search the property...</h2>
        <input type="text" placeholder="Enter City or Locality name" name="Search">
        <select name="type" id="type">
            <option value="Flat">Property Type</option>
            <option value="Flat">Flat</option>
            <option value="Apartment">Apartment</option>
            <option value="Villa">Villa</option>
            <option value="Floor Apartment">Builder Floor Apartment</option>
            <option value="Plot">Residential Land/ Plot</option>
            <option value="Farmhouse">Farm House</option>
        </select>
           <!--<select name="price">
                <option>Min Budget</option>
                <option value="1,00,000">Rs: 1 Lakhs</option>
                <option value="5,00,000">Rs: 5 Lakhs</option>
                <option value="10,00,000">Rs: 10 Lakhs</option>
                <option value="30,00,000">Rs: 30 Lakhs</option>
                <option value="50,00,000">Rs: 50 Lakhs</option>
                <option value="1,00,00,000">Rs: 1 Carore</option>
                <option value="2,00,00,000">Rs: 2 Carore</option>
                <option value="5,00,00,000">Rs: 5 Carore</option>
                <option value="10,00,00,000">Rs: 10 Carore</option>
                <option value="30,00,00,000">Rs: 30 Carore</option>
                <option value="50,00,00,000">Rs: 50 Carore</option>
            </select>
            <select name="price">
                <option>Max Budget</option>
                <option value="1,00,000">Rs: 1 Lakhs</option>
                <option value="5,00,000">Rs: 5 Lakhs</option>
                <option value="10,00,000">Rs: 10 Lakhs</option>
                <option value="30,00,000">Rs: 30 Lakhs</option>
                <option value="50,00,000">Rs: 50 Lakhs</option>
                <option value="1,00,00,000">Rs: 1 Carore</option>
                <option value="2,00,00,000">Rs: 2 Carore</option>
                <option value="5,00,00,000">Rs: 5 Carore</option>
                <option value="10,00,00,000">Rs: 10 Carore</option>
                <option value="30,00,00,000">Rs: 30 Carore</option>
                <option value="50,00,00,000">Rs: 50 Carore</option>
            </select>-->
        <input type="submit" value="Search" name="search"><i class="fa fa-search"></i>
    </form>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>