<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body>
  <form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" />
    <br /><br />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" />
    <br /><br />
    <select name="tema">
      <option value="default">Default</option>
      <option value="dark">Dark</option>
      <option value="light">Light</option>
    </select>
    <br /><br />
    <input type="submit" value="Login" />
  </form>
</body>

</html>