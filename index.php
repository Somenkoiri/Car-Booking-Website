<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .icao{
            display: none;

        }
        /* Responsive Design */
@media (max-width: 903px)
{
     nav{
        display: none;
     }
     .icao{
            display: block;
            font-size: 2rem;
            
        }
     
}
.sidebari{
    width: 100%;
    height: 40vh;
    position: absolute;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 6rem;
}
.sidebari header{
  width: 100%;
  height: 40vh;
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  

}
.sidebari header nav
{
 display: block;
 margin-top: -4rem;

 
}

.sidebari header nav ul{
    height: 40vh;
    margin-top: 3rem;
   
   
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
    
}



    </style>

</head>
<body>

<!-- login form and sgin up form the code -->

    <!-- Header Section -->
<div class="sidebari">
    <header id="homen">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="car_find_frem.php">Find Car</a></li>
                <li><a href="#Service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="Media_file/admin_login.php">Admin</a></li>
                <li><a href="#contact">
                    <div class="auth-buttons1">
                    <button class="btn signup-btn"><a href="Media_file/login_sgin.php"><i class="fa-solid fa-user"></i>Registration</a></button>
                   
                </div> </a></li>
            </ul>
        </nav>
      
    </header>
</div>

    <header>
        <div class="logo"><span style="color:red;">Somen</span><br>
            Coder And Travels
</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="car_find_frem.php">Find Car</a></li>
                <li><a href="#Service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="Media_file/admin_login.php">Admin</a></li>
                <li><a href="#contact">
                    <div class="auth-buttons1">
                    <button class="btn signup-btn"><a href="Media_file/login_sgin.php"><i class="fa-solid fa-user"></i>Registration</a></button>
                   
                </div> </a></li>
            </ul>
        </nav>
        <i class="fa-solid fa-bars icao" id="btnh" ></i>
    </header>
 

    <!-- Hero Section -->
    <section id="home" class="hero-section myhome">

    <section class="video-section" id="draggable-section">
    <video id="autoplayVideo" autoplay muted loop>
      <source src="Imeage_files/2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </section>

        <h1>Find Your Perfect Car</h1>
        <p>Book your car easily and quickly with us</p>
        <a href="Media_file/booking_car_form.php" class="btn1">Book Now</a>
  
    
    </section>

    <!-- Featured Cars Section -->
    <section id="cars" class="cars-section">
        <h2>Our Featured Cars</h2>
        <div class="car-grid">
            <div class="car-item">
                <img src="Imeage_files/erik-mclean-TXZQOpkwZh0-unsplash.jpg" alt="Car 1">
                <h3>Car 1</h3>
                <p>Luxury Sedan</p>
            </div>
            <div class="car-item">
                <img src="Imeage_files/gabriel-gurrola-u6BPMXgURuI-unsplash.jpg" alt="Car 2">
                <h3>Car 2</h3>
                <p>Sports Convertible</p>
            </div>
            <div class="car-item">
                <img src="Imeage_files/peter-broomfield-m3m-lnR90uM-unsplash.jpg" alt="Car 3">
                <h3>Car 3</h3>
                <p>Off-road SUV</p>
            </div>
        </div>
    </section>

    <!-- Booking Form -->
    <section id="contact" class="contact-section">
        <div class="container">
          <h2>Contact Us</h2>
          <p>Feel free to reach out to us!</p>
          
          <form class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </section>

      
        

    <h1 id="Service">Cars Service</h1>

<div class="featured-container">
    <div class="featured-cars">
        <!-- Car 1 -->
        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 1">
            <div class="car-info">
                <h3>Ferrari F8</h3>
                <p>V8 engine, 710 HP, 0-60 in 2.9 seconds.</p>
                <p class="price">Rs :275,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

        <!-- Car 2 -->
        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 2">
            <div class="car-info">
                <h3>Lamborghini Huracan</h3>
                <p>V10 engine, 631 HP, top speed 202 mph.</p>
                <p class="price">Rs :310,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

        <!-- Car 3 -->
        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 3">
            <div class="car-info">
                <h3>Porsche 911</h3>
                <p>Flat-six engine, 443 HP, luxury interior.</p>
                <p class="price">Rs :150,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 3">
            <div class="car-info">
                <h3>Porsche 911</h3>
                <p>Flat-six engine, 443 HP, luxury interior.</p>
                <p class="price">Rs :150,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 3">
            <div class="car-info">
                <h3>Porsche 911</h3>
                <p>Flat-six engine, 443 HP, luxury interior.</p>
                <p class="price">Rs :150,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

        <!-- Car 4 -->
        <div class="car-card">
            <img src="Imeage_files/carss.jpg" alt="Car 4">
            <div class="car-info">
                <h3>BMW M8</h3>
                <p>V8 engine, 617 HP, advanced tech features.</p>
                <p class="price">Rs :130,000</p>
                <button class="btn-explore">Explore</button>
            </div>
        </div>

    </div>
</div>
      
  <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 CarRental. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
    <script>
        
let menu = document.querySelector("#btnh");
let leftside = document.querySelector("#homen");



let openClose = 0;


menu.addEventListener("click",function(){

 
   if(openClose==0){

    leftside.style.display="none";
  
   
    openClose = 1;

   }else{

    leftside.style.display="block";

    openClose=0;
   }
})
    </script>
</body>
</html>
