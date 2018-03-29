<?php

namespace App\Http\Controllers;

use App\Pessoa;

class PessoaController extends Controller
{
    public function index()
    {
        return view('layout.master');
    }
    
    public function store()
    {
        Pessoa::create(request(['name', 'surname', 'email', 'telephone', 'cpf']));
        return redirect('/');
    }
}
