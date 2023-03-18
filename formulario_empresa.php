<?php

if(isset($_POST['btn_Enviar'])){
    $nome = $_POST['nome'];
    $site = $_POST['site'];
    $face = $_POST['face'];
    $insta = $_POST['insta'];
    $descr = $_POST['descr']; 

    echo 'Nome da empresa:' . $nome . '.<br>' . 'Facebook:' . $face . '.<br>' . 'Instagram:' . $insta . '.<br>' . 'Descrição:' . $descr . '.<hr>';
}
?>
<hr>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <form action="formulario_empresa.php" method="post">
        <label>Nome da empresa:</label>
        <input type="text" name=nome>
        <label>Site:</label>
        <input type="text" name="site">
        <label>Facebook:</label>
        <input type="text" name="face">
        <label>Instagram:</label>
        <input type="text" name="insta">
        <label>Descrição:</label>
        <input type="text" name="descr">
        <button name="btn_Enviar">ENVIAR</button>
    </form>
</body>

</html>