<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Booking Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    /* General Reset and Styling */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

body {
  background-color: #111; /* Dark background */
  color: #fff;
}

h2, p {
  text-align: center;
  color: #fff;
}

/* Booking Section */
.booking-section {
  background-color: #000; /* Black background */
  padding: 60px 20px;
}

.booking-section h2 {
  font-size: 36px;
  margin-bottom: 10px;
  color: #d32f2f; /* Red heading */
}

.booking-section p {
  font-size: 18px;
  margin-bottom: 30px;
  color: #ccc; /* Light gray text */
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

.booking-form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Input and Select Styles */
.booking-form input[type="text"], 
.booking-form input[type="email"], 
.booking-form input[type="tel"],
.booking-form input[type="date"],
.booking-form select {
  width: 100%;
  max-width: 600px;
  padding: 12px;
  margin-bottom: 20px;
  background-color: #222; /* Dark input fields */
  border: 2px solid #444;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
}

.booking-form input::placeholder {
  color: #bbb; /* Gray placeholder */
}

.booking-form select {
  color: #bbb;
  font-size: 16px;
}

.booking-form select option {
  background-color: #111;
  color: #fff;
}

/* Button Styles */
.booking-form button {
  width: 100%;
  max-width: 600px;
  padding: 12px;
  background-color: #d32f2f; /* Red button */
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.booking-form button:hover {
  background-color: #b71c1c; /* Darker red on hover */
}

/* Animation and Transitions */
.booking-form input, 
.booking-form select, 
.booking-form button {
  opacity: 0;
  animation: fadeIn 0.8s ease-in-out forwards;
}

.booking-form input:nth-child(1) {
  animation-delay: 0.2s;
}

.booking-form input:nth-child(2) {
  animation-delay: 0.4s;
}

.booking-form input:nth-child(3) {
  animation-delay: 0.6s;
}

.booking-form select {
  animation-delay: 0.8s;
}

.booking-form input[type="date"]:nth-child(5) {
  animation-delay: 1s;
}

.booking-form input[type="date"]:nth-child(6) {
  animation-delay: 1.2s;
}

.booking-form button {
  animation-delay: 1.4s;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive */
@media screen and (max-width: 768px) {
  .booking-section {
    padding: 40px 20px;
  }
  
  .booking-form input[type="text"], 
  .booking-form input[type="email"], 
  .booking-form input[type="tel"], 
  .booking-form input[type="date"], 
  .booking-form select, 
  .booking-form button {
    width: 100%;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.backbtn{
    position: absolute;
    left: 4rem;
    font-size: 2rem;
    color: red;
    
}
</style>
</head>
<body>

    <a href="\Car_Booking/index.php"><i class="fa-solid fa-backward backbtn"></i></a>
  <section class="booking-section">
    
    <div class="container">
      <h2>Book Your Car</h2>
      <p>Fill in the details to book your ride</p>
      
      <form class="booking-form" action="" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Contact Number" required>
        <input type="text" name="jou" placeholder="Your journey Name" required>
        <select name="car_type" required>
          <option name="car_type" value="" disabled selected>Select Car Type</option>
          <option name="car_type" value="Sedan">Sedan</option>
          <option name="car_type" value="Suv">SUV</option>
          <option name="car_type" value="Luxury">Luxury</option>
          <option name="car_type" value="Bmw">BMW</option>
        </select>
        <label for="">(  From   )</label>
        <input type="date" name="pickup_date" placeholder="Pick-up Date" required>
        <label for="">(  To  )</label>
        <input type="date" name="dropoff_date" placeholder="Drop-off Date" required>
        
        <button type="submit" name="book">Book Now</button>
      </form>
    </div>
  </section>

  <?php
  
  include("Main_conn.php");

  if(isset($_POST['book']))
  {

    $name = $_POST['name'];
    $emali = $_POST['email'];
    $phone = $_POST['phone'];
    $jour = $_POST['jou'];
    $car_type = $_POST['car_type'];
    $trip_start = $_POST['pickup_date'];
    $trip_end = $_POST['dropoff_date'];

    $sql = "INSERT INTO `car_booking_list`(`Sno`, `user_name`, `User_email`, `u_mobile`, `Journey`, `Car_type`, `trip_start`, `trip_end`,  `u_Status`, `date`)
     VALUES ('$name','$emali','$phone', '$jour','$car_type','$trip_start','$trip_end','pending')";
     
     $data = mysqli_query($conn,$sql);
     if($data)
     {

      echo "<script>alert('( Booking Your Car )')</script>";
      
      
     }
     else
     {
      echo "<script>alert('( Booking Your Car )')</script>";
     }

     $conn->close();
  }


  
  
  
  
  
  
  
  ?>





  <!-- <script>
    // Basic form submission handler
document.querySelector('.booking-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent actual submission
  
  // Display a confirmation alert (or handle the submission)
  alert("Your car booking has been submitted successfully!");
});

  </script> -->
</body>
</html>
