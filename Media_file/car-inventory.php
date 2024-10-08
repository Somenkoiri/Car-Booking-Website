<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Inventory</title>
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

        .inventory-container {
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

        .inventory-action-buttons button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .inventory-action-buttons button.remove {
            background-color: #ff3d3d;
        }

        .inventory-action-buttons button:hover {
            background-color: #218838;
        }

        .inventory-action-buttons button.remove:hover {
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

            td img {
                width: 80px;
            }

            .action-buttons {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <h1>Total Cars</h1>

    <div class="inventory-container">
        <div class="action-buttons">
            <button onclick="parent.content.location='car_inventory_add_form.php'">Add Car</button>
            <button onclick="alert('Update Car functionality')">Update Car</button>
            
        </div>

        <table>
        
            <thead>
                <tr>
                    <th>Car Image</th>
                    <th>Car Name</th>
                    <th>Model</th>
                    <th>To</th>
                    <th>From</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php
            include("Main_conn.php");
           
            $mysquery = "SELECT * FROM add_car_to_inventory";
            $data = mysqli_query($conn,$mysquery);
            $total =mysqli_num_rows($data);
           

            if($total !=0)
            {
                while( $result = mysqli_fetch_assoc($data))
                {
                    echo "<tr>
                    <td><img src='".$result['Car_Image']. "' height='50px' width='50px'></td>
                   <td>".$result['Car_Name']."</td>
                   <td>".$result['Model']."</td>
                    <td>".$result['Available_From']."</td>
                   <td>".$result['Available_To']."</td>
                   <td>".$result['Price']."</td>
                    <td>".$result['Status']."</td>
                    <td class='inventory-action-buttons'>
                        <button>Edit</button>
                        <a href='car-inventory-delete.php?rn=$result[Model]' onclick=' return det()' ><button class='remove'>Remove</button></a>
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
