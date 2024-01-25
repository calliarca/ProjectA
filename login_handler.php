<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 2rem;
      background-color: #f4f4f4;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-top: 0;
      color: #444;
    }

    .back-btn {
      display: block;
      width: 100%;
      padding: 0.5rem 1rem;
      margin-top: 1rem;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      text-align: center;
    }

    .back-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    // Connect to the database (replace these values with your actual database credentials)
    $host = "localhost";
    $usernameDB = "root";
    $passwordDB = "dr49m3t0h377";
    $database = "login_register";

    $conn = mysqli_connect($host, $usernameDB, $passwordDB, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL query to retrieve user information based on the provided email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);

        // Verify the provided password against the hashed password in the database
        if ($user && password_verify($password, $user["password"])) {
            // Authentication successful, redirect to the desired page
            header("Location: home.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Email or password is incorrect!</div>";
        }
    } else {
        // Email not found
        echo "<div class='alert alert-danger'>Email not found!</div>";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

    <button class="back-btn" onclick="window.history.back();">Go Back to Login</button>
  </div>
</body>
</html>