<?php
  $cookie_fname = $_POST['first'];
  $cookie_lname = $_POST['last'];
  $cookie_email = $_POST['email'];
  $first = "first";
  $last = "last";
  $email = "email";
  setcookie($first, $cookie_fname, time() + 86400, "/");
  setcookie($last, $cookie_lname, time() + 86400, "/");
  setcookie($email, $cookie_email, time() + 86400, "/");
 ?>
