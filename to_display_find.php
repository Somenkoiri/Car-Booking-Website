<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Buttons</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
     
        .mainbody {
            width: 100%;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            
        }

        header {
            background-color: rgb(206, 204, 204);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar ul {
            list-style: none;
            display: flex;
          gap: 6px;
            padding: 15px 0;
        }

        .navbar ul li {
            list-style: none;
            
        }

        .navbar button {
            border-radius: 3px;
            background-color: rgb(40, 5, 5);
            border: none;
            padding: 2px 10px;
            cursor: pointer;
            color: red;

            margin-left:6px;
            height: 28px;
            transition: background-color 0.3s, transform 0.3s,  border-radius 0.3s ;
            font-size: 10px;
        }

        .navbar button:hover {
            background-color: blue;
            color: white;
            transform: scale(1.1);
            border-radius: 8px;
        }

        .navbar button:focus {
            outline: none;
        }

        .content {
            height: 100vh;
            display: none;
            padding: 20px;
            background-color: white;
            margin: 10px 0;
            animation: fadeIn 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Responsive Styling */
        @media (max-width: 768px) {

.navbar {
    width: 100%;
   height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    padding: 12px;
    top: 15px;
    overflow-x:scroll ;

}
            .navbar ul::-webkit-scrollbar{
                 height: 0;
                
                
            }

            .navbar button {
                margin-bottom: 10px;
               
            }
        }
        
/*find car code side*/

.findbox{
    
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
      width: 100%;
      

}

h1 {
    text-align: center;
    margin-top: 20px;
   
}

/* Search Form Styles */
.search-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    gap: 10px;
}

.search-input, select {
    width: 100%;
    max-width: 400px;
    padding: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 40px; /* Space for icons */
}

.input-icon {
    position: relative;
}

.input-icon i {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #888;
}

.search-btn {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
      width: 50%;
    
}

/* Car Listings Styles */
.car-listings {
   
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 20px;
    animation: fadeIn 1s ease forwards;
}

.car-card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
    width: 100%;
    max-width: 300px;
    padding: 15px;
    text-align: center;
    transition: 0.3s;
    
}

.car-card img {
    max-width: 100%;
    border-radius: 10px;
}

.car-card h3 {
    margin: 10px 0;
    font-size: 20px;
}

.car-card p {
    color: #777;
    font-size: 14px;
}

/* Car Details Styles */
.details-section {
    display: none;
    text-align: center;
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    border: 1px solid #ccc;
    animation: fadeIn 1s ease forwards;
}

.details-section.active {
    display: block;
}

.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
} 


/* Responsive Design */
@media (min-width: 600px) {
    .search-section {
        flex-direction: row;
        justify-content: center;
        gap: 20px;
    }

    .search-input, select {
        max-width: none;
        width: 200px;
    }
}

