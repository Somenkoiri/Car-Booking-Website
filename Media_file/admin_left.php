<?php
session_start();
 $us = $_SESSION['uansme'];

 if($us == true)
 {

 }
 else{
    header('location:admin_login.php');
 }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Sidebar Styles (already included in the main style) */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #121212;
        }

        frameset {
            border: none;
            margin: 0;
            padding: 0;
        }

        /* Left Frame (Sidebar) */
        .sidebar {
            background-color: #1c1c1c;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar h2 {
            color: #ff3d3d;
            text-align: center;
        }

        .sidebar button {
            background-color: #2a2a2a;
            color: #ffffff;
            width: 100%;
        

            border: none;
            padding: 15px 20px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
            text-align: left;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .sidebar button:hover {
            background-color: #ff3d3d;
            transform: translateY(-3px);
        }

        /* Right Frame (Main Content Area) */
        .content {
            padding: 20px;
            color: #ffffff;
            background-color: #1c1c1c;
        }

        .content h2 {
            color: #ff3d3d;
            text-align: center;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .content th, .content td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #555;
        }

        .content th {
            background-color: #ff3d3d;
            color: #fff;
        }

        .content td {
            background-color: #2a2a2a;
        }

        .content button {
            
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .content button:hover {
            background-color: #218838;
        }

        /* Animation and Responsive Design */
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
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .content {
            animation: fadeIn 0.8s ease-in-out;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                display: flex;
                flex-direction: column;
                width: 100%;
                height: auto;
            }

            .content {
                margin-top: 20px;
            }
        }
        .my{
            text-decoration: none;
            color: white;
        }
        

        .logout-button {
            width: 100%;
            max-width: 34%;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <button onclick="parent.content.location='admin_right.php'"><i class="fa-solid fa-user-tie"></i> &nbsp; &nbsp;Admin</button>
         <button onclick="parent.content.location='customer-management.php'"><i class="fa-solid fa-person-military-pointing"></i> &nbsp; &nbsp;Customer Management</button>
         
         <button onclick="parent.content.location='car-inventory.php'"><i class="fa-solid fa-car-side"></i> &nbsp; &nbsp;Total Cars</button>
         <button onclick="parent.content.location='manage-bookings.php'"><i class="fa-solid fa-list-check"></i> &nbsp; &nbsp;Car Driver</button>
        <button onclick="parent.content.location='payments.php'"><i class="fa-solid fa-bag-shopping"></i> &nbsp; &nbsp;Payments</button>
        <button onclick="parent.content.location='reports.php'"><i class="fa-solid fa-bug"></i> &nbsp; &nbsp;Reports</button>
        <button class="logout-button">
        <i class="fas fa-sign-out-alt"></i><a class="hi" href="log_out_admin.php" target="_parent">Logout</a>
    </button>
    </div>
    
</body>
</html>
