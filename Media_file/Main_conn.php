
<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "car_booking";

$conn = mysqli_connect($server,$username,$password,$db_name);

if($conn)
{
    // echo "Youre Databace Connected";
}
else
{
    echo "Youre Databace Not Connected";
}

?>