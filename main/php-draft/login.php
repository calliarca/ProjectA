<?php
if (isset($_POST["login"])) {
    // Get email and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

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
            header("Location: index.php");
            exit();
        } else {
            // Password incorrect
            echo "<div class='alert alert-danger'>Password Incorrect!</div>";
        }
    } else {
        // Email not found
        echo "<div class='alert alert-danger'>Email not found!</div>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
