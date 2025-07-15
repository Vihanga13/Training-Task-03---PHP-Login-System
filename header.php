<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="index.php" class="logo">Blogs</a>
            <ul class="nav-menu">
                <li><a href="index.php" class="active">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#blogs">FIND BLOGS</a></li>
                <?php
                session_start();
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='welcome.php'>WELCOME</a></li>";
                    echo "<li><a href='profile.php'>PROFILE</a></li>";
                    echo "<li><a href='logout.php'>LOG OUT</a></li>";
                } else {
                    echo "<li><a href='signup.php'>SIGN UP</a></li>";
                    echo "<li><a href='login.php'>LOG IN</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>