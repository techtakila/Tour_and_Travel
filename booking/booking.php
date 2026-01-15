<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

// DB connection
$host = "localhost";
$db = "booking";
$user = "root";
$pass = "ashika";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'DB connection failed.']);
    exit;
}

// Validate and sanitize POST data
$requiredFields = ['fullName', 'email', 'phone', 'guests', 'totalAmount', 'startDate'];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        echo json_encode(['success' => false, 'message' => "Missing field: $field"]);
        exit;
    }
}

$fullName = $conn->real_escape_string($_POST['fullName']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$guests = (int)$_POST['guests'];
$totalAmount = (float)$_POST['totalAmount'];
$startDate = $conn->real_escape_string($_POST['startDate']);
$message = isset($_POST['message']) ? $conn->real_escape_string($_POST['message']) : '';

// Save to database
$sql = "INSERT INTO bookings (full_name, email, phone, guests, total_amount, start_date, message)
        VALUES ('$fullName', '$email', '$phone', $guests, $totalAmount, '$startDate', '$message')";

if (!$conn->query($sql)) {
    echo json_encode(['success' => false, 'message' => 'Database insert failed.']);
    exit;
}

// Send Email
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ashiiika.666@gmail.com';
    $mail->Password = 'mhnyhpadmbqffwmi';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('ashiiika.666@gmail.com', 'Booking Form');
    $mail->addAddress('ashiiika.666@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Booking Received';
    $mail->Body = "
        <strong>Name:</strong> $fullName<br>
        <strong>Email:</strong> $email<br>
        <strong>Phone:</strong> $phone<br>
        <strong>Guests:</strong> $guests<br>
        <strong>Total Amount:</strong> ₹$totalAmount<br>
        <strong>Start Date:</strong> $startDate<br>
        <strong>Message:</strong> $message
    ";

    $mail->send();

    echo json_encode(['success' => true]);
    exit; // ✅ STOP here after success
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Email error: ' . $mail->ErrorInfo]);
    exit;
}
?>
