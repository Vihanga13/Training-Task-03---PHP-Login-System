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
            <p>You have successfully logged into your account. We're glad to have you here!</p>
        </section>
        
        <section class="user-info">
            <h2>Your Account Information</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h3>User ID</h3>
                    <p><?php echo $_SESSION["userid"]; ?></p>
                </div>
                <div class="info-card">
                    <h3>Username</h3>
                    <p><?php echo $_SESSION["useruid"]; ?></p>
                </div>
                <div class="info-card">
                    <h3>Status</h3>
                    <p class="status-active">Active</p>
                </div>
            </div>
        </section>
        
        <section class="user-actions">
            <h2>What would you like to do?</h2>
            <div class="action-buttons">
                <a href="index.php" class="action-btn primary">Go to Home</a>
                <a href="profile.php" class="action-btn secondary">View Profile</a>
                <a href="includes/logout.inc.php" class="action-btn danger">Logout</a>
            </div>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>
