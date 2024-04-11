<?php
    include('include/connection.php');
    if($_GET["submit"])
    {
        $id =  $_GET["id"];
        $proff = $_GET["profession"];
        $a_name = $_GET["a_name"];
        $a_address = $_GET["a_address"];
        $tel = $_GET["tel"];
        $email = $_GET["email"];
        $pass = $_GET["pass"];
        
        $query = "INSERT INTO tm_admin VALUES ('$id','$proff','$a_name','$a_address','$tel','$email','$pass')";
        $total = mysqli_query($conn,$query);
        
        if($total)
        {
            echo"Record Inserted";
            header('location:admin_login.php');
        }
        else
        {
            echo"Record not inserted";
        }
    }
    header('location:admin_login.php');
?>