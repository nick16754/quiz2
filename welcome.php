
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CS1520 Quiz 2</title>
    <link href="CSS/nick_style.css" rel="stylesheet">
  </head>
  <body>
    <div class="contact-form" id="contact">
      <h1 class="flash">Like Cats?</h1>
      <h2>Sign up for free Cat Facts!</h2>
      <form action="register.php" method="post">
        First Name:<br>
        <input type="text" name="firstName" size="50"><br>
        Last Name:<br>
        <input type="text" name="lastName" size="50"><br>
        E-mail:<br>
        <input type="text" name="email" size="50"><br>
        <input type="submit">
      </form>
    </div>
    <?php
      if(isset($_COOKIE[$cookie_fname]) && isset($_COOKIE[$cookie_email]))
      {
          echo "Hi, " . $cookie_fname . ", you recently signed up for Cat Facts with the email address: " . $cookie_email . ", thank you!";
      }
    ?>
  </body>
</html>
