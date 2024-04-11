<?php
session_start();
include('include/connection.php');
$member_id = $_SESSION['ADMIN_ID'];
//echo $member_id;
if($_GET["submit"])
{
    $a_name = $_GET["name"];
    $a_address = $_GET["Add"];
    $tel = $_GET["tel"];
    $email = $_GET["email"];

    //UPDATE `db_property`.`tm_admin` SET `admin_name` = 'Mayank Singh',
	//`admin_add` = '20/B Dhanvantri Plaza,near Vidyut',
	//`admin_cont` = '7412589643' WHERE `tm_admin`.`admin_id` =2 LIMIT 1 ;

    $query = "UPDATE tm_admin SET admin_name = '$a_name' , admin_add = '$a_address' ,admin_cont = '$tel' , admin_email = '$email' WHERE admin_id = '$member_id'";
    
    //echo $query;
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
    	header('location:admin_logout.php');
        echo"Record Updated";
    }
    else
    {
        
        echo"Record not update";
    }
}
header('location:admin_logout.php');
?>