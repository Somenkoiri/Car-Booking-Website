<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
    /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

body {
  background-color: #111; /* Dark background */
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-width: 400px;
}

.login-box {
  background-color: #000; /* Black background */
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.7);
  text-align: center;
  animation: fadeIn 1s ease-in-out;
}

.login-box h2 {
  color: #d32f2f; /* Red heading */
  margin-bottom: 20px;
}

.input-group {
  position: relative;
  margin-bottom: 30px;
}

.input-group input {
  background-color: #222; /* Dark input field */
  border: none;
  border-bottom: 2px solid #444;
  padding: 10px 0;
  color: #fff;
  width: 100%;
  outline: none;
  font-size: 16px;
  transition: border-color 0.3s ease;
}

.input-group input:focus {
  border-bottom-color: #d32f2f; /* Red border on focus */
}

.input-group label {
  position: absolute;
  top: 10px;
  left: 0;
  color: #999;
  font-size: 16px;
  pointer-events: none;
  transition: 0.3s ease;
}

.input-group input:focus + label,
.input-group input:not(:placeholder-shown) + label {
  top: -20px;
  font-size: 12px;
  color: #d32f2f;
}

button {
  background-color: #d32f2f; /* Red button */
  color: #fff;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
}

button:hover {
  background-color: #b71c1c; /* Darker red on hover */
}

#error-message {
  color: #ff6b6b; /* Red error message */
  margin-top: 20px;
  display: none;
}

/* Fade-in Animation */
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive Styling */
@media screen and (max-width: 768px) {
  .login-box {
    padding: 20px;
  }

  .input-group input {
    font-size: 14px;
  }

  button {
    font-size: 14px;
    padding: 10px;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(-20px);
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
  <div class="login-container">
    <div class="login-box">
      <h2>Admin Panel Login</h2>
      <form id="loginForm" method="post">
        <div class="input-group">
          <input type="email" name="u_em" id="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="u_pa" id="password" required>
          <label for="password">Password</label>
        </div>
        <button type="submit" name="log">Login</button>
      </form>
      <p id="error-message"></p>
    </div>
  </div>

  <!-- php code admin panel side -->

  <?php
  include("Main_conn.php");

if(isset($_POST['log']))
{
$uname = $_POST['u_em'];
$upass = $_POST['u_pa'];

$mysq = "SELECT * FROM `login_admin_user` WHERE  u_email='$uname' && u_password='$upass'";
$data = mysqli_query($conn,$mysq);
$total =mysqli_num_rows($data);

if($total == 1)
{    
      $_SESSION['uansme'] = $uname;
   header('location:admin_panel.php');

  
}
   else
     {
     echo "<script>alert('( Your Invalied Both)')</script>";
           }


}

?>
</body>
</html>
