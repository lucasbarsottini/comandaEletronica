/******/ (() => { 
  var __webpack_exports__ = {};
  
  $(document).ready(function () {
    $('#pedidoForm').submit(function (event) {
      event.preventDefault();
      var nomeCliente = $('#nomeClienteInput').val();
      var idPedido = $('#numeroPedido').val();
      var dados = {
        pedido: {
          nome: nomeCliente,
          id: idPedido
        }
      };

      var token = $('meta[name^="csrf-token"]').attr('content');
      $.ajax({
        type: 'POST',
        url: '/criar-pedido',
        data: JSON.stringify(dados),
        contentType: 'application/json',
        headers: {
          'X-CSRF-TOKEN': token
        },
        success: function success(response) {
          console.log("Pedido Iniciado!");
          $('#numeroPedido').text('Numero: ' + response.numeroPedido);
          window.location.href = '/catalogo' ;
          console.log(response);
        },
        error: function error(xhr, status, _error) {
          console.log("Erro ao Iniciar Pedido", _error);
        }
      });
    });
  });




    $('.input_adicionar').click(function (event) {
      event.preventDefault();
      var idLanche = $(this).data('id');
      
      var idPedido = $('input[name="idPedido"]').data('id');
      var quantidadeInput = $('#quantidade-' + idLanche).val();




      var token = $('meta[name="csrf-token"]').attr('content');
  

      console.log("Valor do idPedido: ", idPedido);
      console.log("Valor do idLanche: ", idLanche);
      console.log("Quantidade Adicionada: " , quantidadeInput);
  

      
      var dados = {
        idLanche: idLanche,
        idPedido: idPedido,
        quantidadeInput: quantidadeInput,
        _token
        : token
      };



    $.post('/adicionar-lanche', dados, token).done(function (response) {
      alert("Produto Adicionado com Sucesso!");
      console.log("Produto Adicionado com Sucesso!");
      console.log(response);

    }).fail(function (xhr, status, error) {
      
      console.log("Erro ao adicionar o produto", error);
    });

  });

  document.addEventListener("DOMContentLoaded", function() {
    var aumentarQuantidade = document.querySelectorAll(".input_mais");
    var quantidadeInputs = document.querySelectorAll(".input_quantidade");

    aumentarQuantidade.forEach(function(btn, index) {
        btn.addEventListener("click", function(event) {
            event.preventDefault();
            var produtoID = btn.getAttribute("data-id");
            var quantidadeInput = document.getElementById("quantidade-" + produtoID);
            var quantidadeAtual = parseInt(quantidadeInput.value);
            quantidadeInput.value = quantidadeAtual + 1;

            
        });
    });

    

    
});

document.addEventListener("DOMContentLoaded", function() {
  var removerQuantidade = document.querySelectorAll(".input_menos");
  var quantidadeInputs = document.querySelectorAll(".input_quantidade");

  removerQuantidade.forEach(function(btn, index) {
      btn.addEventListener("click", function(event) {
          event.preventDefault();
          var produtoID = btn.getAttribute("data-id");
          var quantidadeInput = document.getElementById("quantidade-" + produtoID);
          var quantidadeAtual = parseInt(quantidadeInput.value);
          if(quantidadeAtual  > 0 )
          quantidadeInput.value = quantidadeAtual - 1;

          
      });
  });

});
  
 
})()


  