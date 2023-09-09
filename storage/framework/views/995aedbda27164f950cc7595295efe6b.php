<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo e(asset('css/estilo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="<?php echo e(asset('js/validarlogin.js')); ?>"></script>

</head>




<body class="page">
    <header class="container__cabecalho">
        <h1>ADMIN</h1>
    </header>
    <main class="principal">
        <section class="container__principal" >
             <div class="container__logo"><img src="<?php echo e(asset ('img/logo.png')); ?>" alt="" style="height:150px;width:150px" id="container_logo">
             </div>
             <form id ="formLogin" method="POST" action="<?php echo e(route('login.validar')); ?>">
             <?php echo csrf_field(); ?>
            <p class="texto__container__usuario">Usuário :</p>
            <input type="text" class="campo__login__container" id="usuario">
            <div class="container__senha">
                <p class="texto__container__senha">Senha :</p>
                <input type="password" class="campo__login__container" id="senha">
            </div>
           
            <button class="submit__container" type="submit" id="botaoLogin">Acessar</button>

            </form>
        
        </section>
    </main>

</body>

</html>





<?php /**PATH C:\Users\Lucas\TCC\projetoTCC\resources\views/loguin.blade.php ENDPATH**/ ?>