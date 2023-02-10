<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Uma rota que retorna uma view
Route::view('/view', 'viul');

// Uma rota que retorna um return de uma function
Route::get('/games', function (){
    return "<h1>Rota que retorna o resultado de uma função</h1>";
});


// Rota que vai para um view e passa um array contem uma variavel atribuindo um valor
Route::view('/jogos', 'jogos',['name'=>'Star wars']);


// Rota que se pode passar um parametro pela a rota e a função irá pegar o valor que será passado
// para a view e esse valor será imprimido da view
// Colocando um "?" depois do parametro faz com que seja opcinoal e não quebra a rota
// e tem que colocar o parametro dentro da função recebendo o valor de null
Route::get('/pizzas/{sabor?}',function ($sabor = null){
    //Fazendo uma condição para quando não tiver nenhum valor retorna uma string com um texto default.
    if ($sabor == null){
        $sabor = "Não tem nenhum sabor";
        return view('pizza',['sabores'=>$sabor]);
    }
    return view('pizza',['sabores'=>$sabor]);
})->where('sabor', '[A-Za-z]+');
// where é tipo uma validação que faz com que no parametro so aceite string
// ex de numb: where('id','[0-9]+';


// Rota que recebe um id e um parametro de nome de moto
Route::get('/motos/{id?}/{nomeMoto}',function($id = null, $nomeMoto = null){
    if($nomeMoto == null){
        $nomeMoto = "Nome de moto não passado";
        return view('/motos', ['$modelo'=> $nomeMoto]);
    }
    return view('/motos',['id'=> $id, 'modelo'=>$nomeMoto]);
})->where(['id'=>'[0-9]+','nomeModelo'=>'[a-z]+']);


//Rota que irá aparecer automaticamente quando for colocado uma url erra
Route::fallback(function (){
    return "Não existe essa rota otário";
});
