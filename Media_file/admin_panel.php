
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Dashboard</title>
    <style>
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
    </style>
</head>
<?php
 $us = $_SESSION['uansme'];

 if($us == true)
 {

 }
 else{
    header('location:admin_login.php');
 }

?>

<frameset cols="20%, 80%" border="0" noresize>
    <frame src="admin_left.php" name="sidebar" scrolling="no">
    <frame src="admin_right.php" name="content">
</frameset>

</html>
