<?php 
session_start();

// Check if user is logged in before showing logout page
$wasLoggedIn = isset($_SESSION["useruid"]);
$username = $wasLoggedIn ? $_SESSION["useruid"] : "Guest";


session_unset();
session_destroy();

include_once 'header.php'; 
?>

<div class="container">
    <div class="main-content">
        <section class="intro-section">
            <?php if ($wasLoggedIn): ?>
                <h1>Goodbye, <?php echo $username; ?>!</h1>
                <p>You have been successfully logged out. Thank you for visiting our blog!</p>
            <?php else: ?>
                <h1>Already Logged Out</h1>
                <p>You are not currently logged in to any account.</p>
            <?php endif; ?>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>
