<?php
include("Main_conn.php");
$rn = $_GET['rn'];

$sql = "DELETE FROM `add_car_to_inventory` WHERE Model='$rn'";
$data = mysqli_query($conn,$sql);

if($data)
{
    
    header('location:car-inventory.php');
}
else
{
    echo "Not delete data";
}



?>
