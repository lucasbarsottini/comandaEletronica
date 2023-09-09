<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{asset ('css/verificado.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <title>Pedido Verificado</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">


    </head>
    <body class="page">
        <header class="container__cabecalho">
           

        </header>

        
        <main class="principal">
            <section class="container__principal">
            <p class="principal__texto">Concluído!</p>
               <img class="principal__imagem" src="{{asset('img/confirmado/ok.png')}}" >
               <p class="principal__texto1" >Esqueceu alguma coisa? Clique no botão  "ADICIONAR MAIS ITENS "</p>
               <div class="container_voltar">
                <a class="link_voltar" href="/catalogo">ADICIONAR MAIS ITENS</a>
        </div>
               
            
             
              
        
            </section>
            
        </main>

        <footer>
            <div class="footer_container">
                <h1 class="texto_footer"> Desenvolvido por SyServ®</h1>
            </div>
        </footer>

    </body>

</html>
