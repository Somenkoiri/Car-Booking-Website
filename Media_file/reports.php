<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 20px;
        }
        .view-report-btn{
            background-color: #ffc107;
        }

        h1 {
            text-align: center;
            color: #ff3d3d;
            margin-bottom: 20px;
            animation: fadeIn 1.2s ease-in-out;
        }

        .reports-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 61, 61, 0.3);
            animation: slideIn 0.8s ease-in-out;
        }

        .report-actions {
            text-align: center;
            margin-bottom: 20px;
        }

        .report-actions button {
            background-color: #ff3d3d;
            border: none;
            color: white;
            padding: 15px 20px;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .report-actions button:hover {
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

        .report-type {
            background-color: #28a745;
            padding: 8px;
            border-radius: 5px;
            color: white;
        }

        td img {
            width: 100px;
            height: auto;
            transition: transform 0.8s ease;
        }

        td img:hover {
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
            table {
                display: block;
                overflow-x: auto;
            }

            th, td {
                white-space: nowrap;
            }

            .report-actions {
                text-align: center;
            }
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
    </style>
</head>
<body>

    <h1>Generate Sales or Booking Reports</h1>

    <div class="reports-container">
        <div class="report-actions">
            <button onclick="alert('Generate Sales Report functionality')">Generate Sales Report</button>
            <button onclick="alert('Generate Booking Report functionality')">Generate Booking Report</button>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Report ID</th>
                    <th>Car Image</th>
                    <th>Report Type</th>
                    <th>Generated On</th>
                    <th>View Report</th>
                </tr>
            </thead>
            
        </table>
    </div>

</body>
</html>
