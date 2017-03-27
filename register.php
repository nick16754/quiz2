<?php
  $cookie_fname = $_POST["firstName"];
  $cookie_lname = $_POST["lastName"];
  $cookie_email = $_POST["email"];
  setcookie($cookie_fname, $cookie_lname, $cookie_email, time() + (86400 * 30), "/");
 ?>
