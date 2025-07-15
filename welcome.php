<?php 
session_start();

// Check if user is logged in
if (!isset($_SESSION["useruid"])) {
    header("Location: login.php");
    exit();
}

include_once 'header.php'; 
?>

<div class="container">
    <div class="main-content">
        <section class="intro-section">
            <h1>Welcome, <?php echo $_SESSION["useruid"]; ?>!</h1>
            <p>You have successfully logged into your blog account.</p>
            <p>Enjoy exploring our content and sharing your thoughts!</p>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>
