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
    $room_type = htmlspecialchars(trim($_POST['room_type']));
    $special_requests = htmlspecialchars(trim($_POST['special_requests']));
    $extras = isset($_POST['extras']) ? implode(", ", $_POST['extras']) : "";

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($check_in) || empty($check_out) || empty($room_type)) {
        die("Please fill in all required fields.");
    }

    // Save to database
    try {
        $stmt = $conn->prepare("INSERT INTO special_bookings (name, email, phone, check_in, check_out, room_type, special_requests, extras) VALUES (:name, :email, :phone, :check_in, :check_out, :room_type, :special_requests, :extras)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':check_in', $check_in);
        $stmt->bindParam(':check_out', $check_out);
        $stmt->bindParam(':room_type', $room_type);
        $stmt->bindParam(':special_requests', $special_requests);
        $stmt->bindParam(':extras', $extras);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Failed to save the booking: " . $e->getMessage());
    }

    // Send email notification
    $to = "your_email@example.com"; // Replace with your email
    $subject = "New Special Booking Request";
    $message = "Special Booking Details:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Phone: $phone\n" .
               "Check-In: $check_in\n" .
               "Check-Out: $check_out\n" .
               "Room Type: $room_type\n" .
               "Special Requests: $special_requests\n" .
               "Extras: $extras";

    $headers = "From: $email";
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your special booking request has been submitted.";
    } else {
        echo "Failed to send the booking email.";
    }
}
?>
