

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CS1520 Quiz 2</title>
    <link href="CSS/nick_style.css" rel="stylesheet">
  </head>
  <body>
    <div class="contact-form" id="contact">
      <?php if (null == isset($_COOKIE['first'])): ?>
      <h1 class="flash">Like Cats?</h1>
      <h2>Sign up for free Cat Facts!</h2>
      <form action="register.php" method="post">
        First Name:<br>
        <input type="text" name="first" size="50"><br>
        Last Name:<br>
        <input type="text" name="last" size="50"><br>
        E-mail:<br>
        <input type="text" name="email" size="50"><br>
        <input type="submit">
      </form>
    </div>
    <?php else: ?>
      <?php echo "Hi, " . $_COOKIE['first'] . ", you recently signed up for Cat Facts with the email address: " . $_COOKIE['email'] . ", thank you!";  ?>
    <?php endif; ?>
  </body>
</html>
