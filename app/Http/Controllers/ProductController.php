<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('imprimir');      
        /*  $this->middleware('auth')->except(['index','edit']); Protegera todo excepto a index y edit 
            $this->middleware('auth')->only('index);    Protegera solamente a index
        */
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with([
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        //return 'Creacion de Tarjetas de Operacion';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->all();
        if($request->hasFile('Qr')){
            $product['Qr'] = $request->file('Qr')->store('uploads/Qr', 'public');
        }
        $product = Product::create($product);
        return redirect()
            ->route('products.index')
            ->withSuccess("El Nuevo Viàtico con Código {$product->id} ha sido creado");
       /*  if(request()->hasFile('Qr')){
            $product['Qr'] = request()->file('Qr')->store('uploads/Qr', 'public');
        }
        $product = Product::create([
            'Res_Adm'       => request()->Res_Adm,
            'Reg_Operador'  => request()->Reg_Operador,
            'Categoria'     => request()->Categoria,
            'Operador'      => request()->Operador,
            'Propietario'   => request()->Propietario,
            'Marca'         => request()->Marca,
            'Modelo'        => request()->Modelo,
            'Capacidad'     => request()->Capacidad,
            'Clase'         => request()->Clase,
            'Placa'         => request()->Placa,
            'Rutas_Aut'     => request()->Rutas_Aut,
            'Fecha_Emision' => request()->Fecha_Emision,
            'Fecha_Inicio'  => request()->Fecha_Inicio,
            'Fecha_Final'   => request()->Fecha_Final,
            'Estado'        => request()->Estado,
            'Qr'            => request()->Qr,
        ]);
        return redirect()
            ->route('products.index')
            ->withSuccess("El Nuevo Viàtico con Código {$product->id} ha sido creado"); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        /* return "Editar la Tarjeta con Id: {$product}"; */
        return view('products.edit')->with([
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($product)
    {
        $product = Product::findOrFail($product);
        $product -> update(request()->all());
        return redirect()
            ->route('products.index');
        // return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product -> delete();
        return redirect()
        ->route('products.index');
    }

    public function imprimir($product)
    {
        $datosCh = Product::findOrFail($product);
        $pdf = \PDF::loadView('Pdf.form', compact('datosCh'));
        return $pdf->stream('Formulario-.pdf');
    }
}
