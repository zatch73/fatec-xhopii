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
    <link rel="stylesheet" type="text/css" href="../css/rodape.css">
    <link rel="stylesheet" type="text/css" href="../css/verProdutos.css">
    <link rel="stylesheet" href="../css/carrossel.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Home</title>
</head>
<body>
    <?php
        require "../processamento/menu.php";
    ?>
    <section class="conteudo-home">
        <section class="carrossel-box">
            <div class="carrossel">
                <div class="carrossel-fotos">
                    <img src="../img/carrossel/carrossel1.png" alt="Slide 1">
                    <img src="../img/carrossel/carrossel2.png" alt="Slide 2">
                    <img src="../img/carrossel/carrossel3.png" alt="Slide 3">
                    <img src="../img/carrossel/carrossel4.png" alt="Slide 4">
                </div>
                <button class="carrossel-prev"><img src="../img/carrossel/prev.png" alt="prev"></button>
                <button class="carrossel-next"><img src="../img/carrossel/next.png" alt="next"></button>
                <div class="carrossel-btns">
                    <span class="carrossel-btn active"></span>
                    <span class="carrossel-btn"></span>
                    <span class="carrossel-btn"></span>
                    <span class="carrossel-btn"></span>
                </div>
            </div>
        </section>
        <section>
            <img src="../img/cupom-novo-usuario.png">
        </section>
    </section>

    
    <section class="conteudo-visao" style="background: white;">
        <section class="conteudo-2" style="border-bottom: 1px solid rgb(251,86,48); margin-bottom: 20px; padding-bottom: 20px;">
            <h1 style="min-height: 30px;">Descoberta do dia</h1>
        </section>
        <section class="conteudo-visao-box">
            <?php
            $produtos = new Produto();
            $produtos->listarProdutos2();
            ?>
        </section>
    </section>
    <?php 
        require "../processamento/rodape.php";
    ?>
    <script>
        const fotos = document.querySelector(".carrossel-fotos");
        const prevBtn = document.querySelector(".carrossel-prev");
        const nextBtn = document.querySelector(".carrossel-next");
        const btns = document.querySelectorAll(".carrossel-btn");

        let fotoAtual = 0;
        const fotosWidth = 1060;

        function irParaFoto(numFoto) {
        fotos.style.transform = `translateX(-${numFoto * fotosWidth}px)`;
        fotoAtual = numFoto;
        updateBtns();
        }

        function updateBtns() {
        btns.forEach((btn, numFoto) => {
            btn.classList.toggle("active", numFoto === fotoAtual);
        });
        }

        prevBtn.addEventListener("click", () => {
        if (fotoAtual === 0) {
            irParaFoto(3);
        } else {
            irParaFoto(fotoAtual - 1);
        }
        });

        nextBtn.addEventListener("click", () => {
        if (fotoAtual === 3) {
            irParaFoto(0);
        } else {
            irParaFoto(fotoAtual + 1);
        }
        });

        btns.forEach((btn, numFoto) => {
            btn.addEventListener("click", () => {
            irParaFoto(numFoto);
            });
        });

        irParaFoto(0);
    </script>
</body>
</html>