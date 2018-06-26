@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
    <div class="alert alert-success">
        <b>A Região {{$rflag}} foi deletado com sucesso!</b>
    </div>
    <script>
        setTimeout(() => {
        window.location.href="http://localhost:8000/regioes"
        }, 1000);
    </script>
</div>

@stop