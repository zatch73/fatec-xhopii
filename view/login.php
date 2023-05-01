<?php
if($_GET['s'] = 'sair'){
    session_start();
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="icon" href="../img/logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/rodape.css">
    <title>Xhopii - Login</title>
</head>
<body>
    <header>
        <section class='cabecalho-logo'>
            <img src='../img/logo.png'>
            <h1 class="logo-texto">Xhopii</h1>
            <h1 class="texto">Entre</h1>
        </section>
        <section class='ajuda'>
            <a href=''>Precisa de ajuda?</a>
        </section>
    </header>
    <section id="login-box">
        <section id="login">
            <p id="login-texto">Login</p>
            <form action="../processamento/validacao.php" method="post">
                <input type="text" name="email" value="pedro.lima@email.com" placeholder="Email" class="login-input"><br>
                <input type="password" name="senha" value="senha345" placeholder="Senha" class="login-input"><br>
                <input type="submit" value="ENTRE" id="login-submit">
            </form>
            <section id="links">
                <a href="">Esqueci minha senha</a>
                <a href="">Fazer login com SMS</a>
            </section>
            <section id="ou">
                <hr>OU<hr>
            </section>
            <section id="links-botao">
                <button onclick="alert('CARREGANDO')"><img src="../img/icons/facebook.png">Facebook</button>
                <button onclick="alert('CARREGANDO')"><img src="../img/icons/google.png">Google</button>
                <button onclick="alert('CARREGANDO')"><img src="../img/icons/apple.png" >Apple</button>
            </section>
            <p>
                <l>Novo na Xhopii? </l><a href="cadastroFuncionario.php"> Cadastrar</a>
            </p>
        </section>
    </section>
    
    <?php 
        require "../processamento/rodape.php";
    ?>
    
</body>
</html>