<?php
$servername = "localhost"; // Replace with your database server address
$username = "u686932376_vaibhav"; // Replace with your database username
$password = "*A1b2c3d4e5f6#"; // Replace with your database password
$dbname = "u686932376_Alephium_forge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$registration_number = $_POST['registration_number'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$graduation_year = $_POST['graduation_year'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registrations (name, registration_number, mobile_number, email_id, graduation_year) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $name, $registration_number, $mobile, $email, $graduation_year);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
