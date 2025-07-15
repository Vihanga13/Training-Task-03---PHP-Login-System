<?php

if(isset($_POST['submit'])) {
   $name = $_POST['name'];
   $pwd = $_POST['pwd'];

   require_once 'dbh.inc.php';
   require_once 'function.inc.php';

   if(emptyInputLogin($name, $pwd) !== false) {
       header("Location: ../login.php?error=emptyinput");
       exit();
   }

   loginUser($conn, $name, $pwd);
}
else {
   header("Location: ../login.php");
   exit();
}