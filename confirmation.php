<?php
// confirmation.php

// Retrieve booking details from URL parameters
$destination = $_GET['destination'] ?? '';
$check_in = $_GET['check_in'] ?? '';
$check_out = $_GET['check_out'] ?? '';
$num_people = $_GET['num_people'] ?? '';
$total_price = $_GET['total_price'] ?? '';

// Display confirmation message
echo "<h1>Booking Confirmed!</h1>";
echo "<p>Thank you for booking your trip to $destination.</p>";
echo "<p>Check-in Date: $check_in</p>";
echo "<p>Check-out Date: $check_out</p>";
echo "<p>Number of People: $num_people</p>";
echo "<p>Total Price: ₹" . number_format($total_price, 2) . "</p>";

// Redirect to homepage after 5 seconds
header("Refresh:5; url=index.php");
echo "<p>You will be redirected to the homepage shortly.</p>";
exit;
?>
