<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
// Check if user is logged in by checking session 'email' (change here)
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
// Handle logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
// To display user's name, you can store it during login or fetch from DB here.
// For now, displaying email as fallback.
$username = isset($_SESSION['name']) ? $_SESSION['name'] : $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome</title>
    <style>
        /* Full screen background with travel theme */
        body {
            margin: 0;
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1471&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
            height: 100vh;
            box-sizing: border-box;
            padding: 20px;
        }

        .welcome-container {
            background-color: rgba(0,0,0,0.5);
            padding: 2rem 3rem;
            border-radius: 12px;
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        form {
            margin: 0;
        }

        button {
            background-color: #ff6f61;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff3b2f;
        }

        @media (max-width: 400px) {
            h1 {
                font-size: 2rem;
            }
            .welcome-container {
                padding: 1.5rem 2rem;
            }
        }
    </style>
    <script>
        // Redirect to index.php after 5 seconds
        setTimeout(() => {
            window.location.href = "index.php";
        }, 10000);
    </script>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
        <p>Get ready for your next adventure! Redirecting to the main page...</p>

        <form method="post" action="">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>
</html>
