<?php

$soma = $_POST['number1'] + $_POST['number2'];
$somaPorcentagem = $soma + ($soma * ($_POST['porcentagem'] / 100));

echo "<h1>O resultado é: $somaPorcentagem</h1>";