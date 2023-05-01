<?php
    require "../processamento/processamento.php";
    require "../processamento/validacao.php";   
    sessaoUsuario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
    require "../processamento/menu.php";
    $produto = new Produto();
    $produto->listarProduto();

    $nome = $produto->nome;
    $valor = $produto->valor;
    $qtde = $produto->quantidade;
    $image = $produto->diretorio;
    
?>

    <section>
            <section>
                <img src="<?php echo $image;?>" class="produto-imagem" alt="imagem-produto">
            </section>
            <section class="produto-detalhes">
                <h1 style="font-size: 1.875rem;"><?php echo $nome; ?></h1>
                <h2 id="precoProduto">R$<?php echo $valor;?></h2>
                <p id="pecas">
                    <?php echo $qtde;?> peças dísponíveis
                </p>
                <section>
                    <p>Modelos:</p>
                    <button class="botao">Preto</button>
                    <button class="botao">Azul</button>
                    <button class="botao">Verde</button>
                    <button class="botao">Cinza</button>
                    <button class="botao">Rosa</button>
                </section>
                <section>
                    <p>Tamanhos:</p>
                    <button class="botao">P</button>
                    <button class="botao">M</button>
                    <button class="botao">G</button>
                    <button class="botao">GG</button>
                </section>
                <p id="tamanho-selecionado">
                    Tamanho Selecionado: P
                </p>
                <input type="submit" value="Comprar Agora" id="botaoComprar">
            </section>
    </section>
    <?php 
        require "../processamento/rodape.php";
    ?>
</body>
</html>