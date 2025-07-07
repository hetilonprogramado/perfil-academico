<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

abstract class Controller
{
    public function setCadastro(Request $request)
    {
       $requestData = $request->all();
       try {
            $dados = User::create($requestData);
            $dados['message'] = 'Cadastro realizado com sucesso!';
            return json_encode($dados);
       } catch (\Exception $ex) {
            $erro['mensagem'] = $ex->getMessage();
            return response()->json($erro, 400);
       }
    }
}
