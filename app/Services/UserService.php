<?php

namespace App\Services; //cria uma nova classe pertencente à App Services

use App\User;
use Illuminate\Support\Facades\Log;
use Throwable;

class UserService                                         //criando nova classe
{
    public static function store($request)                //recebe as requisições do usuário
    {
        try                                               //pega as informações e tenta executar
        {
            return User::create($request);                //retorna o usuário salvo
        } 
        catch (Throwable $th)                             //pegar as mensagens de erro
        {
            Log::error($th->getMessage());                //salvar no log a mensagem de erro e retorna o null
            return null;
        }
    }
}