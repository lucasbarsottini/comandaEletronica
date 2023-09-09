<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/categorialanches.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
    <link rel="shortcut icon" href="favicon.ico.ico" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
    
  </head>
  <body class="page">
   
    
    <header >
     <div class="logo_cabecalho">
      <div class="container_voltar">
      <a class="botao__fechar__cabecalho" href="/catalogo"> <img src="<?php echo e(asset('img/seta.png')); ?>" heig > </a>
      </div>
     <img src="<?php echo e(asset('img/lanches/logo.png')); ?>" alt="" class="imagem_logo">
     </div>
    </header>

    <main class="principal">


    <?php if(isset($produtos) && count($produtos) > 0): ?>
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche"><?php echo e($produto->nome); ?></h1 >
        </div>
        <div class="container_imagem">
          <img src="<?php echo e(asset('img/lanches/x-tudo.png')); ?>" alt="" class="imagem">
        </div>
       

        <div class="descricao_produto">
          <hr>
          <p class="descricao_texto"> 
            <?php echo e($produto->descricao); ?>

          </p>
           
          <hr>
        </div>
        
        

        <div class="container_botao">
  <form action="<?php echo e(route('adicionar-lanche')); ?>" method="POST" class="form_container">
    <?php echo csrf_field(); ?>
    <input type="submit" value="ADICIONAR" class="input_adicionar" data-id="<?php echo e($produto->id); ?>">
    <img src="<?php echo e(asset('img/lanches/add.png')); ?>" alt="" type="button" class="input_mais" data-id="<?php echo e($produto->id); ?>">
    <input type="number" value="1" class="input_quantidade" id="quantidade-<?php echo e($produto->id); ?>">
    <img src="<?php echo e(asset('img/lanches/remove.png')); ?>" alt="" type="button" class="input_menos" data-id="<?php echo e($produto->id); ?>">
  </form>
</div>



        <?php $__currentLoopData = $pedido; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedidos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="hidden" data-id="<?php echo e($pedido->id); ?>" name="idPedido" >
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="container_preco">
          <p class="texto_preco"><?php echo e($produto->valor); ?></p>
        </div>
       

      </section>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
 
      <script src="<?php echo e(asset('js/novopedido.js')); ?>"></script>

      
        </body>
</html>

      
      <!-- <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche">Hamburguer Simples</h1 >
        </div>
        <div class="container_imagem">
          <img src="<?php echo e(asset('img/lanches/simples.png')); ?>" alt="" class="imagem">
        </div>
       

        <div class="descricao_produto" >
          <hr>
          <p class="descricao_texto" id=""> 
            Pão de 250G - Alface - Tomate  - Ovo Frito   Queijo Mussarela - Bife
          </p>
           
          <hr>
        </div>
        

        <div class="container_botao">
          <input type="button" value="ADICIONAR" class="input_adicionar" id="adicionarComanda">
          <img src="<?php echo e(asset('img/lanches/add.png')); ?>" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="<?php echo e(asset('img/lanches/remove.png')); ?>" alt="" type="button" class="input_menos" id="remover">
        </div>

        

        <div class="container_preco">
          <p class="texto_preco">R$10.99</p>
        </div>

      </section>

      <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche">Hamburguer Com Bacon</h1 >
        </div>
        <div class="container_imagem">
          <img src="<?php echo e(asset('img/lanches/bacon.png')); ?>" alt="" class="imagem">
        </div>
       

        <div class="descricao_produto">
          <hr>
          <p class="descricao_texto"> 
            Pão de 300G - Fatias de Bacon - Queijo Mussarela - Bife - Molho Barbecue
          </p>
           
          <hr>
        </div>
        

        <div class="container_botao">
          <input type="button" value="ADICIONAR" class="input_adicionar" id="adicionarComanda">
          <img src="<?php echo e(asset('img/lanches/add.png')); ?>" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="<?php echo e(asset('img/lanches/remove.png')); ?>" alt="" type="button" class="input_menos" id="remover">
        </div>

        

        <div class="container_preco">
          <p class="texto_preco">R$12.99</p>
        </div>

      </section>

      <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche">Hamburguer Agressivo</h1 >
        </div>
        <div class="container_imagem">
          <img src="<?php echo e(asset('img/lanches/Furioso.png')); ?>" alt="" class="imagem">
        </div>
       

        <div class="descricao_produto">
          <hr>
          <p class="descricao_texto"> 
            Pão de 450G - Alface - Cebola  - Tomate - Frango Pernil - Bacon - Bife 
          </p>
           
          <hr>
        </div>
        

        <div class="container_botao">
          <input type="button" value="ADICIONAR" class="input_adicionar" id="adicionarComanda">
          <img src="<?php echo e(asset('img/lanches/add.png')); ?>" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="<?php echo e(asset('img/lanches/remove.png')); ?>" alt="" type="button" class="input_menos" id="remover">
        </div>

        

        <div class="container_preco">
          <p class="texto_preco">R$15.99</p>
        </div>

      </section>



   
      <footer>
        <div class="container_footer">
          <P class="texto_footer">Desenvolvido por: Lucas Barsottini ° 3 Modulo Desenvolvimento de Sistemas</P>
        </div>
    
        </main>

       
        </footer>

       
          
        
		   -->
<?php /**PATH C:\xampp\htdocs\projetoTCC\resources\views/categorialanches.blade.php ENDPATH**/ ?>