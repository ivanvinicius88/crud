
@extends('layout/principal')

@section('conteudo')

<br>
<br>
<br>
<div class="container">
		<h5 class="my-4 ">Cadastrar Funcionário Território</h5>
		<form method="POST" action="funcionarios_territorios/adicionafunter">
          <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		  <div class="form-row">
				<div class="form-group my-4 mx-3 col-md-3">
					<label for="inputEmail4">ID Funcionário</label>
					<input name="idfuncionario" type="text" class="form-control" id="inputEmail4" placeholder="Funcionário">
				</div>
				<div class="form-group my-4 mx-3 col-md-3">
					<label for="inputPassword4">ID Território</label>
					<input name="idterritorio" type="text" class="form-control" id="inputPassword4" placeholder="Território">
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