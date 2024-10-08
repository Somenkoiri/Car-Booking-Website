<?php
include("Main_conn.php");

$sno = $_POST['u_sno'];
$cu_id = $_POST['cu_id'];
$cu_name = $_POST['cu_name'];
$join = $_POST['join'];
$phone = $_POST['p_num'];
$status = $_POST['status'];
$img_item =$_FILES['mu_file']['name'];  
$img_tam_name = $_FILES['mu_file']['tmp_name'];
$img_folder = 'imge/'.$img_item;

move_uploaded_file($img_tam_name,$img_folder);


?>

<?php

if(isset($_POST['add']))
{

    $mysq = "UPDATE `new_client_add_manage` SET `Sno`='$sno',`Customer_ID`='$cu_id',
    `Car_Image`='$img_folder',`Customer_Name`='$cu_name',`Joining_Date`='$join',`Phone_Number`='$phone',
    `Status`='$status' WHERE `Sno`='$sno'";

    $data = mysqli_query($conn,$mysq);

if($data)
{
    header("location:manage-bookings.php");
}
else
{
    echo "not updated";
}


   

}

?>