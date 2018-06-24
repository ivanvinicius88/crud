<?php 
namespace crud\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class CrudController extends Controller {
    
    public function listafun(){
        $funcionarios = DB::select('select * from funcionarios');
        return view('funcionarios/funcionarios-listagem')->with('funcionarios', $funcionarios);
    }

    public function novofun(){
        return view('funcionarios/cadfuncionario');
        }
    
    public function adicionafun(){

       $id = Request::input('id');
        $sobrenome = Request::input('sobrenome');
        $nome = Request::input('nome');
        $titulo = Request::input('titulo');
        $titulocortesia = Request::input('titulocortesia');
        $nascimento = Request::input('nascimento');
        $admissao = Request::input('admissao');
        $endereco = Request::input('endereco');
        $cidade = Request::input('cidade');
        $regiao = Request::input('regiao');
        $cep = Request::input('cep');
        $pais = Request::input('pais');
        $telefone = Request::input('telefone');
        $extensao = Request::input('extensao');
        $notas = Request::input('notas');

        DB::table('funcionarios')->insert([ 
            'IDFuncionario' => $id, 
            'Sobrenome' => $sobrenome, 
            'Nome' => $nome, 
            'Titulo' =>  $titulo,
            'TituloCortesia' => $titulocortesia,
            'DataNac' =>  $nascimento,
            'DataAdmissao' => $admissao,
            'Endereco' =>  $endereco,
            'Cidade' =>  $cidade,
            'Regiao' =>  $regiao,
            'Cep' => $cep,
            'Pais' =>  $pais,
            'TelefoneResidencial' => $telefone,
            'Extensao' =>  $extensao,
            'Notas' =>  $notas
        ]);
        return view('funcionarios/funadicionado')->with('id', $id);
    }  
    
   /* public function removefun($IDFuncionario){
        $funcionarios = funcionarios::find($IDFuncionario);
        $funcionarios->delete();
        return redirect() ->action('CrudController@listafun');
        }

        */















    public function listareg(){
        $regioes = DB::select('select * from regiao');
        return view('regioes/regioes-listagem')->with('regioes', $regioes);
    }

    public function novoreg(){
        return view('regioes/cadregioes');
        }


    public function adicionareg(){
            $idreg = Request::input('idreg');
            $descreg = Request::input('descreg');
           
            DB::table('regiao')->insert([ 
                'IDRegiao' => $idreg, 
                'DescricaoRegiao' => $descreg
            ]);
            return view('regioes/regadicionado')->with('idreg', $idreg);
        }    
     
     


    
    









    public function listater(){
        $territorios = DB::select('select * from territorios');
        return view('territorios/territorios-listagem')->with('territorios', $territorios);
    }

    public function novoter(){
        return view('territorios/cadterritorios');
        }

    public function adicionater(){
        $idter = Request::input('id');
        $descter = Request::input('nome');
        $idregg = Request::input('regiao');
        
        DB::table('territorios')->insert([ 
            'IDTerritorio' => $idter, 
            'DescricaoTerritorio' => $descter, 
            'IDRegiao' => $idregg
        ]);
        return view('territorios/teradicionado')->with('idter', $idter);
    } 



















    public function listafunter(){
        $funcionarios_territorios = DB::select('select * from funcionarios_territorios');
        return view('funcionarios_territorios/funcionarios_territorios-listagem')->with('funcionarios_territorios', $funcionarios_territorios);
    }

    public function novofunter(){
        return view('funcionarios_territorios/cadfuncionario_territorio');
        }

    public function adicionafunter(){
        $idfunc = Request::input('idfuncionario');
        $idterri = Request::input('idterritorio');
        
        DB::table('funcionarios_territorios')->insert([ 
            'IDFuncionario' => $idfunc, 
            'IDTerritorio' => $idterri
        ]);
        return view('funcionarios_territorios/funcionario_territorioadicionado')->with('idfunc', $idfunc);
    }


}