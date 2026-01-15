<?php
// Initialize variables
$destination = $check_in = $check_out = $num_people = $total_price = "";
$destination_err = $check_in_err = $check_out_err = $num_people_err = "";

// Define price per night per person
$price_per_night = 100; // Example price, adjust as needed

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $destination = test_input($_POST["destination"]);
    $check_in = test_input($_POST["check_in"]);
    $check_out = test_input($_POST["check_out"]);
    $num_people = test_input($_POST["num_people"]);

    // Validate destination
    if (empty($destination)) {
        $destination_err = "Destination is required.";
    }

    // Validate check-in and check-out dates
    if (empty($check_in) || empty($check_out)) {
        $check_in_err = "Both check-in and check-out dates are required.";
    } elseif ($check_in >= $check_out) {
        $check_in_err = "Check-out date must be later than check-in date.";
    }

    // Validate number of people
    if (empty($num_people) || !is_numeric($num_people) || $num_people <= 0) {
        $num_people_err = "Please enter a valid number of people.";
    }

    // Calculate total price if no errors
    if (empty($destination_err) && empty($check_in_err) && empty($check_out_err) && empty($num_people_err)) {
        $check_in_date = new DateTime($check_in);
        $check_out_date = new DateTime($check_out);
        $interval = $check_in_date->diff($check_out_date);
        $num_nights = $interval->days;

        // Calculate total price
        $total_price = $num_nights * $num_people * $price_per_night;

        // Redirect to confirmation page with booking details
        header("Location: confirmation.php?destination=$destination&check_in=$check_in&check_out=$check_out&num_people=$num_people&total_price=$total_price");
        exit;
    }
}

// Function to sanitize input data
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
<style>/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.booking-form {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    color: #555;
}

input[type="text"],
input[type="date"],
input[type="number"],
button {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
}

button {
    background-color: #28a745;
    color: white;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.error {
    color: red;
    font-size: 0.9em;
}

.total-price {
    text-align: center;
    font-size: 1.2em;
    color: #333;
}
</style>
</head>
<body>
    <div class="booking-form">
        <h1>Book Your Trip</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="destination">Destination</label>
            <input type="text" id="destination" name="destination" value="<?php echo $destination; ?>" required>
            <span class="error"><?php echo $destination_err; ?></span>

            <label for="check_in">Check-in Date</label>
            <input type="date" id="check_in" name="check_in" value="<?php echo $check_in; ?>" required>
            <span class="error"><?php echo $check_in_err; ?></span>

            <label for="check_out">Check-out Date</label>
            <input type="date" id="check_out" name="check_out" value="<?php echo $check_out; ?>" required>
            <span class="error"><?php echo $check_out_err; ?></span>

            <label for="num_people">Number of People</label>
            <input type="number" id="num_people" name="num_people" value="<?php echo $num_people; ?>" min="1" required>
            <span class="error"><?php echo $num_people_err; ?></span>

            <button type="submit">Calculate Total</button>
        </form>

        <?php if ($total_price): ?>
            <div class="total-price">
                <p>Total Price: ₹<?php echo number_format($total_price, 2); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
