@extends('main')

@section('content')
<form action = "{{ url('criar-post') }}" method="post" enctype= "multipart/form-data">
  {!! csrf_field() !!}

   @if (session('error'))
      <div class="alert alert-danger">
           {{ session('error') }}
      </div>
   @endif

   @if (session('success'))
      <div class="alert alert-success">
           {{ session('success') }}
      </div>
   @endif
  <div class="form-group">
    <label for="titulo">Título</label>
    <input name ="titulo" type="text" class="form-control" id="titulo" aria-describedby="emailHelp" placeholder="Titulo...">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="conteudo">Conteudo</label>
    <textarea class="form-control" name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" id="imagem" name="imagem">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection