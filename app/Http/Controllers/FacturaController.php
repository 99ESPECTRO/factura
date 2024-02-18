<?php

namespace App\Http\Controllers;

use App\Models\Detalle;
use App\Models\Factura;
use App\Models\Producto;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vectorfacturas = Factura::all();
        return view('factura.index', ['vectorfacturas' => $vectorfacturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vectordeproductos = Producto::all();
        return view('factura.create', ['vectordeproductos' => $vectordeproductos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $factura = Factura::create([
            'nit' => $request->input('nit'),
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
        ]);
        $vectordeproductos = Producto::all();
        foreach ($vectordeproductos as &$productoActual) {
            if($request->input($productoActual->nombre.'-cantidad')>0){
                Detalle::create([
                    'factura_id' => $factura->id,
                    'producto_id' =>$productoActual->id,
                    'cantidad' => $request->input($productoActual->nombre.'-cantidad'),
                    'precio_unitario' => $request->input($productoActual->nombre.'-precio'),
                ]);
            }
        }
        //dd($request);
        return redirect()->route('factura.Index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $factura = Factura::create([
            'nit' => $request->input('nit'),
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
        ]);
        $vectordeproductos = Producto::all();
        foreach ($vectordeproductos as &$productoActual) {
            if($request->input($productoActual->nombre.'-cantidad')>0){
                Detalle::create([
                    'factura_id' => $factura->id,
                    'producto_id' =>$productoActual->id,
                    'cantidad' => $request->input($productoActual->nombre.'-cantidad'),
                    'precio_unitario' => $request->input($productoActual->nombre.'-precio'),
                ]);
            }
        }
        //dd($request);
        return redirect()->route('factura.Index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $factura = Factura::findOrFail(intval($id));
        $factura->delete();
        return redirect()->route('factura.Index');
    }
}
