<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($fullname) || empty($email) || empty($password) || empty($passwordRepeat)) {
            array_push($errors, "ALL FIELDS ARE REQUIRED!!");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not Valid");
        }

        if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
        }

        if ($password !== $passwordRepeat) {
            array_push($errors, "Password doesn't Match");
        }

        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            array_push($errors, "Email already registered, Please use another email!");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }

            // Add a button to go back to index.php
            echo "<button onclick=\"window.location.href='registration.php'\" class='btn btn-primary'>Go Back to Registration Page</button>";
        } else {
            require_once "database.php";
            $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are Registered Successfully.</div>";

                // Add a button to go back to landing.php
                echo "<button onclick=\"window.location.href='landing.php'\" class='btn btn-primary'>Go to Landing Page</button>";
            } else {
                die("Something went wrong");
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Notifikasi Registrasi</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (count($errors) > 0) :
                        ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php
                                    foreach ($errors as $error) :
                                    ?>
                                        <li><?= htmlspecialchars($error) ?></li>
                                    <?php
                                    endforeach;
                                    ?>
                                </ul>
                            </div>
                        <?php
                        endif;
                        ?>

                        <?php
                        if (isset($_GET['registered']) && $_GET['registered'] == 'success') :
                        ?>
                            <div class="alert alert-success">
                                You are Registered Successfully.
                                <button onclick="window.location.href='landing.php'" class="btn btn-primary">Go to Landing Page</button>
                            </div>
                        <?php
                        endif;
                        ?>

                        <!-- Remove the registration form -->

                        <!-- Add a button to go back to registration.php -->
                        <button onclick="window.location.href='registration.php'" class="btn btn-primary">Go Back to Registration Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>