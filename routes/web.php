<?php
use App\Posts;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/bemvindo',function(){
    $post = new Posts;
    $post->Titulo = "Teste123";
    $post->Conteudo = "Just a test";
    $post->Imagem = "Sem Imagem";
    $post->save();
    return view('main');
});

Route::post('criar-post', 'PostController@create');


Route::get('criar-post', function() {
    return view('post.create-post');
});

Route::get('listar-post', 'PostController@index');

