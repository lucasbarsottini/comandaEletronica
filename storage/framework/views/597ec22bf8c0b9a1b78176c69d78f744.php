<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/comandas_ativas.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
    <title>Comandas Ativas</title>
</head>
<body class="page">
    <header class="container_cabecalho">
        <h1>COMANDAS ATIVAS</h1>
    </header>

            <main class="principal">
                
            <?php $__currentLoopData = $pedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedidos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <section class="container_principal">
               
                
                    <div class="principal_comanda">
                        <div class="bolinha_container"><span class="bolinha"></span></div>
                        <div class="container_textos">
                           
                            <p class="principal_pedido" name="pedido">N° Pedido: <?php echo e($pedidos->numeroPedido); ?></p>
                            <hr>
                            <p class="principal_cliente" name="cliente">Nome do Cliente: 
                                <?php echo e($pedidos->nomeCliente); ?>

                               </p>
                               <hr>
                        </div>
                        <div class="itens_texto">
                        <?php $__currentLoopData = $pedidos->fechamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produtoPedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($produtoPedido->produto): ?>
                            <p class="produto_adicionados">
                                <?php echo e($produtoPedido->produto->nome); ?>  <?php echo e($produtoPedido->quantidade); ?>x
                            </p>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
        
                        </div>

                        <div class="valor_total">
                            <h1 class="valor_text">
                               R$ <?php echo e($pedidos->valorTotal); ?>

                            </h1>

                        </div>

                        
                    </div>
                    <div class="container_botao"><button class="botao_confirmacao">Confirma</button></div>
        

                    
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <footer >
<div class="footer_container">
<h1 class = "footer_assinatura">Desenvolvido por Lucas Barsottini</h1>
</div>
    </footer>



</body>

</html>

<!-- <section class="container_principal">
            <div class="principal_comanda">
                <div class="bolinha_container"><span class="bolinha"></span></div>
                <div class="container_textos">
                    <p class="principal_titulo"> MESA 01  </p>
                    <p class="principal_pedido">Pedido: 98745</p>
                    <p class="principal_cliente">Cliente: Luk </p>
                </div>
                <div class="itens_texto">
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>

                    

                    

                </div>

                <div class="container_botao"><button class="botao_confirmacao">Confirma</button></div>
            </div>

                
</section>

<section class="container_principal">
            <div class="principal_comanda">
                <div class="bolinha_container"><span class="bolinha"></span></div>
                <div class="container_textos">
                    <p class="principal_titulo"> MESA 01  </p>
                    <p class="principal_pedido">Pedido: 98745</p>
                    <p class="principal_cliente">Cliente: Luk </p>
                </div>
                <div class="itens_texto">
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                   

                    

                    

                </div>

                <div class="container_botao"><button class="botao_confirmacao">Confirma</button></div>
            </div>

                
</section>

<section class="container_principal">
            <div class="principal_comanda">
                <div class="bolinha_container"><span class="bolinha"></span></div>
                <div class="container_textos">
                    <p class="principal_titulo"> MESA 01  </p>
                    <p class="principal_pedido">Pedido: 98745</p>
                    <p class="principal_cliente">Cliente: Luk </p>
                </div>
                <div class="itens_texto">
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p> 
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>

                    

                    

                </div>

                <div class="container_botao"><button class="botao_confirmacao">Confirma</button></div>
            </div>

                
</section>

<section class="container_principal">
            <div class="principal_comanda">
                <div class="bolinha_container"><span class="bolinha"></span></div>
                <div class="container_textos">
                    <p class="principal_titulo"> MESA 01  </p>
                    <p class="principal_pedido">Pedido: 98745</p>
                    <p class="principal_cliente">Cliente: Luk </p>
                </div>
                <div class="itens_texto">
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X TUDO</p>
                    <p>X T5345345UDO</p>

                    

                    

                </div>

                <div class="container_botao"><button class="botao_confirmacao">Confirma</button></div>
            </div>

                
</section>



            

            
            

           
             
            
    
     -->
<?php /**PATH C:\xampp\htdocs\projetoTCCtcc1\resources\views/comandas_ativas.blade.php ENDPATH**/ ?>