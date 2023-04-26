<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class empleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'departamento' => 'required',
        ]);

        $empleado = new Empleado([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'edad' => $request->get('edad'),
            'departamento' => $request->get('departamento'),
        ]);

        $empleado->save();

      
        return redirect('/empleados/' . $empleado->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
     
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'departamento' => 'required',
        ]);

        $empleado = new Empleado([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'edad' => $request->get('edad'),
            'departamento' => $request->get('departamento'),
        ]);

        $empleado->save();

      
        return redirect('/empleados/' . $empleado->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        
        return redirect('/empleados');
    }
}
