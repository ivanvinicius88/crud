
@extends('layout/principal')

@section('conteudo')

    @if(empty($funcionarios))
        <br>
        <div class="alert alert-danger my-5">    
           <b>Você não tem nenhum funcionário cadastrado.</b>
        </div>
    @else
 
 <br>
 <br>
  <h5 class="text-center my-5">Listagem de Funcionários</h5>
        <table class="table table-striped table-bordered">
            <tr class="mb-1">
                <td class="text-center h6">IDFuncionario</td>
                <td class="text-center h6">Nome</td>
                <td class="text-center h6">Sobrenome</td>
                <td class="text-center h6">Titulo</td>
                <td class="text-center h6">Cortesia</td>
                <td class="text-center h6">Nascimento</td>
                <td class="text-center h6">Endereço</td>
                <td class="text-center h6">Cidade</td>
                <td class="text-center h6">Região</td>
                <td class="text-center h6">Telefone</td>
                <td class="text-center h6">Ações</td>
            </tr>
            @foreach ($funcionarios as $f)
            <tr >
                <td class="text-center">{{ $f->IDFuncionario }}</td>
                <td class="text-center">{{ $f->Nome }}</td>
                <td class="text-center">{{ $f->Sobrenome }}</td>
                <td class="text-center">{{ $f->Titulo }}</td>
                <td class="text-center">{{ $f->TituloCortesia }}</td>
                <td class="text-center">{{ $f->DataNac }}</td>
                <td class="text-center">{{ $f->Endereco }}</td>
                <td class="text-center">{{ $f->Cidade }}</td>
                <td class="text-center">{{ $f->Regiao }}</td>
                <td class="text-center">{{ $f->TelefoneResidencial }}</td>
                <td>
                    <div class="form-row">
                        <a  class="btn btn-danger" href="{{action ('CrudController@removefun', $f->IDFuncionario)}}">Remover</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    @endif
@stop