<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password_raw = $_POST['password'];

    $password = password_hash($password_raw, PASSWORD_DEFAULT);

    $host = "127.0.0.1";
    $db_password = "ashika";
    $dbname = "data";
    $user = "root";

    $conn = new mysqli($host, $user, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $check_stmt = $conn->prepare("SELECT id FROM ok WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<script>alert('This email is already registered. Please use a different one.'); window.history.back();</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO ok (name, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $password, $email);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $check_stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
