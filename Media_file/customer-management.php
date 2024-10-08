<?php
 include("Main_conn.php");
 error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
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

        .customer-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #1c1c1c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 61, 61, 0.3);
            animation: slideIn 0.8s ease-in-out;
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

       
        .view-button {
            background-color: #ffc107;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .view-button:hover {
            background-color: #218838;
        }

        .queries-button {
            background-color: red;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .queries-button:hover {
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

    <h1>Customer Pending</h1>

    <div class="customer-container">
        <table>
            <thead>
                <tr>
                    <th>#Sno</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Journey</th>
                    <th>Car Type</th>
                    <th>(  From   )</th>
                    <th>(   To   )</th>
                    <th>Status</th>
                    <th>Actions</th>
                 
                  
                </tr>
            </thead>
            <tbody>
                
<?php 
error_reporting(0);
$query = "SELECT * FROM car_booking_list WHERE u_Status= 'Pending' ORDER BY Sno ASC ";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))  { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['Sno']; ?></th>
      <td><?php echo $row['user_name']; ?></td>
      <td><?php echo $row['User_email']; ?></td>
      <td><?php echo $row['u_mobile']; ?></td>
      <td><?php echo $row['Journey']; ?></td>
      <td><?php echo $row['Car_type']; ?></td>
      <td><?php echo $row['trip_start']; ?></td>
      <td><?php echo $row['trip_end']; ?></td>
      <td><?php echo $row['u_Status']; ?></td>


     <td>
		<form action="customer-management.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $row['Sno']; ?>"/>
		<input type="submit" name="approve" style="color: black; font-size: 18px;" class="view-button" value="Approve"> &nbsp 
		 <input type="submit" name="delete" style="color: black; font-size: 18px;"  class="queries-button" value="Delete"> 

		</form>
   </td>
    </tr>
   
  </tbody>
  <?php } ?>
</table>



<?php 
error_reporting(0);
if(isset($_POST['approve']))
{

	$id = $_POST['id'];
	$select = "UPDATE car_booking_list SET u_Status = 'Approved' WHERE Sno = '$id' ";
	$resut = mysqli_query($conn,$select);
	header("location:customer-management.php");
    
    
    $quy = "SELECT * FROM car_booking_list ";
    $qudata = mysqli_query($conn,$quy);

     if($qudata == true) 
     {
    $to = ['User_email'];
    $subject="Form Submitted Successfully";
    $message="Thankyou for contacting us, we will get back to you soon.";
    $header = "From:do-notreply@invikta.in \r\n";
    $header .="Content-type: text/html";
    $mail = mail($to, $subject, $message, $header);
    if($mail == true) 
    {
    echo "Mail Sent";
    }
    }



}


if(isset($_POST['delete'])){

	$id = $_POST['id'];
	$select = "DELETE  FROM car_booking_list  WHERE Sno = '$id' ";
	$resut = mysqli_query($conn,$select);
	header("location:customer-management.php");
}

 ?>
    
<!-- ================================================================== -->



 
&nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp  &nbsp 


<h1 class="text-center  text-white bg-success col-md-12
">APPROVED LIST </h1>

<table class="table table-bordered col-md-12">
 <thead>
   <tr>
                    <th  scope="col" >#Sno</th>
                    <th  scope="col" >Name</th>
                    <th  scope="col" >Email</th>
                    <th  scope="col" >Phone</th>
                    <th  scope="col" >Journey</th>
                    <th  scope="col" >Car Type</th>
                    <th  scope="col" >(  From   )</th>
                    <th  scope="col" >(   To   )</th>
                    <th  scope="col" >Status</th>
                   
   </tr>
 </thead>

<?php 
error_reporting(0);
$query = "SELECT * FROM  car_booking_list ";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result)) { ?>


 <tbody>
   <tr>
     <th><?php echo $row['Sno']; ?></th>
      <td><?php echo $row['user_name']; ?></td>
      <td><?php echo $row['User_email']; ?></td>
      <td><?php echo $row['u_mobile']; ?></td>
      <td><?php echo $row['Journey']; ?></td>
      <td><?php echo $row['Car_type']; ?></td>
      <td><?php echo $row['trip_start']; ?></td>
      <td><?php echo $row['trip_end']; ?></td>
      <td style=" color: #39ff57;"><?php echo $row['u_Status']; ?></td>
   </tr>
 </tbody>

 <?php } ?>

</table>

</body>
</html>
