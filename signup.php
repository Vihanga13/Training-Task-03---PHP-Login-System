<?php
  include_once 'header.php';
?>

<div class="container">
  <section class="signup-form">
      <h2>Sign Up</h2>
      
      <?php
      if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
              echo "<p class='error'>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "invaliduid") {
              echo "<p class='error'>Choose a proper username!</p>";
          }
          else if ($_GET["error"] == "invalidemail") {
              echo "<p class='error'>Choose a proper email!</p>";
          }
          else if ($_GET["error"] == "passwordsdontmatch") {
              echo "<p class='error'>Passwords don't match!</p>";
          }
          else if ($_GET["error"] == "stmtfailed") {
              echo "<p class='error'>Something went wrong, try again!</p>";
          }
          else if ($_GET["error"] == "usernametaken") {
              echo "<p class='error'>Username already taken!</p>";
          }
          else if ($_GET["error"] == "none") {
              echo "<p class='success'>You have signed up successfully!</p>";
          }
      }
      ?>
      
      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name...." required>
        <input type="email" name="email" placeholder="Email...." required>
        <input type="text" name="uid" placeholder="Username...." required>
        <input type="password" name="pwd" placeholder="Password" required>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" required>
        <button type="submit" name="submit">Sign Up</button>
      </form>
  </section>
</div>

<?php
  include_once 'footer.php';
?>
