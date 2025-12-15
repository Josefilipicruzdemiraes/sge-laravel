<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    // READ
    public function index()
    {
        return view('equipamentos.index');
    }

    // CREATE (formulário)
    public function create()
    {
        return view('equipamentos.create');
    }

    // CREATE (salvar)
    public function store(Request $request)
    {
        return redirect()->route('equipamentos.index');
    }

    // UPDATE (formulário)
    public function edit($id)
    {
        return view('equipamentos.edit');
    }

    // UPDATE (salvar)
    public function update(Request $request, $id)
    {
        return redirect()->route('equipamentos.index');
    }

    // DELETE
    public function destroy($id)
    {
        return redirect()->route('equipamentos.index');
    }
}
