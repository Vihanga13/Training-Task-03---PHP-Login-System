<?php 
session_start();

// Check if user is logged in before showing logout page
$wasLoggedIn = isset($_SESSION["useruid"]);
$username = $wasLoggedIn ? $_SESSION["useruid"] : "Guest";

// Destroy the session
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
        
        <section class="logout-actions">
            <h2>What's Next?</h2>
            <div class="action-buttons">
                <a href="index.php" class="action-btn primary">Go to Home</a>
                <a href="login.php" class="action-btn secondary">Login Again</a>
                <a href="signup.php" class="action-btn success">Create New Account</a>
            </div>
        </section>
        
        <section class="logout-info">
            <div class="info-box">
                <h3>Session Information</h3>
                <p><strong>Logout Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
                <p><strong>Status:</strong> <span class="status-inactive">Logged Out</span></p>
                <p><strong>Session:</strong> Terminated</p>
            </div>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>
