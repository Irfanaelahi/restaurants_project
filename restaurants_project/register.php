<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Elysian Feast Restaurant</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<!-- Header -->

<header class="header">

    <div class="logo">
        <img src="food1.jpg" alt="Restaurant Logo">
    </div>

    <div class="heading">
        <h1>Customer Registration</h1>
        <p>Register to enjoy delicious food and exclusive offers.</p>
    </div>

</header>

<!-- Navigation -->

<nav class="menubar">

    <ul>
        <li><a href="home.php">🏠 Home</a></li>
        <li><a href="about.php">📖 About</a></li>
        <li><a href="service.php">🍽️ Services</a></li>
        <li><a href="contact.php">📞 Contact</a></li>
        <li><a href="register.php">📝 Register</a></li>
    </ul>

</nav>

<!-- Registration Form -->

<section class="content">

<h2>Registration Form</h2>

<form action="connect.php" method="post">

<label>Full Name</label>
<input type="text" name="n" placeholder="Enter your full name" required>

<br><br>

<label>Age</label>
<input type="number" name="a" min="1" max="100" required>

<br><br>

<label>Date of Birth</label>
<input type="date" name="d" required>

<br><br>

<label>Email</label>
<input type="email" name="e" placeholder="Enter your email" required>

<br><br>

<label>Password</label>
<input type="password" name="p" placeholder="Enter your password" required>

<br><br>

<label>Gender</label>

<br>

<input type="radio" name="g" value="Male" required> Male

<input type="radio" name="g" value="Female"> Female

<input type="radio" name="g" value="Other"> Other

<br><br>

<label>Select Your Favorite Food</label>

<select name="m" required>

<option value="">-- Select Food --</option>

<option>Idly</option>

<option>Dosa</option>

<option>Pongal</option>

<option>Poori</option>

<option>Chapathi</option>

<option>Parotta</option>

<option>Veg Meals</option>

<option>Veg Biriyani</option>

<option>Chicken Biriyani</option>

<option>Mutton Biriyani</option>

<option>Fried Rice</option>

<option>Noodles</option>

<option>Tea</option>

<option>Coffee</option>

<option>Fresh Juice</option>

<option>Ice Cream</option>

</select>

<br><br>

<input type="submit" value="Register">

<input type="reset" value="Reset">

</form>

</section>

<!-- Footer -->

<footer class="footer">

<h2>Contact Us</h2>

<p>📍 Salem, Tamil Nadu</p>

<p>📞 +91 9876543210</p>

<p>✉️ elysianfeast@gmail.com</p>

<div class="social-icons">

<a href="#"><i class="fa-brands fa-facebook"></i></a>

<a href="#"><i class="fa-brands fa-instagram"></i></a>

<a href="#"><i class="fa-brands fa-twitter"></i></a>

<a href="#"><i class="fa-brands fa-youtube"></i></a>

</div>

<p>© 2026 Elysian Feast Restaurant. All Rights Reserved.</p>

</footer>

</body>
</html>