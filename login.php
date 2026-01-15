<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Only run if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if required POST fields are present
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Sanitize input
        $email = trim($_POST['email']);
        $password_raw = $_POST['password'];

        // Database connection
        $host = "127.0.0.1";
        $db_password = "ashika";
        $dbname = "data";
        $user = "root";

        $conn = new mysqli($host, $user, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statement to avoid SQL injection
        $stmt = $conn->prepare("SELECT name, password FROM ok WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if email exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($name, $stored_password);
            $stmt->fetch();

            // Compare passwords (plain text comparison — consider hashing in production)
            if ($password_raw === $stored_password) {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;

                header("Location: welcome.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "No user found with that email.";
        }

        // Close connections
        $stmt->close();
        $conn->close();
    } else {
        $error = "Please fill in both email and password.";
    }

}
?>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Travelista Tours Login
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
    .font-gv {
      font-family: 'Great Vibes', cursive;
    }
  </style>
 </head>
 <body class="bg-[#0397e6] min-h-screen flex items-center justify-center p-6 relative overflow-hidden" 
 style="background-image:url('https://storage.googleapis.com/a1aa/image/96ebac5a-feb2-4f3c-4a03-4f1c9a8d018f.jpg');
         background-size: cover;
        background-position: left;
        background-repeat: no-repeat;">
  <!-- Top left white pattern -->
 
  <div class="max-w-4xl w-full bg-white rounded-2xl shadow-lg flex flex-col md:flex-row overflow-hidden" style="height: 650px">
   <!-- Left side with full image and top-aligned text -->
   <div class="md:w-1/2 relative rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none overflow-hidden">
    <img alt="Woman in red dress standing on mountain peak with blue sky and clouds" class="w-full h-full object-cover" height="520" 
    src="https://storage.googleapis.com/a1aa/image/96ebac5a-feb2-4f3c-4a03-4f1c9a8d018f.jpg" width="400"/>
    <div class="absolute top-0 left-0 right-0 p-10 md:p-16 text-vlack">
     <h1 class="font-gv text-4xl md:text-5xl mb-2 select-none">
      Sarvana Tours
     </h1>
     <p class="text-xs md:text-sm max-w-xs text-left select-none">
      Travel is the only purchase that enriches you in ways beyond material wealth
     </p>
    </div>
   </div>
   <!-- Right side login form with increased font sizes -->
   <div class="md:w-1/2 bg-white rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none p-8 md:p-16 relative flex flex-col justify-center text-base md:text-lg">
    <!-- Airplane icon and dotted path top right -->
    <div class="absolute top-8 right-8 flex items-center space-x-2">
     <svg aria-hidden="true" class="w-6 h-6 text-[#0397e6]" fill="none" stroke="#0397e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24">
      <path d="M2.5 19L21 12 2.5 5 2.5 10.5 17 12 2.5 13.5 2.5 19z"></path>
     </svg>
     <svg aria-hidden="true" class="w-24 h-6 text-[#0397e6]" fill="none" stroke="#0397e6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewbox="0 0 96 24">
      <path d="M0 12h96" stroke-dasharray="4 4"></path>
     </svg>
    </div>
    <h2 class="text-5xl font-extrabold text-[#0397e6] mb-2 select-none center">
     Welcome
    </h2>
    <p class="text-sm text-gray-500 mb-10 select-none center">
     Login with Email
    </p>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form class="space-y-8" method="post" action="">
     <div>
      <label class="block text-xs font-semibold text-[#0397e6] mb-2 select-none" for="email">
       Email Id
      </label>
      <div class="flex items-center border border-[#0397e6] rounded-md px-4 py-3 focus-within:ring-2 focus-within:ring-[#0397e6]">
       <i class="fas fa-envelope text-[#0397e6] text-lg"></i>
       <input class="ml-3 w-full text-base text-gray-700 outline-none" name="email" type="email" required placeholder="thisuix@mail.com"/>
      </div>
     </div>
     <div>
      <label class="block text-xs font-semibold text-[#0397e6] mb-2 select-none" for="password">
       Password
      </label>
      <div class="flex items-center border border-[#0397e6] rounded-md px-4 py-3 focus-within:ring-2 focus-within:ring-[#0397e6]">
       <i class="fas fa-lock text-[#0397e6] text-lg"></i>
       <input class="ml-3 w-full text-base text-gray-700 outline-none" name="password" type="password" >
      </div>
      <p class="text-xs text-gray-400 text-right mt-2 select-none cursor-pointer">
       Forgot your password?
      </p>
     </div>
     <button class="w-full bg-[#0397e6] text-white text-base font-semibold py-3 rounded-md hover:bg-[#0274c7] transition select-none" type="submit">
      LOGIN
     </button>
    </form>
    <div class="flex items-center my-8">
     <hr class="flex-grow border-gray-300"/>
     <span class="mx-4 text-sm text-gray-400 select-none">
      OR
     </span>
     <hr class="flex-grow border-gray-300"/>
    </div>
    
    <p class="text-sm text-center text-gray-700 select-none">
     Don’t have account?
     <span class="font-semibold cursor-pointer"><a href="register.html">
      Register Now
     </span></a>
    </p>
    
    
   </div>
  </div>
 </body>
</html>