@media (min-width: 1024px) {
    .car-listings {
        max-width: 1200px;
        margin: 20px auto;
    }

    .car-card {
        width: 300px;
    }
}
@keyframes fadeIn {
from {
opacity: 0;
transform: translateY(-20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}

.mybtn{
background-color: red;
transition: background-color 0.3s ease, transform 0.3s ease;
}
.mybtn:hover{
background-color: blue;
transform: scale(1.05);
 color: white;

}

/*menu bick bus code etc*/
.menu-container{
width: 100%;
height: 100px;
display: flex;
  align-items: center;
justify-content: center;
gap: 10px;
flex-wrap: wrap;
}

.menu-item {
width: 100px;
height: 50px;
font-size: 20px;
color: white;
background-color: red;
padding: 20px 40px;
border: none;
border-radius: 10px;
cursor: pointer;
transition: background-color 0.3s ease-in-out;
display: flex;
align-items: center;
justify-content: center;
gap: 10px;
}

.menu-item:hover {
background-color: blue;
animation: shake 0.5s ease;
}

/* Keyframe Animation */
@keyframes shake {
0% { transform: translateX(0); }
25% { transform: translateX(-5px); }
50% { transform: translateX(5px); }
75% { transform: translateX(-5px); }
100% { transform: translateX(0); }
}

/* Responsive Styles */
@media (max-width: 768px) {
.menu-item {
font-size: 30px;
padding: 15px 30px;
}
}

@media (max-width: 480px) {
.menu-item {
font-size: 25px;
padding: 10px 20px;
}
}
/*bus section side*/

.bus{
position: relative;
top: -49.2rem;

}

        
    </style>
</head>

<body>
    <div class="mainbody">
        <header>
            <nav class="navbar">
                <ul>
                    <li><button class="nav-btn" data-section="vintage-car">Vintage Car</button></li>
                    <li><button class="nav-btn" data-section="luxury">Luxury</button></li>
                    <li><button class="nav-btn" data-section="wedding">Wedding</button></li>
                    <li><button class="nav-btn" data-section="flight">Flight Booking</button></li>
                    <li><button class="nav-btn" data-section="hotel">Hotel Booking</button></li>
                    <li><button class="nav-btn" data-section="bus">Bus Booking</button></li>
                    <li><button class="nav-btn" data-section="railway">Railway Booking</button></li>
                </ul>
            </nav>
        </header>

        <!-- Content Sections -->
        <div class="content" id="vintage-car">

            
     <div class="findbox"> 
        
        <h1>Find a Car</h1>
        <div class="menu-container">
            <button class="menu-item">
                <span class="icon">🚗</span> Car
            </button>
            <button class="menu-item">
                <span class="icon ibus">🚌</span> Bus
            </button>
            <button class="menu-item">
                <span class="icon">🚲</span> Bike
            </button>
          
        </div>
    
        <!-- Search Form -->
        <div class="search-section">
            <!-- From City Dropdown with Icon -->
            <div class="input-icon">
                <i class="fas fa-map-marker-alt"></i>
                <select class="search-input" id="fromCity">
                    <option value="">From City</option>
                    <option value="Ranchi, Jharkhand">Ranchi, Jharkhand</option>
                    <option value="Jamshedpur, Jharkhand">Jamshedpur, Jharkhand</option>
                    <option value="Kolkata, West Bengal">Kolkata, West Bengal</option>
                    <option value="Hazaribagh, Jharkhand">Hazaribagh, Jharkhand</option>
                </select>
            </div>
    
            <!-- To City Dropdown with Icon -->
            <div class="input-icon">
                <i class="fas fa-map-marker-alt"></i>
                <select class="search-input" id="toCity">
                    <option value="">To City</option>
                      <option value="Ranchi, Jharkhand">Ranchi, Jharkhand</option>
                    <option value="Jamshedpur, Jharkhand">Jamshedpur, Jharkhand</option>
                    <option value="Kolkata, West Bengal">Kolkata, West Bengal</option>
                    <option value="Hazaribagh, Jharkhand">Hazaribagh, Jharkhand</option>
                </select>
            </div>
    
            <!-- Date Picker with Icon -->
            <div class="input-icon">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" class="search-input" id="date">
            </div>
    
            <!-- Search Button -->
            <button class="search-btn mybtn" onclick="filterCars()">Search</button>
        </div>
    
        <!-- Car Listings -->
        <div class="car-listings" id="carListings">
            <div class="car-card" data-from="Ranchi, Jharkhand" data-to="Jamshedpur, Jharkhand" data-date="2024-09-25" onclick="showDetails('Swift Dzire')">
                <img src="Imeage_files/1 (1).jpg" alt="Tesla Model S">
                <h3>Swift Dzire</h3>
                <p> 2024 | From: Ranchi | To: Jamshedpur</p>
                <button class="search-btn mybtn">Book</button>
            </div>
            <div class="car-card" data-from="Jamshedpur, Jharkhand" data-to="Ranchi, Jharkhand" data-date="2024-09-30" onclick="showDetails('Tata Punch')">
                <img src="Imeage_files/1 (2).jpg" alt="BMW X5">
                <h3>Tata Punch</h3>
                <p> 2023 | From: Jamshedpur | To: Ranchi</p>
                <button class="search-btn mybtn">Book</button>
            </div>
            <div class="car-card" data-from="Kolkata, West Bengal" data-to="Ranchi, Jharkhand" data-date="2024-10-05" onclick="showDetails('Scorpio N')">
                <img src="Imeage_files/1 (3).jpg" alt="Ford Mustang">
                <h3>Scorpio N</h3>
                <p> 2023 | From: Kolkata | To: Ranchi</p>
                <button class="search-btn mybtn">Book</button>
            </div>
            <div class="car-card" data-from="Hazaribagh, Jharkhand" data-to="Ranchi, Jharkhand" data-date="2024-10-05" onclick="showDetails('Grand vitara')">
              <img src="Imeage_files/1 (4).jpg" alt="Ford Mustang">
              <h3>Grand vitara</h3>
              <p>2024 | From: Hazaribagh | To: Ranchi</p>
              <button class="search-btn mybtn">Book</button>
          </div>
        </div>
    
        <!-- Car Details Section -->
        <div class="details-section" id="detailsSection">
            <h2 id="carTitle"></h2>
            <p id="carDetails"></p>
            <a class="back-btn mybtn" onclick="goBack()">Back to Listings</a>
        </div>
    </div>
            <!-- Vintage Car Content -->
             
        </div>
        <div class="content" id="luxury">
            <!-- Luxury Content -->2
        </div>
        <div class="content" id="wedding">
            <!-- Wedding Content -->3
        </div>
        <div class="content" id="flight">
            <!-- Flight Booking Content -->4
        </div>
        <div class="content" id="hotel">
            <!-- Hotel Booking Content -->5
        </div>
        <div class="content" id="bus">
            <!-- Bus Booking Content -->6
        </div>
        <div class="content" id="railway">
            <!-- Railway Booking Content -->7
        </div>
    </div>


    <!-- End points -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Hide all sections initially
            $('.content').hide();

            // Show content based on button click
            $('.nav-btn').on('click', function () {
                var section = $(this).data('section');
                $('.content').hide();  // Hide all sections
                $('#' + section).fadeIn();  // Show the clicked section
            });
        });

    </script>
      <script>
       
        // Car details data
       const carDetailsData = {
           'Swift Dzire': 'The Swift Dzire is an all-electric car with a sleek design and cutting-edge technology. It offers a long range, fast charging, and impressive acceleration. It\'s perfect for those who want to drive a high-tech, eco-friendly vehicle.',
           'Tata Punch': 'The Tata Punch is a luxury SUV with powerful engines, advanced safety features, and a spacious interior. It is the ideal vehicle for family trips or luxury getaways, providing comfort and style in every journey.',
           'Scorpio N': 'The Scorpio N is an iconic sports car known for its high performance, aggressive design, and exciting driving dynamics. It\'s a top choice for those who love speed and style.',
           'Grand vitara': 'The Grand vitara is an all-electric car with a sleek design and cutting-edge technology. It offers a long range, fast charging, and impressive acceleration. It\'s perfect for those who want to drive a high-tech, eco-friendly vehicle.'
           
           
       };

       // Show car details when clicked
       function showDetails(car) {
           document.getElementById('carListings').style.display = 'none'; // Hide car listings
           document.getElementById('detailsSection').classList.add('active'); // Show details section

           // Set car details
           document.getElementById('carTitle').innerText = car;
           document.getElementById('carDetails').innerText = carDetailsData[car];
       }

       // Go back to car listings
       function goBack() {
           document.getElementById('carListings').style.display = 'flex'; // Show car listings
           document.getElementById('detailsSection').classList.remove('active'); // Hide details section
       }

       // Filter cars based on search input
       function filterCars() {
           const fromCity = document.getElementById('fromCity').value.toLowerCase();
           const toCity = document.getElementById('toCity').value.toLowerCase();
           const date = document.getElementById('date').value;

           const carCards = document.querySelectorAll('.car-card');

           carCards.forEach(function(card) {
               const cardFrom = card.getAttribute('data-from').toLowerCase();
               const cardTo = card.getAttribute('data-to').toLowerCase();
               const cardDate = card.getAttribute('data-date');

               // Show only cards that match the search input
               if ((fromCity === '' || cardFrom.includes(fromCity)) &&
                   (toCity === '' || cardTo.includes(toCity)) &&
                   (date === '' || cardDate === date)) {
                   card.style.display = 'block';
               } else {
                   card.style.display = 'none';
               }
           });
       }
   </script>
</body>

</html>