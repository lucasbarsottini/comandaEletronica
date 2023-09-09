<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <link rel="stylesheet" href="<?php echo e(asset('public/reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/comanda.css')); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">

    </head>
    <body class="page">
        <header class="container__cabecalho">
            <a class="botao__fechar__cabecalho" href="#"> X </a>

        </header>

        
        <main class="principal">
            <section class="container__principal">
                <p class="principal__texto">Comprovante</p>
                <div class="principal__produto">
                    <p class="principal__texto">Saldo a Descontar:</p>
                    <a href="#" class="principal__link"> <img class="principal__carrinho" href="./img/carrinho-de-compras-de-design-xadrez-1.png"></a>
                </div>

            <div class="principal__itens">
                <p class="principal__itens__quantidade">2</p>
                <p class="principal__itens__item">Salgado Frito</p>
                <p class="principal__itens__preço">R$5,99</p>
            </div> 
            <div class="principal__itens">
                <p class="principal__itens__quantidade">2</p>
                <p class="principal__itens__item">Salgado Frito</p>
                <p class="principal__itens__preço">R$5,99</p>
            </div>    
            <div class="principal__preco">
                <p class="principal__itens">R$10,99</p>
            </div>
            <div class="principal__data">
                <p class="principal__itens">07/03/2023
                    22:01</p>
            </div>
            <div class="principal__banner">
                <img src="./img/APMs_LINK_MOBILE-04 1.png"> 
            </div>      
            <div class="principal__submit">
                <a class="principal__link"><img src="./img/compartilhar 1.png"></a>
                <button class="submit__container"type="submit">Confirmar</button>
            </div>         
        </main>
        <footer class="rodape">
           <a class="rodape__link" href="#"> <img class="rodape__logo" src="./img/Ellipse 1.png"> </a>
           <a class="rodape__link" href="#"> <img class="rodape__logo" src="./img/Ellipse 2.png"> </a>
           <a class="rodape__link" href="#"> <img class="rodape__logo" src="./img/Ellipse 3.png"> </a>
           <a class="rodape__link" href="#"> <img class="rodape__logo" src="./img/Ellipse 4.png"> </a>
           <a class="rodape__link" href="#"> <img class="rodape__logo" src="./img/Ellipse 5.png"> </a>
        </footer>
    </body>

</html>
<?php /**PATH C:\Users\Lucas\TCC\projetoTCC\resources\views/comanda.blade.php ENDPATH**/ ?>