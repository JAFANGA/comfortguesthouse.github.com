<?php
include('./assets/php/contactform.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Guest House</title>
    <link rel="stylesheet" href="contact us.css">
    <link rel="stylesheet" href="index.html">
</head>

<body>
    <!-- Main Banner Section -->
    <div class="banner">
        <h1 class="vox">Welcome to Comfort Guest House</h1>
        <p> “Your Comfort, Our Priority.”</p>
        <div class="links">
            <a href="index.html">Home</a>
            <a href="viewrooms.html">View Rooms</a>
            <a href="./gallery.html">Gallery</a>
            <a href="./booking.html">Book Now</a>

        </div>
    </div>
    <div class="contact-form-container">
        <h2>Contact Us</h2>
        <p class="response-promise">We respond to all inquiries within 24 hours.</p>

        <form action="./assets/php/contactform.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="submit-button">Send Message</button>
        </form>
    </div>

    <a href="https://wa.me/0704086668, 07547840006, 0740379914" target="_blank" class="whatsapp-button">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo">
        Chat with Us
    </a>
   
    <footer class="footer">

        <div class="footer-container">


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
    <script src="/index.js" defer></script>
</body>

</html>