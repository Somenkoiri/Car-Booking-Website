<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Search & Booking System</title>
   <style>
    /* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #1b1b1b;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* Header */
header {
    text-align: center;
    margin-bottom: 30px;
}

h1 {
    color: #ff3b3f;
    margin-bottom: 10px;
}

p {
    color: #ddd;
}

/* Search Section */
.search-section {
    background-color: #2b2b2b;
    padding: 20px;
    border-radius: 10px;
    width: 100%;
    max-width: 500px;
    margin-bottom: 40px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    animation: fadeIn 1s ease-in-out;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    color: #4caf50;
}

input, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
    background-color: #1b1b1b;
    border: 1px solid #333;
    color: white;
}

button {
    padding: 10px 15px;
    background-color: #ff3b3f;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #4caf50;
}

/* Car Options Section */
.car-options-section {
    width: 100%;
    max-width: 1100px;
    margin-top: 20px;
}

.cars-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.car-card {
    background-color: #2b2b2b;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.car-card img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 15px;
}

.car-card h3 {
    color: #ff3b3f;
    margin-bottom: 10px;
}

.car-card p {
    color: #ddd;
    margin-bottom: 15px;
}

.book-btn {
    padding: 10px 15px;
    background-color: #ff3b3f;
    border: none;
    color: white;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.book-btn:hover {
    background-color: #4caf50;
    transform: scale(1.05);
}

.car-card:hover {
    transform: scale(1.03);
}

/* Keyframes for Animation */
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
    .cars-grid {
        grid-template-columns: 1fr;
    }
}

   </style>
</head>
<body>
    <header>
        <h1>Find and Book Your Car</h1>
        <p>Select the best car for your journey and book it instantly.</p>
    </header>

    <!-- Search Section -->
    <section class="search-section">
        <form id="searchForm">
            <div class="form-group">
                <label for="searchJourney">Journey Name:</label>
                <input type="text" id="searchJourney" placeholder="Enter journey name" required>
            </div>
            <div class="form-group">
                <label for="carType">Car Type:</label>
                <select id="carType">
                    <option value="all">All Cars</option>
                    <option value="sedan">Sedan</option>
                    <option value="suv">SUV</option>
                    <option value="Hero">Hero</option>
                    <option value="bmw">BMW</option>
                    <option value="Bajja">BAJJA</option>
                    <option value="hatchback">Hatchback</option>
                </select>
            </div>
            <button type="submit">Search Cars</button>
        </form>
    </section>

    <!-- Car Options Section -->
    <section id="carOptions" class="car-options-section">
        <h2>Available Cars</h2>
        <div class="cars-grid">
            <!-- Car Card Template -->
            <!-- This content can be dynamically generated -->
            <div class="car-card" data-type="sedan">
                <img src="Imeage_files/1 (2).jpg" alt="Sedan Car">
                <h3>Sedan</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="bmw">
                <img src="Imeage_files/1 (3).jpg" alt="Bmw Car">
                <h3>BMW</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="Hero">
                <img src="Imeage_files/1 (1).jpg" alt="Bmw Car">
                <h3>Hero</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="Hero">
                <img src="Imeage_files/1 (1).jpg" alt="Bmw Car">
                <h3>Hero</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="Hero">
                <img src="Imeage_files/1 (1).jpg" alt="Bmw Car">
                <h3>Hero</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="Hero">
                <img src="Imeage_files/1 (1).jpg" alt="Bmw Car">
                <h3>Hero</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="Bajja">
                <img src="Imeage_files/1 (5).jpg" alt="Bmw Car">
                <h3>Bajja</h3>
                <p>Comfortable for city rides.</p>
                <button class="book-btn">Book Now</button>
            </div>

            <div class="car-card" data-type="suv">
                <img src="Imeage_files/1 (4).jpg" alt="SUV Car">
                <h3>SUV</h3>
                <p>Perfect for long road trips.</p>
                <button class="book-btn">Book Now</button>
            </div>
            <div class="car-card" data-type="hatchback">
                <img src="Imeage_files/1 (6).jpg" alt="Hatchback Car">
                <h3>Hatchback</h3>
                <p>Compact and fuel-efficient.</p>
                <button class="book-btn">Book Now</button>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const carTypeSelect = document.getElementById('carType');
    const carCards = document.querySelectorAll('.car-card');
    const searchJourney = document.getElementById('searchJourney');

    // AI-like journey name suggestion (basic implementation)
    const journeySuggestions = ["Airport to City Center", "Office to Hotel", "Downtown to Suburbs"];
    searchJourney.addEventListener('focus', function () {
        if (!searchJourney.value) {
            searchJourney.value = journeySuggestions[Math.floor(Math.random() * journeySuggestions.length)];
        }
    });

    // Filter cars by car type
    document.getElementById('searchForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const selectedType = carTypeSelect.value;
        carCards.forEach(function (card) {
            const carType = card.getAttribute('data-type');
            if (selectedType === 'all' || carType === selectedType) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

    </script>
</body>
</html>
