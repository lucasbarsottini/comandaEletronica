<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/comanda.css')); ?>">
        <title>Fechamento</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="<?php echo e(asset('img/icon.ico')); ?>" type="image/x-icon">


    </head>

    <script>
        $(document).ready(function() {
        $('.botao_confirmacao').on('click', function() {
            var pedidoId = $(this).data('pedido-id');
            $.ajax({
                url: '<?php echo e(route("confirmado")); ?>',
                method: 'POST',
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    pedido_id: pedidoId
                },
                success: function(response) {
                    window.location.href = '/confirmado';
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
        });
    </script>


    <body class="page">
        <header class="container__cabecalho">

            <h1 class="cabecalho__titulo">FECHAMENTO</h1>
            <a href="/catalogo"><img src="" alt=""></a>

        </header>

        
        <main class="principal">
            <form action="<?php echo e(route('confirmado')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            <section class="container__principal">
                

                <div class="principal__produto">
                        <img src="<?php echo e(asset('img/logo.png')); ?>" alt="magrão lanches" style="" class="bolinha">
                        <p class="principal__texto">Comanda: <?php echo e($pedido->numeroPedido); ?></p>
                </div>

               <div class="principal__itens">
                <hr>
                <?php $__currentLoopData = $pedido->fechamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p class="itens__texto"><?php echo e($item->quantidade); ?> X <------------- <?php echo e($item->produto->nome); ?> </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <hr>
                
              

                <div class="valor_container">
                    <p class="valor_total">TOTAL: R$ <?php echo e($valorTotal); ?></p>
                </div>
               </div>

               <button class="submit__container"type="submit" id="confirmar-pedido" data-pedido-id="<?php echo e($pedido->idPedido); ?>"
               >Confirmar Pedido</button>

            </section>
            </form>
        </main>

                  <footer>

        <div class="footer_container">

                        <p class="assinatura_footer"> Desenvolvido por SyServ®</p>

            </div>
    </footer>

    </body>

</html>
<?php /**PATH C:\xampp\htdocs\finaltcc\resources\views/fechamento.blade.php ENDPATH**/ ?>