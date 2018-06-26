@extends('layout.principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
    <div class="alert alert-success">
        <b>O térritório  {{$idter}} foi adicionada com sucesso!</b>
    </div>
</div>
<script>
        setTimeout(() => {
        window.location.href="http://localhost:8000/territorios"
        }, 1000);
    </script>


@stop