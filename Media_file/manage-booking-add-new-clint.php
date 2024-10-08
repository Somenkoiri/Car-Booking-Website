<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ff3d3d;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .form-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 61, 61, 0.3);
            animation: slideIn 0.8s ease-in-out;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ff3d3d;
        }

        input[type="text"], input[type="date"], input[type="file"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            background-color: #2a2a2a;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .form-group input[type="file"] {
            background-color: #1c1c1c;
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            background-color: #ff3d3d;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff6b6b;
        }

        .form-group i {
            margin-right: 10px;
            color: #ff3d3d;
        }

        /* Keyframe Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-container {
                padding: 15px;
            }

            input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <h1>Add Booking</h1>

    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Booking ID -->
            <div class="form-group">
                <label for="booking-id"><i class="fas fa-id-card"></i> Customer ID</label>
                <input type="tel" id="booking-id" name="cu_id" placeholder="Enter Booking ID" required>
            </div>

            <!-- Car Image -->
            <div class="form-group">
                <label for="car-image"><i class="fas fa-car"></i> Car Image</label>
                <input type="file" id="car-image" name="mu_file" accept="image/*" required>
            </div>

            <!-- Customer Name -->
            <div class="form-group">
                <label for="customer-name"><i class="fas fa-user"></i> Customer Name</label>
                <input type="text" id="customer-name" name="cu_name" placeholder="Enter customer name" required>
            </div>

            <!-- Joining Date -->
            <div class="form-group">
                <label for="joining-date"><i class="fas fa-calendar-alt"></i> Joining Date</label>
                <input type="date" id="joining-date" name="join" required>
            </div>

            <!-- Phone Number -->
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                <input type="tel" id="phone" name="p_num" placeholder="Enter phone number" required>
            </div>

            <!-- Booking Status -->
            <div class="form-group">
                <label for="status"><i class="fas fa-info-circle"></i> Status</label>
                <select id="status" name="status" required>
                    <option name="status" value="Pending">Pending</option>
                    <option name="status" value="Confirmed">Confirmed</option>
                    <option name="status" value="Cancelled">Cancelled</option>
                </select>
            </div>

            <!-- Actions -->

            <!-- Submit Button -->
            <input type="submit" name="add" value="Add Booking">
        </form>
    </div>

</body>
</html>

<?php
include("Main_conn.php");

if(isset($_POST['add']))
{
    
$img_item =$_FILES['mu_file']['name'];  
$img_tam_name = $_FILES['mu_file']['tmp_name'];
$img_folder = 'imge/'.$img_item;

move_uploaded_file($img_tam_name,$img_folder);

$cu_id = $_POST['cu_id'];
$cu_name = $_POST['cu_name'];
$join = $_POST['join'];
$phone = $_POST['p_num'];
$status = $_POST['status'];

$sql = "INSERT INTO `new_client_add_manage`(`Customer_ID`, `Car_Image`, `Customer_Name`, `Joining_Date`, `Phone_Number`, `Status`) VALUES
 ('$cu_id','$img_folder','$cu_name','$join','$phone','$status')";

$data = mysqli_query($conn,$sql);

if($data)
{

 echo "<script>alert('( Add New Client )')</script>";

}

else
{
  echo "<script>alert('( Not Inset data ! )')</script>";
}

$conn->close();

}


?>