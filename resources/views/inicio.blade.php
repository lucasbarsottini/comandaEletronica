<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tela Incial</title>
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}" href="menu.css">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="shortcut icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
   
</head>





<body class="page">   
    <header class="container__cabecalho">
    </header>

    <main class="principal"> 
        <section class="container__principal">
            <form id="pedidoForm" action="{{route('criar-pedido')}}" method="POST">
                @csrf

            <div class="bloco_cliente">
                <p class="nome_cliente" >Insira Seu Nome: </p>
            </div>
         
            <div class="nome_container">
            <input type="text" class="nomecliente" id="nomeClienteInput" name="nomeCliente">
            <br>
           
        
                    <div class="container_botao">
                        <input type="submit" class="botao_confirmar" Value="CONFIRMAR" id="ConfirmarBotao">

                    </div>
        
        </section>
        <script src="{{asset('js/novopedido.js')}}"></script>

        </form>

        
    </main>
    
    <footer>
       <div class="container_footer">
        <p class="texto_footer"> Desenvolvido por Lucas Barsottini®</p>
       </div>
    </footer>

 
</body>
</html>