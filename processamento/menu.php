<?php 
echo "<header>
<section id='cabecalho-logo'>
    <img src='../img/logo.png'>
    <h1>Xhopii</h1>
</section>
<section id='cabecalho-logout'>
    <a href='login.php?s=sair'>Sair</a>
</section>
</header>";
echo "
<nav class='menu-horizontal'>
    <ul>
        <li><a href='home.php'>Home</a></li>
        <li><a href='cadastroCliente.php'>Cadastro Cliente</a></li>
        <li><a href='cadastroFuncionario.php'>Cadastro Funcionário</a></li>
        <li><a href='cadastroProduto.php'>Cadastro Produto</a></li>
        <li><a href='verCliente.php'>Ver Clientes</a></li>
        <li><a href='verFuncionario.php'>Ver Funcionários</a></li>
        <li><a href='verProduto.php'>Ver Produtos</a></li>
    </ul>
</nav>";
?>