@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
    <div class="alert alert-success">
        <b>O funcionário {{$idfunc}} território foi adicionado com sucesso!</b>
    </div>
</div>
<script>
        setTimeout(() => {
        window.location.href="http://localhost:8000/funcionarios-territorios"
        }, 1000);
    </script>


@stop