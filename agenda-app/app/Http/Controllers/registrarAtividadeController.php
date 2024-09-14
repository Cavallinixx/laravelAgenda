<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarEvento;

class registrarAtividadeController extends Controller
{
    public function index(){

        $dados = registrarEvento::all();//Coletar todos os dados do banco
        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do metodo 

    public function store(Request $request){
        $data = $request->input('dataEvento');//Coletando um dado, chamando pelo nome
        $descricao = $request->input('descricao');

        //Adicionando no Banco de Dados...
        $model = new registrarEvento();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//salvar no BD
        return redirect('/cadastrar');
    }//fim do metodo store

    public function Consultar(){
        $ids = registrarEvento::all();

        return view('paginas.consultar', compact('ids'));
    }//fim do metodo
}//fim da classe
