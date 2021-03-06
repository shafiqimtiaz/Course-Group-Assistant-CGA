<?php
// Initialize the session
session_start();

require('./configs/config.php');
require('./helper/functions.php');

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ./auth/login.php");
    exit;
}

$username = $_SESSION['username'];
$name = $_SESSION['name'];
$role_name = $_SESSION['role_name'];
$session_user_id = $_SESSION['user_id'];
$role_id = $_SESSION['role_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Welcome</title>
</head>

<body>

    <header>
        <div class="title-bar">
            <h1>Course Group Assistant (CGA)</h1>
            <nav>
                <div class="header-minimum">
                    <p>Logged in as <b><?= $name ?></b></p>
                    <a href="javascript:void(0);" class="hamburger-icon" onclick="toggleHamburger(this)">
                        <div class="hamburger bar1"></div>
                        <div class="hamburger bar2"></div>
                        <div class="hamburger bar3"></div>
                    </a>
                </div>
                <ul class="header-link" id="header-link">
                    <li><a href="./auth/reset-email.php">Reset Email</a></li>
                    <li><a href="./auth/reset-password.php">Reset Password</a></li>
                    <li><a href="./auth/logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <Section>
            <div class="role-body">
                <p>Select available role</p>

                <div class="role-list">
                    <?php
                    if ($role_id == 1)
                        echo '<a href="./pages/admin.php">Admin</a>';
                    elseif ($role_id == 2) {
                        echo '<a href="./pages/professor.php">Professor</a>';
                    } elseif ($role_id == 3) {
                        echo '<a href="./pages/ta.php">Teaching Assistant</a>';
                    } elseif ($role_id == 4) {
                        echo '<a href="./pages/student.php">Student</a>';
                    }
                    ?>
                </div>

            </div>
        </Section>

    </main>

    <?php require("./includes/footer.php") ?>