<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car to Inventory</title>
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
            max-width: 600px;
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

        input[type="text"], input[type="number"], input[type="file"], select {
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

    <h1>Add Car to Inventory</h1>

    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data" >
            <!-- Car Image -->
            <div class="form-group">
                <label for="car-image"><i class="fas fa-image"></i> Car Image</label>
                <input type="file" id="car-image" name="mu_file" accept="image/*">
            </div>

            <!-- Car Name -->
            <div class="form-group">
                <label for="car-name"><i class="fas fa-car"></i> Car Name</label>
                <input type="text" id="car-name" name="car_name" placeholder="Enter car name" required>
            </div>

            <!-- Car Model -->
            <div class="form-group">
                <label for="car-model"><i class="fas fa-cogs"></i> Model</label>
                <input type="text" id="car-model" name="model_name" placeholder="Enter car model" required>
            </div>

            <!-- From Date -->
            <div class="form-group">
                <label for="from-date"><i class="fas fa-calendar-alt"></i> Available From</label>
                <input type="text" id="from-date" name="a_from" placeholder="YYYY-MM-DD" required>
            </div>

            <!-- To Date -->
            <div class="form-group">
                <label for="to-date"><i class="fas fa-calendar-alt"></i> Available To</label>
                <input type="text" id="to-date" name="a_to" placeholder="YYYY-MM-DD" required>
            </div>

            <!-- Car Price -->
            <div class="form-group">
                <label for="car-price"><i class="fas fa-dollar-sign"></i> Price</label>
                <input type="number" id="car-price" name="price" placeholder="Enter price" required>
            </div>

            <!-- Status -->
            <div class="form-group">
                <label for="status"><i class="fas fa-info-circle"></i> Status</label>
                <select id="status" name="status" required>
                    <option name="status" value="Available">Available</option>
                    <option name="status" value="Booked">Booked</option>
                    <option name="status" value="Maintenance">Maintenance</option>
                </select>
            </div>

            <!-- Submit Button -->
            <input type="submit" name="addbtn" value="Add Car to Inventory">
        </form>
    </div>
</body>
</html>

<?php
include("Main_conn.php");
if(isset($_POST['addbtn']))
{

    $img_item =$_FILES['mu_file']['name'];  
    $img_tam_name = $_FILES['mu_file']['tmp_name'];
    $img_folder = 'imge/'.$img_item;

    move_uploaded_file($img_tam_name,$img_folder);

    $car_name = $_POST['car_name'];
    $car_modal = $_POST['model_name'];
    $a_from = $_POST['a_from'];
    $a_to = $_POST['a_to'];
    $price = $_POST['price'];
    $status = $_POST['status'];

   $sql = "INSERT INTO `add_car_to_inventory`(`Car_Image`, `Car_Name`, `Model`, `Available_From`, `Available_To`, `Price`, `Status`) VALUES
    ('$img_folder','$car_name','$car_modal','$a_from','$a_to','$price','$status')";
    
   $data = mysqli_query($conn,$sql);

   if($data)
   {

    echo "<script>alert('( Add Car To Inventory  )')</script>";

   }

   else
   {
     echo "<script>alert('( Not Inset data ! )')</script>";
   }

   $conn->close();




}




?>
