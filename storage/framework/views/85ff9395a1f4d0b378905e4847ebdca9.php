<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Comanda</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/inicio.css')); ?>" href="menu.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
   
</head>





<body class="page">   
    <header class="container__cabecalho">
    </header>

    <main class="principal"> 
        <section class="container__principal">
            <form id="pedidoForm" action="<?php echo e(route('criar-pedido')); ?>" method="POST">
                <?php echo csrf_field(); ?>

            <div>
                <p class="nome_cliente" >Insira Seu Nome: </p>
            </div>
            
            <div class="nome_container">
            <input type="text" class="nomecliente" id="nomeClienteInput" name="nomeCliente">
            <br>
            <p id="numeroPedido">Numero: </p>
            </div>

            
            <h1 class="mesa_opcao">Escolha sua Mesa:</h1>
            </d>

                    <div class="opcao_container">
                        <select class="option" id="mesaSelect   " name="mesa" required>
                        <option value="" class="option_titulo">Selecione sua Mesa</option>
                        <option value="1" class="option_container">Mesa 1</option>
                        <option value="2" class="option_container">Mesa 2</option>
                        <option value="3" class="option_container">Mesa 3</option>
                        <option value="4" class="option_container">Mesa 4</option>
                        <option value="5" class="option_container">Mesa 5</option>
                        <option value="6" class="option_container">Mesa 6</option>
                        </select>
                    </div>  
                    <div class="container_botao">
                        <input type="submit" class="botao_confirmar" Value="CONFIRMAR" id="ConfirmarBotao">

                    </div>
        
        </section>
        <script src="<?php echo e(asset('js/novopedido.js')); ?>"></script>

        </form>

        
    </main>
    
    <footer>
       <div class="container_footer">
        <p class="texto_footer">Desenvolvido por Lucas Barsottini</p>
       </div>
    </footer>

 
</body>
</html><?php /**PATH C:\xampp\htdocs\projetoTCCtcc1\resources\views/inicio.blade.php ENDPATH**/ ?>