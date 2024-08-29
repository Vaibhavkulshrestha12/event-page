<?php
$servername = "localhost";
$username = "u686932376_vaibhav";
$password = "*A1b2c3d4e5f6#";
$dbname = "u686932376_Alephium_forge";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$registration_number = $_POST['registration_number'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$graduation_year = $_POST['graduation_year'];
$course = $_POST['course']; 

$stmt = $conn->prepare("INSERT INTO registrations (name, registration_number, mobile_number, email_id, graduation_year, course) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $registration_number, $mobile, $email, $graduation_year, $course);

if ($stmt->execute()) {
    header("Location: registration_success.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
