<?php
include 'partials/dbconnect.php';
$output = false;
$query1 = "select * from admission_form where status IS NULL OR status=''";
$result1 = mysqli_query($con, $query1);
$num1 = mysqli_num_rows($result1);
if ($num1 > 0) {
    $output = true;
} else {

}
if (isset($_GET['sid'])) {
    $id = $_GET['sid'];
    if (isset($_GET['a'])) {
        $action = $_GET['a'];
        if ($action == 'accept') {
            $query2 = "update admission_form set status='accept' where id=$id ";
            $result2 = mysqli_query($con, $query2);

        } else {
            $query2 = "update admission_form set status='reject' where id=$id ";
            $result2 = mysqli_query($con, $query2);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|MKP</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="navbar">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <h2>Menu</h2>
                <li><a class="menu__item" href="admin.php?application_form">Application form</a></li>
                <li><a class="menu__item" href="admin.php?approved_form">Approved form</a></li>
                <li><a class="menu__item" href="admin.php?rejected_form">Rejected form</a></li>
            </ul>
        </div>
        <div class="logo">
            <img src="img/logo.png" alt="">
            <h1>Masti Ki Paathshala</h1>
        </div>
        <div class="login">
            <button class="logbtn"><span><a href="logout.php">Logout</a></span></button>
        </div>
    </div>
    <div class="list">
        <?php
        if (!isset($_GET['application_form']) && !isset($_GET['approved_form']) && !isset($_GET['rejected_form'])) {
            include('application.php');
        }
        if (isset($_GET['application_form'])) {
            include('application.php');
        }
        if (isset($_GET['approved_form'])) {
            include('approved.php');
        }
        if (isset($_GET['rejected_form'])) {
            include('rejected.php');
        }
        ?>
    </div>
</body>
</html>