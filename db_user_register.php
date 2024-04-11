<?php
    include('include/connection.php');
    if($_GET["register"])
    {
        $id =  $_GET["id"];
        $a_name = $_GET["name"];
        $a_address = $_GET["address"];
        $tel = $_GET["contact"];
        $email = $_GET["email"];
        $pass = $_GET["pass"];
        
        $query = "INSERT INTO tm_user VALUES ('$id','$a_name','$a_address','$tel','$email','$pass')";
        $total = mysqli_query($conn,$query);
        
        if($total)
        {
            echo"Record Inserted";
            header('location:user_login.php');
        }
        else
        {
            echo"Record not inserted";
        }
    }
    header('location:user_login.php');
?>