
@extends('layout/principal')

@section('conteudo')
<br>
<br>
<br>
<div class="container">
  <h1 class="my-4 ">Cadastrar Territórios</h1>
  <form method="POST" action="territorios/adicionater">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-row">
      <div class="form-group my-4 mx-3 col-md-2">
        <label for="idterritorio">ID</label>
        <input name="id" type="text" class="form-control" id="idterritorio" placeholder="ID"  >
      </div>
      <div class="form-group my-4 mx-3 col-md-4">
        <label for="nome">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" >
      </div>

      <div class="form-group mx-3 my-4 col-md-2">
        <label for="regiao">Regiao</label>
        <select name="regiao" id="regiao" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
   	  </div>

     </div>
     <div class="form-row">
        <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
   		  <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
	    </div>
  </form>
  <hr>
</div>

@stop