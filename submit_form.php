<?php
$servername = "localhost";
$username = "root";
$password = ""; // Change if using a password
$dbname = "contact_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO contact_messages (name, phone, email, subject, message)
VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);

if ($stmt->execute()) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
