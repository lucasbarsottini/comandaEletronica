<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/lista.css')); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('cardapio__link').click(function(event) {
                    event.preventDefault();
                    var href = $(this).attr('href');
                    window.location.href = href;
                })
            })
        </script>

    </head>
    <body class="page">
        <header class="container__cabecalho">
            <a class="botao__fechar__cabecalho" href="#"> <img src="<?php echo e(asset('img/seta.png')); ?>" heig > </a>

        </header>
        

        
        <main class="principal">
            <section class="container__principal">
                <hr>
                <div class="principal__cardapio__item">
                    <img src="<?php echo e(asset('img/lanche.png')); ?>" class="cardapio__imagem">
                    <p class="cardapio__texto"> <a class="cardapio__link" href="<?php echo e(route('section', ['categoria' => 'lanches'])); ?>" id =""> Lanches </a></p>
                </div>
                <hr>
                <div class="principal__cardapio__item">
                    <img src="<?php echo e(asset('img/bebidas.png')); ?>" class="cardapio__imagem">
                    <p class="cardapio__texto"><a class="cardapio__link" href="<?php echo e(route('section', ['categoria' => 'bebidas'])); ?>" id ="">Bebidas</a></p>
                </div>
                <hr>
                <div class="principal__cardapio__item">
                    <img src="<?php echo e(asset('img/sobremesas.png')); ?>" class="cardapio__imagem">
                    <p class="cardapio__texto"><a class="cardapio__link" id ="" href="<?php echo e(route('section', ['categoria' => 'sobremesas'])); ?>">Sobremesas</a></p>
                </div>
                <hr>

                <div class="botao_fechamento">
                    <a href="<?php echo e(route('fechamento')); ?>"><input type="button" value="Confirmar" class="botao_fechamento"></a>

                </div>
                
            </section>
            
        </main>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\projetoTCCtcc1\resources\views/listaprodutos.blade.php ENDPATH**/ ?>