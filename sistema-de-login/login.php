<?php
session_start();

if (!empty($_POST['username'] && !empty($_POST['password']))) {
  $usuario = htmlspecialchars($_POST['username']);
  $senha = htmlspecialchars($_POST['password']);

  if ($usuario == 'admin' && $senha == 'admin') {
    $_SESSION['username'] = $usuario;
    header('Location: home.php');
  } else {
    echo "Usuário ou senha inválidos";
    echo "<a href='index.php'>Tentar novamente</a>";
  }
} else {
  echo "Preencha todos os dados";
  echo "<a href='index.php'>Voltar</a>";
}
