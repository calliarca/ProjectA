<?php
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user){
            if(password_verify($password, $user["password"])){
                header("Location: index.php");
                die();

            }else{
                echo "<div class='alert alert-danger'>Password Doesn't Exist!</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Email/Username Doesn't Exist!</div>";
        }
}



?>