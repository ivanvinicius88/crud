
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
  <div class="container col-md-10">  
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
                        <a  class="btn btn-danger" href="{{action ('CrudController@removeter', $t->IDTerritorio)}}">Remover</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endif
@stop