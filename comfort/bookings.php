<?php
// Database connection details
$host = 'localhost';
$dbName = 'your_database_name';
$username = 'your_username';
$password = 'your_password';

// Connect to MySQL
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $guests = intval($_POST['guests']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($check_in) || empty($check_out) || $guests <= 0) {
        die("Please fill in all required fields.");
    }

    // Save to database
    try {
        $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, check_in, check_out, guests) VALUES (:name, :email, :phone, :check_in, :check_out, :guests)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':check_in', $check_in);
        $stmt->bindParam(':check_out', $check_out);
        $stmt->bindParam(':guests', $guests);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Failed to save the booking: " . $e->getMessage());
    }

    // Send email notification
    $to = "your_email@example.com"; // Replace with your email
    $subject = "New Booking Request";
    $message = "Booking Details:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Phone: $phone\n" .
               "Check-In: $check_in\n" .
               "Check-Out: $check_out\n" .
               "Guests: $guests";

    $headers = "From: $email";
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your booking request has been submitted.";
    } else {
        echo "Failed to send the booking email.";
    }
}
?>
