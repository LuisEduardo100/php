<?php
session_start();

if (empty($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Seja bem-vindo, <?= $_SESSION['username'] ?>!</h1>
  <a href="logout.php">Logout</a>
</body>

</html>