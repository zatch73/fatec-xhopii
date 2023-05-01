<?php
    require "../processamento/processamento.php";
    require "../processamento/validacao.php";   
    sessaoUsuario();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/verFuncionarios.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Ver Funcionário</title>
</head>
<body>
    <?php 
    require "../processamento/menu.php";
    ?>


<section class="conteudo-visao">
        <section class="conteudo-2">
            <h1>Funcionarios</h1>
        </section>
        <section class="conteudo-visao-box">
            <?php
                $funcionarios = new Funcionario();
                $funcionarios->listarFuncionario();
            ?>
        </section>
    </section>

    <?php 
        require "../processamento/rodape.php";
    ?>
</body>
</html>