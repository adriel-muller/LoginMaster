<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Logado</title>
</head>
<body>
</body>
</html>

<?php 
session_start();
date_default_timezone_set("America/Sao_Paulo");

$email = "trabalho@gmail.com";
$senha = "123456";

$validacao_email = $_POST['email'];
$validacao_senha = $_POST['password'];

$file = fopen("dados.txt","a+");

    if($validacao_senha == $senha and $validacao_email == $email){
        $_SESSION['logado'] = true; ?>
        <div class="alert alert-success" role="alert">Parabéns, Logou com sucesso!</div>
        <?php
        $criptografia = base64_encode($validacao_senha);
        fwrite($file,"|".$validacao_email."|".$criptografia."\r\n");
    }

    elseif(!isset($_SESSION['logado'])){
        header("Location: index.php");
    }

    fclose($file);
    session_destroy();
?>