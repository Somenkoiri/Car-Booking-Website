<?php
include("Main_conn.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Overview</title>
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
            margin-bottom: 30px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            background-color: #1c1c1c;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            flex: 1;
            min-width: 250px;
            box-shadow: 0 0 20px rgba(255, 61, 61, 0.3);
            transition: transform 0.3s;
            animation: slideIn 0.8s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h2 {
            color: #ff3d3d;
            text-align: center;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 24px;
            text-align: center;
            margin: 0;
        }

        .card img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
            transition: transform 0.8s ease;
        }

        .card img:hover {
            transform: scale(1.2);
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
            .dashboard-container {
                flex-direction: column;
                align-items: center;
            }
        }

        .logout-button {
            background-color: #ff3d3d;
            border: none;
            color: white;
            padding: 15px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: fadeIn 1s ease-in-out;
        }

        .logout-button:hover {
            background-color: #ff6b6b;
            transform: scale(1.05);
        }

        .logout-button i {
            margin-right: 10px;
            transition: transform 0.3s ease;
        }

        .logout-button:hover i {
            transform: rotate(360deg);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .logout-button {
                font-size: 16px;
                padding: 10px 15px;
            }
        }
        .hi{
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>

    <h1>Dashboard Overview</h1>

    <div class="dashboard-container">
        <div class="card">
            <img src="https://via.placeholder.com/100x60.png?text=Bookings" alt="Total Bookings">
            <h2>Total Bookings</h2>
            <?php
            $sql = "SELECT * FROM car_booking_list";
            $data = mysqli_query($conn,$sql);
            $total = mysqli_num_rows($data);
            if($data!=0)
            {
                echo "<p>$total</p>";
            }
            ?>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/100x60.png?text=Cars" alt="Total Cars Available">
            <h2>Total Cars Available</h2>
            <?php
            $sql = "SELECT * FROM add_car_to_inventory";
            $data = mysqli_query($conn,$sql);
            $total = mysqli_num_rows($data);
            if($data!=0)
            {
                echo "<p>$total</p>";
            }
            ?>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/100x60.png?text=Earnings" alt="Total Earnings">
            <h2>Total Earnings</h2>
            <p>Rs:50,000</p>
        </div>
    </div>
 
   
</body>
</html>
