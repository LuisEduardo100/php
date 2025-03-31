<?php
// Estruturas de repetição em PHP

// 1. While
$contador = 1;
while ($contador <= 5) {
    echo "Contagem: $contador<br>";
    $contador++;
}

// 2. For
for ($i = 1; $i <= 5; $i++) {
    echo "Iteração: $i<br>";
}

// 3. Formas alternativas de escrever o For

// 3.1. For com múltiplas expressões
for ($i = 1, $j = 0; $i <= 5; $i++, $j += 2) {
    echo "i = $i, j = $j<br>";
}

// 3.2. For com parte do loop vazia
$k = 1;
for (; $k <= 5;) {
    echo "k = $k<br>";
    $k++;
}

// 4. Foreach
$frutas = ["maçã", "uva", "pêra"];
foreach ($frutas as $fruta) {
    echo "Eu gosto muito de $fruta<br>";
}

// Foreach com chave e valor
$notas = [
  "João" => [
    "Matemática" => 8.5,
    "Português" => 9.0,
    "Geografia" => 7.8,
  ],
  "Maria" => [
    "Matemática" => 7.0,
    "Português" => 8.5,
    "Geografia" => 9.0,
  ]
];

foreach ($notas as $nome => $notasAluno) {
  echo "Nome: $nome<br>";
  foreach ($notasAluno as $disciplina => $nota) {
    echo "Disciplina: $disciplina, Nota: $nota<br>";
  }
  echo "<br>";
}

?>