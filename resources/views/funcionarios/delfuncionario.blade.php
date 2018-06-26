@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
    <div class="alert alert-success">
        <b>O Funcionário {{$flag}} foi deletado com sucesso!</b>
    </div>
    <script>
        setTimeout(() => {
        window.location.href="http://localhost:8000/funcionarios"
        }, 1000);

    </script>
</div>

@stop