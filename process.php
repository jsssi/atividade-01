<?php

$nome = $_POST['nome'];
$filhos = $_POST['filhos'];
$escolaridade = $_POST['escolaridade'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

$salarioAjustado = $salario;


if ($filhos >= 2) {
    $salarioAjustado += $salario * 0.05;
}


if ($escolaridade === 'Mestrado' || $escolaridade === 'Doutorado') {
    $salarioAjustado += $salario * 0.10;
}


$acrescimos = [
    'Professor' => 50,
    'Coordenador' => 650,
    'Superintendente' => 900,
    'Diretor' => 2000
];
$salarioAjustado += $acrescimos[$cargo] ?? 0;


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultado</h1>
        <p>Nome:<?php echo htmlspecialchars($nome); ?></p>
        <p>Filhos:<?php echo htmlspecialchars($filhos); ?></p>
        <p>Escolaridade:<?php echo htmlspecialchars($escolaridade); ?></p>
        <p>Cargo:<?php echo htmlspecialchars($cargo); ?></p>
        <p>Salário:R$ <?php echo number_format($salario, 2, ',', '.'); ?></p>
        <p>Salário Ajustado:R$ <?php echo number_format($salarioAjustado, 2, ',', '.'); ?></p>
        <a href="index.html" class="a"><button>voltar</button></a>
    </div>
</body>
</html>