<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments Monitoring</title>
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

        .payments-container {
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

        .status-paid {
            background-color: #28a745;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .status-pending {
            background-color: #ffc107;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .status-overdue {
            background-color: #dc3545;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .payment-action-buttons button {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-action-buttons button.view-invoice {
            background-color: #ffc107;
        }

        .payment-action-buttons button:hover {
            background-color: #218838;
        }

        .payment-action-buttons button.view-invoice:hover {
            background-color: #e0a800;
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

    <h1>Payments Monitoring</h1>

    <div class="payments-container">
        <div class="action-buttons">
            <button onclick="alert('View All Payments functionality')">View All Payments</button>
            <button onclick="alert('Add Payment functionality')">Add Payment</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Invoice ID</th>
                    <th>Car Image</th>
                    <th>Customer Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
        
        </table>
    </div>

</body>
</html>
