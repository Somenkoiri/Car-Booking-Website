<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
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

        .booking-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 61, 61, 0.3);
            animation: slideIn 0.8s ease-in-out;
        }

        .action-buttons {
            text-align: right;
            margin-bottom: 15px;
        }

        .action-buttons button {
            background-color: #ff3d3d;
            border: none;
            color: white;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #ff6b6b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #555;
        }

        th {
            background-color: #ff3d3d;
            color: #fff;
        }

        td {
            background-color: #2a2a2a;
        }

        td img {
            width: 100px;
            height: auto;
            transition: transform 0.8s ease;
        }

        td img:hover {
            transform: scale(1.2);
        }

        .booking-action-buttons button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .booking-action-buttons button.cancel {
            background-color: #ff3d3d;
        }

        .booking-action-buttons button:hover {
            background-color: #218838;
        }

        .booking-action-buttons button.cancel:hover {
            background-color: #ff6b6b;
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
            table {
                display: block;
                overflow-x: auto;
            }

            th, td {
                white-space: nowrap;
            }

            .action-buttons {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <h1>Car Drivers Manage</h1>

    <div class="booking-container">
        <div class="action-buttons">
           
            <button onclick="parent.content.location='manage-booking-add-new-clint.php'">Add New Driver</button>

        </div>

        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Car Image</th>
                    <th>Customer Name</th>
                    <th>Joing Date</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("Main_conn.php");
           
            $mysquery = "SELECT * FROM new_client_add_manage";
            $data = mysqli_query($conn,$mysquery);
            $total = mysqli_num_rows($data);
           

            if($total !=0)
            {
                while( $result = mysqli_fetch_assoc($data))
                {
                    echo "<tr>
                 
                   <td>".$result['Customer_ID']."</td>
                <td><img src='".$result['Car_Image']. "' height='50px' width='50px'></td>
                   <td>".$result['Customer_Name']."</td>
                    <td>".$result['Joining_Date']."</td>
                   <td>".$result['Phone_Number']."</td>
                   <td>".$result['Status']."</td>
                    <td class='booking-action-buttons'>
                        <a href='manage-bookings-update.php?sn=$result[Sno] && rn=$result[Customer_ID] && ci=$result[Car_Image] && cn=$result[Customer_Name] && jd=$result[Joining_Date] && pn=$result[Phone_Number] && rs=$result[Status]'><button>Edit</button></a>
                        <a href='car-inventory-delete.php?rn=$result[Customer_ID]' onclick=' return det()' ><button class='cancel' >Remove</button></a>
                        <a><button class='cancel' >Viwes</button></a>
                    </td>
                </tr>";
                }
            }

            ?>



               
            </tbody>
        </table>
    </div>
    <script>
    function det(){
        alert('Your Data delete !');
    }
</script>
</body>
</html>
