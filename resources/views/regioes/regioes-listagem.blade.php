
@extends('layout/principal')

@section('conteudo')

    @if(empty($regioes))
        <br>
        <div class="alert alert-danger my-5">    
           <b>Você não tem nenhuma região cadastrada.</b>
        </div>
    @else
 
 <br>
 <br>
 <div class="container col-md-8">
    <h5 class="text-center my-5">Listagem de Regiões</h5>
        <table class="table table-striped table-bordered">
            <tr class="mb-1">
                <td class="text-center h6">IDRegião</td>
                <td class="text-center h6">Descricão Região</td>
                <td class="text-center h6">Ações</td>
            </tr>
            @foreach ($regioes as $r)
            <tr >
                <td class="text-center">{{ $r->IDRegiao }}</td>
                <td class="text-center">{{ $r->DescricaoRegiao }}</td>
                <td>
                    <div class="form-row">
                        <a  class="btn btn-danger" href="{{action ('CrudController@removereg', $r->IDRegiao)}}">Remover</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endif
@stop