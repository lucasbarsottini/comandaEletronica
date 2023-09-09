<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sobremesas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="{{asset('css/categorialanches.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="shortcut icon" href="favicon.ico.ico" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   
    
    
  </head>
  <body class="page">
   
    
    <header >
     <div class="logo_cabecalho">
      <div class="container_voltar">
      <a class="botao__fechar__cabecalho" href="/catalogo"> <img src="{{asset('img/seta.png') }}" heig > </a>
      </div>
     <img src="{{asset('img/lanches/logo.png')}}" alt="" class="imagem_logo">
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
          <p class="texto_preco">{{$produto->valor}}</p>
        </div>
       

      </section>
      @endforeach
@endif
 
      <script src="{{asset('js/novopedido.js')}}"></script>

      
        </body>
</html>
