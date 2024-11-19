<?php
// Database connection details
$host = 'localhost';
$dbName = 'contact_message';
$username = 'root';
$password = '3258karma';

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
    
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) ||  empty($message)) {
        die("Please fill in all required fields.");
    }

    // Save to database
    try {
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email,  :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Failed to save the message: " . $e->getMessage());
    }

    // Send email notification
    $to = "talemwarobert630@gmail.com"; // Change to your email
    
    $email_body = "You have received a new message from $name ($email):\n\n$message";

    $headers = "From: $email";
    if (mail($to, $email_body, $headers)) {
        echo "Thank you for contacting us! Your message has been sent.";
    } else {
        echo "Failed to send the email.";
    }
}
?>
