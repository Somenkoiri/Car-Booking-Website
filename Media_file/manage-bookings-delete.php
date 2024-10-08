<?php
include("Main_conn.php");
$rn = $_GET['rn'];

$sql = "DELETE FROM `new_client_add_manage` WHERE Customer_ID='$rn'";
$data = mysqli_query($conn,$sql);

if($data)
{
    
    header('location:manage-bookings.php');
}
else
{
    echo "Not delete data";
}



?>
