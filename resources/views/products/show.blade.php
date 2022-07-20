@extends('layouts.app')

@section('content')
    {{-- <div class="col-12 text-center">
        <h1>Viático Nº: {{ $provision->id }}</h1>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="card">
                
                <div class="table-responsive" style="font-family: 'Courier New', Courier, monospace; font-size: 14pt">
                    <p>Fecha: {{ date('Y-m-d') }}</p>
                    @include('components.product_card')

                </div>
                <div class="card-footer">
                    <a href="{{ route('products.index', $product->id) }}" class="btn btn-success">Volver</a> 
                </div>
            </div>
        </div>
    </div>
@endsection