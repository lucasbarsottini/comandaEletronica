<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cardapio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/categorialanches.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="shortcut icon" href="favicon.ico.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/icon.ico')}}" type="image/x-icon">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
    
  </head>
  <body class="page">
   
    
    <header >
     <div class="logo_cabecalho">
      <div class="container_voltar">
      <a class="botao__fechar__cabecalho" href="/catalogo"> <img src="{{asset('img/seta.png') }}" heig > </a>
      </div>
    
     </div>
    </header>

    <main class="principal">


    @if(isset($produtos) && count($produtos) > 0)
    @foreach($produtos as $produto)
      <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche">{{$produto->nome}}</h1 >
        </div>
        <div class="container_imagem">
          <img src="{{asset('img/lanches/' . $produto->imagem)}}" alt="" class="imagem">
        </div>
       

        <div class="descricao_produto">
          <hr>
          <p class="descricao_texto"> 
            {{$produto->descricao}}
          </p>
           
          <hr>
        </div>
        
        

        <div class="container_botao">
  <form action="{{ route('adicionar-lanche') }}" method="POST" class="form_container">
    @csrf
    <input type="submit" value="ADICIONAR" class="input_adicionar" data-id="{{ $produto->id }}">
    <img src="{{ asset('img/lanches/add.png') }}" alt="" type="button" class="input_mais" data-id="{{ $produto->id }}">
 
    <input type="number" value="1" class="input_quantidade" id="quantidade-{{ $produto->id }}" name="quantidadeInput">
 
    <img src="{{ asset('img/lanches/remove.png') }}" alt="" type="button" class="input_menos" data-id="{{ $produto->id }}">
  </form>
</div>



        @foreach($pedido as $pedidos)
        <input type="hidden" data-id="{{$pedido->id}}" name="idPedido" >
        @endforeach

        <div class="container_preco">
          <p class="texto_preco">R$ {{$produto->valor}}</p>
        </div>
       

      </section>
      @endforeach
@endif


 
      <script src="{{asset('js/novopedido.js')}}"></script>

     

      
        </body>

        <footer>
            <div class="footer_container">
                <h1 class="texto_footer">
                    Desenvolvido por SyServ®
                </h1>
            </div>
        </footer>
       
    
      

       
        
</html>

      
      <!-- <section class="container_principal">

        <div class="principal_produto">
          <h1 class="nome_lanche">Hamburguer Simples</h1 >
        </div>
        <div class="container_imagem">
          <img src="{{asset('img/lanches/simples.png')}}" alt="" class="imagem">
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
          <img src="{{asset('img/lanches/add.png')}}" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="{{asset('img/lanches/remove.png')}}" alt="" type="button" class="input_menos" id="remover">
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
          <img src="{{asset('img/lanches/bacon.png')}}" alt="" class="imagem">
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
          <img src="{{asset('img/lanches/add.png')}}" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="{{asset('img/lanches/remove.png')}}" alt="" type="button" class="input_menos" id="remover">
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
          <img src="{{asset('img/lanches/Furioso.png')}}" alt="" class="imagem">
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
          <img src="{{asset('img/lanches/add.png')}}" alt="" type="button" class="input_mais" id="adicionar">
          <input type="number" value="" class="input_quantidade" id="quantidade">
          <img src="{{asset('img/lanches/remove.png')}}" alt="" type="button" class="input_menos" id="remover">
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
