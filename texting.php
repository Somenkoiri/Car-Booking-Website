<?php
if (isset($_POST['ok']))
{
    // Get form data
    $user_name = $_POST['u_name'];
    $user_phone = $_POST['c_name'];
    $user_email = $_POST['e_name'];
    $car_type = $_POST['car_type'];
    $pickup_city = $_POST['pickup_city'];
    $drop_city = $_POST['drop_city'];
    $pickup_date = $_POST['pickup_date'];
    $pickup_time = $_POST['pickup_time'];
    $drop_date = $_POST['drop_date'];
    $drop_time = $_POST['drop_time'];
   $myquery = "INSERT INTO `book_vehicle`(`id`, `u_name`, `u_phone`, `u_email`, `car_type`, `pickup_city`, `drop_city`, `pickup_date`, `pickup_time`, `drop_date`, `drop_time`, `u_Status`) VALUES ('[value-1]','$user_name','$user_phone','$user_email','$car_type','$pickup_city','$drop_city','$pickup_date','$pickup_time','$drop_date','$drop_time','pending')";

 
    $data = mysqli_query($conn,$myquery);
    if($data)
    {
        echo "<script>alert('( Booking Your Car )')</script>";
        header('location')
    }
    else{
        echo "<script>alert('( No Inset Data ! )')</script>";
    }
$conn->close();

}
?>
   