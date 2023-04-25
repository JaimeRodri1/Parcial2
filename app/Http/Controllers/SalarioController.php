<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salario;


class SalarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['salarios'] = Salario::all();
        return view('salario.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salarioData = request()->except("_token");
        Salario::insert($salarioData);
        return redirect()->route('salario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salario=Salario::findOrFail($id);
        return view('salario.edit', compact('salario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salarioData=request()->except(['_token', '_method']);
        Salario::where('id', '=', $id)->update($salarioData);
        return redirect('salario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Salario::destroy($id);
        return redirect('salario');
    }
}
