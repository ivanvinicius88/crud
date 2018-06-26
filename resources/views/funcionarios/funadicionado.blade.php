@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
    <div class="alert alert-success">
        <b>O Funcionário {{$id}} foi adicionado com sucesso!</b>
    </div>
</div>
<script>
        setTimeout(() => {
        window.location.href="http://localhost:8000/funcionarios"
        }, 1000);

    </script>


@stop