<?php
include 'partials/dbconnect.php';

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pswd = $_POST['pswd'];

    $query1 = "select * from users where user='$user' AND password='$pswd'";
    $result1 = mysqli_query($con, $query1);
    $num1 = mysqli_num_rows($result1);
    if ($num1 > 0) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $user;
        header("location: admin.php");
    } else {
        echo "<script>alert('Incorrect login credentials')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|MKP</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="user" id="user" required placeholder="Username">
            <input type="password" name="pswd" id="pswd" required placeholder="Password">
            <input type="submit" name="login" value="Login" id="sub">
        </form>
    </div>
</body>
</html>