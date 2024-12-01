<?php

namespace App\Http\Controllers;

use App\Models\Usuarios; // Certifique-se de importar o modelo de Usuário
use Illuminate\Http\Request;

class CadUsuarioController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'num_matricula' => 'required|numeric',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:8',
            'serie' => 'required|string|max:100',
            'turma' => 'required|string|max:100',
            'turno' => 'required|string|max:100',
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string|max:255',
        ]);

        // Criação de um novo usuário
        Usuarios::create([
            'nome' => $validatedData['nome'],
            'num_matricula' => $validatedData['num_matricula'],
            'email' => $validatedData['email'],
            'senha' => bcrypt($validatedData['senha']), // Criptografando a senha
            'serie' => $validatedData['serie'],
            'turma' => $validatedData['turma'],
            'turno' => $validatedData['turno'],
            'telefone' => $validatedData['telefone'],
            'endereco' => $validatedData['endereco'],
        ]);

        // Redireciona com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    }
}
