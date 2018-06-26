
@extends('layout/principal')

@section('conteudo')

    @if(empty($funcionarios_territorios))
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
                <td class="text-center h6">IDFuncionário</td>
                <td class="text-center h6">IDTerritório</td>

                <td class="text-center h6">Ações</td>
            </tr>
            @foreach ($funcionarios_territorios as $ft)
            <tr >
                <td class="text-center">{{ $ft->IDFuncionario }}</td>
                <td class="text-center">{{ $ft->IDTerritorio }}</td>
                <td>
                    <div class="form-row">
                        <a  class="btn btn-danger" href="{{action ('CrudController@removefunter', $ft->IDFuncionario)}}">Remover</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
@stop