<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $var = "HomePage do Sistema de Gestão para grupos de Investimento";
        return view('welcome', [
            'title' => $var
        ]);
    }

    public function cadastrar()
    {
        echo "Tela de cadastro";
    }

    public function fazerLogin()
    {
        echo "Tela para fazer login";
    }
}
