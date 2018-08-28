@extends('main')

@section('content')

<p>
  Listar posts
</p>

<div class="row">
<?php foreach ($posts as $key => $value): ?>
    <div class="col-md-4">
       <div class="thumbnail">
          <img src= {!! ($value->imagem) !!} alt=""> 
          <div class="caption">
            <h3>{!! ($value->Titulo) !!}</h3>
            <span class="pull-right"> {!! $value->created_at->diffForHumans() !!} </span>
            <p>
                <a href="#" class="btn btn-primary" role="button">Editar</a>
                <a href="#" class="btn btn-danger" role="button">Excluir</a>
            </p>
          </div>
       </div>
   </div>

<?php endforeach; ?>
</div>

@endsection
