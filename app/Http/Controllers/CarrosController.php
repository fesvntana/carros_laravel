<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;


class CarrosController extends Controller
{
    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        Carro::create([
            'modelo'         => $request->modelo,
            'ano_fabricacao' => $request->ano_fabricacao,
            'placa'          => $request->placa,
            // $this->marca()->associate($request->marca),
        ]);

        return "Carro criado com Sucesso";
    }

    public function show($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.show', ['carro' => $carro]);
    }

    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.edit', ['carro' => $carro]);
    }

    public function update(Request $request, $id)
    {

        $carro = Carro::findOrFail($id);

        $carro->update([
            'modelo'         => $request->modelo,
            'ano_fabricacao' => $request->ano_fabricacao,
            'placa'          => $request->placa,
            // $this->marca()->associate($request->marca),
        ]);

        return "Carro atualizado com Sucesso";
    }

    public function delete($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.delete', ['carro' => $carro]);
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return "Carro deletado com Sucesso";
    }


}
