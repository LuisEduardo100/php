<?php
session_start();

if (empty($_SESSION['username'])) {
  header('Location: index.php');
  exit;
}

if (!empty($_COOKIE['tema'])) {
  $tema = $_COOKIE['tema'];

  if ($tema == 'default') {
    $background_cor = "#daad99";
    $text_color = "#ccc";
  } elseif ($tema == 'dark') {
    $background_cor = "black";
    $text_color = "#dddddd";
  } else {
    $background_cor = "white";
    $text_color = "black";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: <?= $background_cor ?>; color: <?= $text_color ?>">
  <h1>Seja bem-vindo, <?= $_SESSION['username'] ?>!</h1>
  <a style="color: inherit" href="logout.php">Logout</a>
</body>

</html>