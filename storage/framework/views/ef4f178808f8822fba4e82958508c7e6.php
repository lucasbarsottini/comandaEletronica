<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/comanda.css')); ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">

    </head>
    <body class="page">
        <header class="container__cabecalho">

            <h1 class="cabecalho__titulo">FECHAMENTO</h1>

        </header>

        
        <main class="principal">
            <section class="container__principal">
                

               <div class="principal__produto">
                    <span class="bolinha"></span>
                    <p class="principal__texto">Comanda 01</p>
               </div>

               <div class="principal__itens">

                <p class="itens__texto">X TUDO</p>
                <p class="itens__texto">X SALADA</p>
                <p class="itens__texto">PUDIM</p>
                <p class="itens__texto">COCA COLA 1L ZERO</p>
                <p class="itens__texto">X BACON</p>
                <p class="itens__texto">MOUSSE DE CHOCOLATE</p>
                <button class="botao__itens"> + </button>

                
               </div>

               <button class="submit__container"type="submit">Pagamento</button>

            </section>
        </main>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\projetoTCC\resources\views/comanda.blade.php ENDPATH**/ ?>