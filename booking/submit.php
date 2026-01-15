<?php
// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

// Database connection parameters
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'ashika';
$dbName = 'booking';

// Your email to receive queries
$yourEmail = 'ashiiika.666@gmail.com';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form inputs safely
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $query = trim($_POST['query'] ?? '');

    if (empty($name) || empty($email) || empty($query)) {
        echo 'Please fill in all required fields.';
    }

    // Connect to database
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die('Database connection failed: ' . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO queries (name, email, phone, query) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die('Prepare failed: ' . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $phone, $query);

    if ($stmt->execute()) {
        // Send email notification using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ashiiika.666@gmail.com';
            $mail->Password   = 'mhnyhpadmbqffwmi';  // <-- Replace with your Gmail app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // or 'tls'
            $mail->Port       = 587;

            $mail->setFrom('ashiiika.666@gmail.com', 'Website Contact Form');
            $mail->addAddress($yourEmail);  // Send to yourself

            $mail->Subject = 'New Query from ' . $name;
            $mail->Body    = "You have received a new query from your website:\n\n"
                . "Name: $name\n"
                . "Email: $email\n"
                . "Phone: $phone\n"
                . "Query: $query\n";

            $mail->send();
            $mail->SMTPDebug = 3; // Change to 3 for more detail
$mail->Debugoutput = 'html';
            echo 'Your query has been saved and email notification sent successfully.';
        } catch (Exception $e) {
            echo "Query saved, but email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo 'Error saving query: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>
