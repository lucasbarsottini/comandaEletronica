<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ComandaController;
use App\Models\ProdutoPedido;


Route::get('telainicial', function() {
    return view('inicio');
});
Route::get('login', function () {
    return view('loguin');
});

Route::get('catalogo', function () {
    return view('listaprodutos');
    
});

Route::match(['get', 'post'],'confirmado' , [PedidoController::class, 'pedidoConfirmado'])->name('confirmado');




Route::get('comandas_ativas' , function(){
    return view('comandas_ativas');
});

Route::get('lanches' , function() {
    return view('categorialanches');
});

Route::get('bebidas', function() {
    return view('categoriabebidas');
});

Route::get('sobremesas', function() {
    return view('categoriasobremesas');
});

Route::get('/database', [App\Http\Controllers\Controller::class, 'index']);


Route::post('/login', [LoginController::class, 'validarLogin'])->name('login.validar');

Route::post('/criar-pedido', [PedidoController::class,'criarPedido'])->name('criar-pedido');

Route::get('/categorias/lanches', [CatalogoController::class, 'lanches'])->name('categorias.lanches');
Route::get('/categorias/bebidas', [CatalogoController::class, 'bebidas'])->name('categorias.bebidas');
Route::get('/categorias/sobremesas', [CatalogoController::class, 'sobremesas'])->name('categorias.sobremesas');
Route::get('/section/{categoria}', [CatalogoController::class, 'gerarSection'])->name('section');

Route::post('/excluir_pedido', [PedidoController::class, 'excluirPedido'])->name('excluir_pedido');





Route::post('/adicionar-lanche', [PedidoController::class, 'adicionarPedido'])->name('adicionar-lanche');

Route::get('/view_relacionamento', [PedidoController::class, 'view'])->name('view-relacionamento');

   

Route::get('/fechamento', [CatalogoController::class, 'gerarFechamento'])->name('fechamento');

Route::post('/comandas/criar', [ComandaController::class, 'criar'])->name('comandas.criar');

Route::match(['get', 'post'],'/comandas/ativas',[ComandaController::class, 'dadosComanda'])->name('comandas.ativas');








    
