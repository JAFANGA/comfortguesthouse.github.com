<?php
include('./assets/special_bookings.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Guest House</title>
    <link rel="stylesheet" href="./special offer booking.css">

</head>

<body>
    <div class="banner">
        <h1 class="vox">Welcome to Comfort Guest House</h1>
        <p class="ccc"> “Your Comfort, Our Priority.”</p>
        <div class="links">
            <a href="viewrooms.html">View Rooms</a>
            <a href="./gallery.html">Gallery</a>
            <a href="./booking.html">Book Now</a>
            <a href="contact us.html">Contact Us</a>
        </div>
    </div>
    <div class="booking-form-container">
        <h2>Book Your Stay with Our Special Offers</h2>
        
        <form class="booking-form" action="#" method="post">
            
            <!-- Offer Selection -->
            <label for="offer">Choose an Offer:</label>
            <select id="offer" name="offer" required>
                <option value="" disabled selected>Select a Special Offer</option>
                <option value="weekend-getaway">Weekend Getaway Special</option>
                <option value="holiday-package">Holiday Package Deal</option>
                <option value="extended-stay">Extended Stay Discount</option>
            </select>
    
            <!-- Date Selection -->
            <label for="checkin">Check-In Date:</label>
            <input type="date" id="checkin" name="checkin" required>
    
            <label for="checkout">Check-Out Date:</label>
            <input type="date" id="checkout" name="checkout" required>
    
            <!-- Guest Information -->
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" min="1" max="10" required>
    
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
    
            <!-- Submit Button -->
            <button type="submit" class="booking-btn">Book Now</button>
        </form>
    </div>
    <footer class="footer">

        <div class="footer-talex">


            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ul>
            </div>

            
            <div class="footer-section">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email" class="newsletter-input">
                    <button type="submit" class="subscribe-btn">Subscribe</button>
                </form>
            </div>

            <div class="footer-section">
                <h3>Our Location</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.6770485368743!2d31.073678319013926!3d0.7739987959971758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17630dad99002bf1%3A0x48344137701588fe!2sComfort%20Guest%20House!5e0!3m2!1sen!2sug!4v1727346039887!5m2!1sen!2sug"
                    width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Phone: +256773131960</p>
                <p>Phone: +256772435790</p>
                <p>Phone: +256754784006</p>
                <p>Email:<a href="talemwarobert630@gmail.com">talemwarobert630@gmail.com</a></p>
                <p>Address: kizizi Rd, kibaale, uganda</p>
            </div>
        </div>


        <div class="footer-bottom">
            <p>&copy; 2024 Comfort Guest House . All Rights Reserved. |Designed by Talemwa Robert</p>
        </div>
    </footer>
<script>
    document.querySelector('.booking-form').addEventListener('submit', function(event) {
    const checkin = new Date(document.getElementById('checkin').value);
    const checkout = new Date(document.getElementById('checkout').value);

    if (checkout <= checkin) {
        alert('Check-out date must be after check-in date.');
        event.preventDefault(); // Prevent form submission
    }
});

</script>

</body>

</html>