<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    // LISTAR (READ)
    public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamentos.index', compact('equipamentos'));
    }

    // FORMULÁRIO DE CADASTRO
    public function create()
    {
        return view('equipamentos.create');
    }

    // SALVAR (CREATE)
    public function store(Request $request)
    {
        Equipamento::create($request->all());
        return redirect()->route('equipamentos.index');
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit($id)
    {
        $equipamento = Equipamento::findOrFail($id);
        return view('equipamentos.edit', compact('equipamento'));
    }

    // ATUALIZAR (UPDATE)
    public function update(Request $request, $id)
    {
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->update($request->all());

        return redirect()->route('equipamentos.index');
    }

    // EXCLUIR (DELETE)
    public function destroy($id)
    {
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->delete();

        return redirect()->route('equipamentos.index');
    }
}
