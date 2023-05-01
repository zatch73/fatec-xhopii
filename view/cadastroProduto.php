<?php 
     require "../processamento/validacao.php";   
     sessaoUsuario();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/fileButton.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Cadastro Produto</title>
</head>
<body>
    <?php 
    require "../processamento/menu.php";
    ?>

    <section class="conteudo-cadastro">
        <section class="conteudo-formulario-cadastro">
            <form method="POST" action="../processamento/processamento.php?cadastro=produto" enctype="multipart/form-data">
                <label id="title">Cadastrar Produto</label>
                <input type="text" placeholder="Nome" name="inputNome">
                <input type="text" placeholder="Fabricante" name="inputFabricante">
                <input type="text" placeholder="Descrição" name="inputDescricao">
                <input type="text" placeholder="Valor" name="inputValor">
                <input type="text" placeholder="Quantidade" name="inputQuantidade">
                <center><label id="select-foto-text">Selecionar foto do produto:</label><center>
                <section class="file-select">
                    <label for="file" id="file-button">Escolher Arquivo</label>
                    <label for="produto-selecionado" id="selecionado">Nenhum arquivo escolhido</label>
                    <input type="file" style="display: none" placeholder="foto" name="inputFoto" id="file">
                </section>
                <input id="botao" type="submit" value="Cadastrar">
            </form>
        </section>
    </section>
    <script>
        const fileButton = document.getElementById('file');
        const fileInfo = document.getElementById('selecionado');

        fileButton.addEventListener('change', (event) => {
            const fileName = event.target.value.split('\\').pop();
            if (fileName) {
            fileInfo.textContent = fileName;
            } else {
            fileInfo.textContent = 'Nenhum arquivo escolhido';
            }
        });
    </script>
    <?php 
        require "../processamento/rodape.php";
    ?>
</body>
</html>