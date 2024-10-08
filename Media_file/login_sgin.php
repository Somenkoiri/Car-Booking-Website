<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Sign-Up & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
    /* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  height: 100vh;
  display: flex;
  justify-content: center;

  background-color: #111; /* Dark background */
  color: #fff;
}

.form-container {
  width: 360px;
  position: relative;
  perspective: 1000px;
  margin-top: 2rem;
 
}
.form-container i{
    color: red;
    margin-left: 10rem;
    font-size: 20px;
}

/* Input Styles */
input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  background: #222;
  border: 2px solid #444;
  color: #fff;
  border-radius: 5px;
  font-size: 14px;
}

input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="tel"]::placeholder, input[type="password"]::placeholder {
  color: #bbb;
}

/* Gender Radio Button Styles */
.gender {
  margin: 10px 0;
  display: flex;
  justify-content: space-between;
}

.gender label {
  font-size: 14px;
  cursor: pointer;
}

input[type="radio"] {
  margin-right: 5px;
}

.mybtnss{
    width: 100%;
  padding: 10px;
  margin: 10px 0;
  background-color: #d32f2f; /* Red button */
  border: none;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;

}

/* Button Styles */
button.submit-btn {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  background-color: #d32f2f; /* Red button */
  border: none;
  color: #fff;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button.submit-btn:hover {
  background-color: #b71c1c; /* Darker red on hover */
}

/* Form Styles */
.form {
 
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
  position: absolute;
  width: 100%;
  backface-visibility: hidden;
  transform: rotateY(0deg);
  transition: transform 0.6s ease-in-out;
}

.sign-up {
  transform: rotateY(180deg);
}

#form-toggle:checked ~ .sign-up {
  transform: rotateY(0deg);
}

#form-toggle:checked ~ .login {
  transform: rotateY(-180deg);
}

.toggle-text {
  text-align: center;
  margin-top: 10px;
}

.toggle-text label {
  color: #d32f2f;
  cursor: pointer;
  transition: color 0.3s;
}

.toggle-text label:hover {
  color: #ff5252;
}



 </style>
</head>
<body>

  <div class="form-container">
   
    <!-- Toggle between login and signup forms -->
    <input type="checkbox" id="form-toggle">
   <a href="\Car_Booking/index.php"><i class="fa-solid fa-xmark"></i></a>
    
    <!-- Sign-Up Form -->
   
    <div class="form sign-up">
      <h2>Sign Up</h2>
     <form action="" method="post">
      <input type="text" name="uname" placeholder="Name" required>
      <input type="email" name="uemail" placeholder="Email" required>
      <input type="tel" name="unum" placeholder="Mobile" required>
      
      <div class="gender">
        <label>Gender:</label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </div>
      <input type="text" name="uaddres" placeholder="Address" required>
      <input type="password" name="upass" placeholder="Create New Password" required>
      <button  type="submit" class="mybtnss" name="signup">Sign Up</button>
     </form>
      <p class="toggle-text">Already have an account? <label for="form-toggle">Login here</label></p>

    </div>

    <!-- sign up code in php inside -->

    <?php
      
      include("Main_conn.php");

      if(isset($_POST['signup']))
      {
        $name = $_POST['uname'];
        $email = $_POST['uemail'];
        $mobile = $_POST['unum'];
        $gender = $_POST['gender'];
        $address = $_POST['uaddres'];
        $pass = $_POST['upass'];

        $sqli = "INSERT INTO `user_sign`(`u_name`, `u_email`, `u_mobile`, `u_gender`, `u_address`, `u_password`) VALUES
         ('$name','$email','$mobile','$gender','$address','$pass')";
         
         $data = mysqli_query($conn,$sqli);
         if($data)
         {
            echo "<script>alert('Your Sgin up Suessfully')</script>";
         }
         else 
         {
            echo "Not Send Date ";
         }

         $conn->close();


      }




    ?>




    
    <!-- Login Form -->
   
    <div class="form login">
      <h2>Login</h2>
      <form action="" method="post">
      <input type="email" name="u_em" placeholder="Email" required>
      <input type="password" name="u_pa" placeholder="Password" required>
      <button class="mybtnss" type="submit" name="log">Login</button>
      </form>
      <p class="toggle-text">Don't have an account? <label for="form-toggle">Sign Up</label></p>
    </div>
   
  </div>

 <!-- the php code is login page  -->

 <?php
  include("Main_conn.php");

if(isset($_POST['log']))
{
$uname = $_POST['u_em'];
$upass = $_POST['u_pa'];

$mysq = "SELECT * FROM user_sign WHERE u_email='$uname' && u_password='$upass'";
$data = mysqli_query($conn,$mysq);
$total =mysqli_num_rows($data);

if($total)
{
    echo "<script>alert('( Your Acount Is Log in)')</script>";
}
else
{
     echo "<script>alert('( Your Invalied Both)')</script>";
}


}

?>


  <script>
    // Optional: You can add any custom form validations or behaviors here

// Example: Displaying an alert after form submission (demo purpose)
document.querySelectorAll('.submit-btn').forEach(button => {
  button.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent actual submission
    alert("Form submitted successfully!");
  });
});

  </script>
</body>
</html>
