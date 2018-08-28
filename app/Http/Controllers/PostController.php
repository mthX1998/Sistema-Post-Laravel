<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Posts;
use Redirect;
use File;

class PostController extends Controller
{
    
    public function create(){
        if(Input::file('imagem')){
            $imagem = Input::file('imagem');
            $extensao = $imagem->getClientOriginalExtension();

            if($extensao != 'jpg' && $extensao != 'png'){
                 return back()->with('error', 'ERRO : Arquivo não é uma imagem');
            }
        }

        $post = new Posts();
        $post->Titulo = Input::get('titulo');
        $post->Conteudo = Input::get('conteudo');
        $post->Imagem = "";
        if(Input::file('imagem')){
            
            File::move($imagem, public_path().'/imagem-post/post-id_'.$post->id. '.'. $extensao);
            $post->imagem = '/imagem-post/post-id_'.$post->id. '.'. $extensao;
            $post->save();
            return back()->with('success', 'Post lançado com sucesso');
        }
        return redirect('/');
    }



    public function index(){
        $posts = Posts::all();
         return view('post.index-post')->with('posts', $posts);
    }





}
