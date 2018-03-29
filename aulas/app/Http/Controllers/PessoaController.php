<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Support\Facades\Input;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::latest()->get();
        return view('layout.master', compact('pessoas'));
    }
    
    public function store()
    {
        Pessoa::create(request(['name', 'surname', 'email', 'telephone', 'cpf']));
        return redirect('/');
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);

        return view('layout.form', ['pessoa' => $pessoa]);
    }

    public function update($id)
    {
        $pessoa = Pessoa::find($id);


        $pessoa->name = Input::get('name');
        $pessoa->email = Input::get('email');
        $pessoa->cpf =  Input::get('cpf');
        $pessoa->telephone =  Input::get('telephone');
        $pessoa->surname =  Input::get('surname');;
        $pessoa->save();

        return redirect('/pessoa');

    }

    public function destroy($id)
    {
        Pessoa::destroy($id);

        return redirect('/pessoa');
    }
}
