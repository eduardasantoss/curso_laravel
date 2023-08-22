<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Contato;  // para utilizar meu Model Contato

class ContatoController extends Controller{
    public function index(){
        $contatos = [
          (object) ["nome"=>"Maria Eduarda","tel"=>"35 998275352"],
          (object) ["nome"=>"João Hugo","tel"=>"35 998276688"]
        ];
        $profissao = [
            (object) ["cargo"=>"Estagiaria","formacao"=>"Ciência da Computação"],
            (object) ["cargo"=>"Analista Senior","formacao"=>"Ciência da Computação"]

        ];
        $contato = new Contato();
        $con = $contato->lista(); //utilizando o método lista de Contato
        
        return view('contato.index',compact('contatos','profissao')); 
        //passo o diretório da view e o nome  do arquivo -> contato.index 
       // (importante ter o .blade.php) mas aqui não precisa especificar porque ele entende
       //compact : esse metodo vai possibilitar a viw de acessar essa listagem $contatos, $profissao
    }
    public function criar(Request $req){ //variável que recebe nossa requisição
        //dd($req);  var_dump com die
        return "Esse é o criar do ContatoController";


    }
    public function editar(Request $req){
        return "Esse é o editar do ContatoController";

    }
    

    

}
