<?php
include('include/connection.php');
session_start();

    if($_GET["submit"])
    {
        $p_id =  $_GET["id"];
        $p_type =  $_GET["type"];
        $p_title =  $_GET["ptitle"];
        $p_city =  $_GET["city"];
        $p_locality =  $_GET["locality"];
        $p_landmark =  $_GET["landmark"];
        $p_buildyr =  $_GET["build_yr"];
        $p_price = $_GET["price"];
        $p_bedroom = $_GET["bedroom"];
        $p_hall = $_GET["hall"];
        $p_kitchen = $_GET["kitchen"];
        $p_bathroom = $_GET["bathroom"];
        $p_sqft = $_GET["area"];
        $p_psqft = $_GET["parkng_ar"];
        $p_hosptnm = $_GET["hos_nm"];
        $p_hosptdis = $_GET["hos_dis"];
        $p_schnm = $_GET["sch_nm"];
        $p_schdis = $_GET["sch_dis"];
        $p_tmplnm = $_GET["tmpl_nm"];
        $p_tmpldis = $_GET["tmpl_dis"];
        $p_statnnm = $_GET["statn_nm"];
        $p_statndis = $_GET["statn_dis"];
        $p_devlnm = $_GET["devlp_name"];
        $p_orgnsnm = $_GET["orgn_nm"];
        $a_name = $_SESSION["ADMIN_ID"];
        
        //26 Items for insert

        $query = "INSERT INTO tm_property VALUES ('$p_id','$p_type','$p_title','$p_city','$p_locality','$p_landmark','$p_buildyr','$p_price','$p_bedroom','$p_hall','$p_kitchen','$p_bathroom','$p_sqft','$p_psqft','$p_hosptnm','$p_hosptdis','$p_schnm','$p_schdis','$p_tmplnm','$p_tmpldis','$p_statnnm','$p_statndis','$p_devlnm','$p_orgnsnm','$a_name')";
        $total = mysqli_query($conn,$query);
        

        if($total)
        {
            echo"Record Inserted";
            header('location:property_image.php');
        }
        else
        {
            echo"Record not inserted";
        }
    }

?>