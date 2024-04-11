<?php
    include("connection.php");
    if(isset($_SESSION["ADMIN_ID"])) 
    {
        $result = mysqli_query($conn,"SELECT admin_id FROM `tm_admin` WHERE `admin_id`='".$_SESSION["ADMIN_ID"]."' LIMIT 1");
        if(mysqli_num_rows($result)) 
        {
        $row = mysqli_fetch_array($result);
        $_SESSION["logged"] = $row["admin_id"];
        }
    }
?> 