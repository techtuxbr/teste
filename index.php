<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    var_dump($_REQUEST);
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="/?nome=Wesley&peso=70" method="post">
    <input type="text" name="nome" value="Erik">
    <input type="text" name="idade" value="44">
    <input type="text" name="peso" value="75">
    <input type="submit" value="Enviar">
</form>

</body>
</html>