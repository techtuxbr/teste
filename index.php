<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST);
        var_dump($_FILES['foto1']);
        //var_dump($_post);
    }else {
        var_dump($_GET);
        //var_dump($_get);
    }

   //echo $teste;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="./style.css">
</head>
<body>

<form action="/" method="post" enctype="multipart/form-data">
    <input type="file" id="imagem" class="pic" name="foto">
    <input type="submit" value="Enviar">
</form>

</body>
</html>