<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Menu Navbar</title>
  <style>
    /* General styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  transition: background-color 0.3s ease;
}

/* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem;
  background-color: #333;
  color: white;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo {
  font-size: 1.5rem;
  font-weight: bold;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.nav-links li {
  display: inline-block;
}

.nav-links a {
  text-decoration: none;
  color: white;
  padding: 0.5rem 1rem;
  transition: background-color 0.3s ease;
}

.nav-links a:hover {
  background-color: #555;
  border-radius: 5px;
}

/* Dark Mode Button */
.theme-toggle {
  background-color: #444;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.theme-toggle:hover {
  background-color: #666;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
  .nav-links {
    flex-direction: column;
    display: none;
  }

  .nav-links.active {
    display: flex;
  }

  .navbar {
    flex-direction: column;
  }
}

/* Animations using keyframes */
@keyframes slideIn {
  from {
    transform: translateY(-50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.navbar {
  animation: slideIn 0.5s ease-in-out;
}

/* Dark Mode */
.dark-mode {
  background-color: #111;
  color: #ddd;
}

.dark-mode .navbar {
  background-color: #222;
}

.dark-mode .nav-links a {
  color: #ddd;
}

.dark-mode .nav-links a:hover {
  background-color: #333;
}

  </style>
</head>
<body>
  <header>
    <nav class="navbar">
    <div class="logo"> Maa <br>
    Tour And Travels</div>
      <ul class="nav-links">
        <li><a href='car_display.php' target='right'>Search Car</a></li>
        <li><a href='car_find.php' target='right'>Find Car</a></li>
        <li><a href="#">Add Car</a></li>
        <li><a href="#">Display Car</a></li>
        <li><a href="#">Best Style</a></li>
      </ul>
      <button class="theme-toggle">Dark Mode</button>
    </nav>
  </header>

  <script>
    // Toggle Dark Mode
const themeToggleBtn = document.querySelector('.theme-toggle');
themeToggleBtn.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
});

// Mobile menu toggle for responsive design (optional for smaller screens)
const navLinks = document.querySelector('.nav-links');
document.querySelector('.menu-toggle').addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

  </script>
</body>
</html>
