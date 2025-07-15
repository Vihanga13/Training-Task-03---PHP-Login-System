<?php
  include_once 'header.php';
?>

<div class="container">
  <section class="login-form">
      <h2>Log In</h2>
      
      <?php
      if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
              echo "<p class='error'>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "wronglogin") {
              echo "<p class='error'>Incorrect login information!</p>";
          }
      }
      ?>
      
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...." required>
        <input type="password" name="pwd" placeholder="Password" required>
        <button type="submit" name="submit">Log In</button>
      </form>
  </section>
</div>

<?php
  include_once 'footer.php';
?>
 