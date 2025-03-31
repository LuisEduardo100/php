<?php
  require 'constants.php';
  require 'data.php';
 
  $situaçao_emprego = $status_emprego == true ? 'Empregado' : 'Desempregado';
  $situacao_aposentadoria = $sexo == "M"
    ? IDADE_APOSENTADORIA_MASC - $idade 
    : $situacao_aposentadoria = IDADE_APOSENTADORIA_FEM - $idade;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha Cadastral</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
    }
   .card {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16);
      text-align: center;
    }

    p {
      color: #666;
      font-size: 1.1em;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h1><strong>Ficha cadastral</h1>
      <p>Nome: <strong><?= $nome ?></strong></p>
      <p>Idade: <strong><?= $idade ?></strong></p>
      <p>Sexo (M/F): <strong><?= $sexo ?></strong> </p>
      <p>Salário mensal: <strong> R$<?= number_format($salario_mensal, "2", ",", ".") ?></strong></p>
      <p>Status de emprego: 
        <strong><?= $situaçao_emprego ?></strong>
      </p>
      <p>Anos para aposentadoria: 
        <strong><?= $situacao_aposentadoria ?></strong>
      </p>
      <p>Habilidades: 
        <strong><?=implode(", ", $habilidades)?></strong>
      </p>
    </div>
  </div>
</body>
</html>