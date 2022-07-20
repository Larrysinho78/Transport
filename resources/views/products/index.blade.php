@extends('layouts.app')

@section('content')
<div class="container-fluid" style="">
    <h1 style="color: #fff;text-align: center">Vista Index (LISTA) de Tarjetas de Operación</h1>

    <a class="btn btn-success mb-3" href="{{ route('products.create') }}">Nuevo Ingreso</a>

    @if(empty($products))
        <div class="alert alert-warning">
            <h4 style="color: #fff; ">La Lista está Vacia!!!</h4>
        </div>
    @else
        <div class="table-responsive" >
            <table class="table  table-striped table-dark">
                <thead>
                    <tr>
                        <th >Nº de Tarjeta</th>
                        <th >Nº RAD</th>
                        <th >Nº Reg. Operador</th>
                        <th >Categoría</th>
                        <th >Operador</th>
                        <th >Propietario</th>
                        <th >Marca</th>
                        <th >Modelo</th>
                        <th >Capacidad</th>
                        <th >Clase</th>
                        <th >Placa</th>
                        <th >Rutas</th>
                        <th >Fecha Emision</th>                        
                        <th>Fecha de Inicio</th>
                        <th>Fecha Final</th>
                        <th>Nuevo / Renovación</th>
                        {{-- <th>Códifgo QR</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td> {{ $product->id }} </td>
                            <td> {{ $product->Res_Adm }} </td>
                            <td> {{ $product->Reg_Operador }} </td>
                            <td> {{ $product->Categoria }} </td>
                            <td> {{ $product->Operador }} </td>
                            <td> {{ $product->Propietario }} </td>
                            <td> {{ $product->Marca }} </td>
                            <td >{{ $product->Modelo }} </td>  
                            <td> {{ $product->Capacidad }} </td>
                            <td >{{ $product->Clase }} </td>  
                            <td> {{ $product->Placa }} </td>
                            <td >{{ $product->Rutas_Aut }} </td>  
                            <td> {{ $product->Fecha_Emision->format('d/m/Y') }} </td>
                            <td> {{ $product->Fecha_Inicio->format('d/m/Y') }} </td>
                            <td> {{ $product->Fecha_Final->format('d/m/Y') }} </td>
                            <td> {{ $product->Estado }} </td>
                             {{-- <td><img src=" {{ asset('storage').'/'.$product->Qr }}" alt=""> </td> para que muestre la imagen pero falta un storage:link --}}
                                {{-- <td>   {{ $product->Qr }} </td> --}}
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">Ver</a> 
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">Editar</a>
                                <a class="btn btn-sm btn-danger" href="{{ route('products.imprimir',$product->id) }}"><i class="fa fa-fw fa-print"></i>PDF</a>
                                <form method="POST" class="d-inline" action="{{ route('products.destroy', $product->id) }}" >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-link" type="submit">Borrar</button>
                                </form>
                            </td>                     
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>.
    @endif
</div>
@endsection