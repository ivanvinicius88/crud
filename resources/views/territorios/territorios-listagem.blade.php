
@extends('layout/principal')

@section('conteudo')

    @if(empty($territorios))
        <br>
        <div class="alert alert-danger my-5">    
           <b>Você não tem nenhum território cadastrado.</b>
        </div>
    @else
 
 <br>
 <br>
  <h5 class="text-center my-5">Listagem de Territórios</h5>
        <table class="table table-striped table-bordered">
            <tr class="mb-1">
                <td class="text-center h6">IDTerritório</td>
                <td class="text-center h6">Descricão Território</td>
                <td class="text-center h6">IDRegião</td>
                <td class="text-center h6">Ações</td>
            </tr>
            @foreach ($territorios as $t)
            <tr >
                <td class="text-center">{{ $t->IDTerritorio }}</td>
                <td class="text-center">{{ $t->DescricaoTerritorio }}</td>
                <td class="text-center">{{ $t->IDRegiao }}</td>
                <td>
                    <div class="form-row">
                        <form class="mx-1 my-1" action = "//funcionario-update-form.php" method="post">
                            <input type="hidden" name="IDFuncionario"  value="<//?=$funcionario['IDFuncionario']?>"/>
                            <button class="btn btn-primary">Atualizar</button>
                        </form>
                        
                        <form class="mx-1 my-1" action = "//funcionario-delete-confirma.php" method="post">
                            <input type="hidden" name="IDFuncionario" value="<//?=$funcionario['IDFuncionario']?>"/>
                            <button class="btn btn-danger">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
@stop