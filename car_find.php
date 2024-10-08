<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking Form</title>
  <style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #1b1b1b;
    color: white;
    display: flex;
    justify-content: center;
   
    height: 100vh;
}

/* Container for the Form */
.container {
    background-color: #2b2b2b;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 90%;
    height: 90vh;
    max-width: 400px;
    animation: fadeIn 1.5s ease-in-out;
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Headings */
h1 {
    color: #ff3b3f;
    text-align: center;
    margin-bottom: 20px;
}

/* Form Groups */
.form-group {

   margin: 2px;
}


/* Labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #6e6b6b;
}

/* Inputs */
input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 2px;
    border-radius: 5px;
    border: 1px solid #333;
    background-color: #1b1b1b;
    color: white;
    transition: border-color 0.3s;
}

input:focus, select:focus {
    border-color: #ff3b3f;
}

/* Button Styling */
button {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 5px;
    background-color: #ff3b3f;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

button:hover {
    background-color: #4caf50;
    transform: scale(1.05);
}

/* Animation for Fade In */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        width: 95%;
    }
}

  </style>
</head>
<body>
    <div class="container">
        <h1>Car Available Form</h1>
        <form id="bookingForm" action="" method="post">
            <div class="form-group">
                <input type="text" id="journey" name="jou" placeholder="Enter journey name" required>
            </div>
            <div class="form-group">
                <label for="carType">Car Type:</label>
                <select id="carType" name="car_type" required>

                    <option name="car_type" value="hatchback">Hatchback</option>
                    <option name="car_type" value="Sedan">Sedan</option>
                   <option name="car_type" value="Suv">SUV</option>
                   <option name="car_type" value="Luxury">Luxury</option>
                   <option name="car_type" value="Bmw">BMW</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tripStart">Trip Start:</label>
                <input type="date" id="tripStart" name="pickup_date"  required>
            </div>
            <div class="form-group">
                <label for="tripEnd">Trip End:</label>
                <input type="date" id="tripEnd"   name="dropoff_date" required>
            </div>
            <button type="submit" name="bok"> Find</button>
        </form>
    </div>

      <!-- php code Find car side -->

  <?php
  include("Media_file/Main_conn.php");

if(isset($_POST['bok']))
{
    $jour = $_POST['jou'];
    $car_type = $_POST['car_type'];
    $trip_start = $_POST['pickup_date'];
    $trip_end = $_POST['dropoff_date'];

$mysq = "SELECT * FROM car_booking_list WHERE Journey='$jour' && Car_type='$car_type' && trip_start='$trip_start' && trip_end='$trip_end' ";
$data = mysqli_query($conn,$mysq);
$total =mysqli_num_rows($data);

if($total == 1)

{    echo "<script>alert('( Booking Alrady date ! Try agin to under date )')</script>";
   
 
}
else
{
    header('location:car_find_display_list.php');
}


}

?>













    <script>
//         // Basic AI suggestions for journey names (could be enhanced with more data)
// document.addEventListener("DOMContentLoaded", function () {
//     const journeyInput = document.getElementById("journey");

//     // AI-like journey suggestions (simple implementation)
//     const suggestions = ["Airport to City Center", "Office to Home", "Hotel to Conference"];

//     journeyInput.addEventListener("focus", function () {
//         if (!journeyInput.value) {
//             journeyInput.value = suggestions[Math.floor(Math.random() * suggestions.length)];
//         }
//     });

    // Form Submission
    // const form = document.getElementById("bookingForm");
    // form.addEventListener("submit", function (e) {
    //     e.preventDefault();
    //     alert("Your booking has been confirmed!");
    // });
// });

    </script>
</body>
</html>
