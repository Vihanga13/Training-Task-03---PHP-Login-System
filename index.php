<?php include_once 'header.php'; ?>

<div class="container">
    <div class="main-content">
        <section class="intro-section">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<h1>Hello there, " . $_SESSION["useruid"] . "!</h1>";
                echo "<p>You are successfully logged in. Explore our blog categories below!</p>";
            } else {
                echo "<h1>This Is An Introduction</h1>";
                echo "<p>Here is an important paragraph that explains the purpose of the website and why you are here!</p>";
            }
            ?>
        </section>
        
        <section class="categories-section">
            <h2>Some Basic Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <h3>Fun Stuff</h3>
                </div>
                <div class="category-card">
                    <h3>Serious Stuff</h3>
                </div>
                <div class="category-card">
                    <h3>Exciting Stuff</h3>
                </div>
                <div class="category-card">
                    <h3>Boring Stuff</h3>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>
