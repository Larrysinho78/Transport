@extends('layouts.app')

@section('content')
<div class="container-fluid" style=" font-size: 20px;  background: #DE6B70; ">
    <div class="col-12 text-center" style="color: #fff; font-size: 70px; ">
        <label> Editar Tarjeta Nº {{ $product->id}} </label>
    </div>
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        {{-- {{ method_field('PATCH') }} --}}
        <div class="container-fluid">
            <div class="form-row mb-2">
                <label>Nº de Resolución Adm </label>
                <input class="form-control" type="text" class="form-control" name="Res_Adm" title="Res_Adm" value="{{ old('Res_Adm') ?? $product->Res_Adm}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Nº de Registro Operador </label>
                <input class="form-control" type="text" class="form-control" name="Reg_Operador" title="Reg_Operador" value="{{ old('Reg_Operador') ?? $product->Reg_Operador}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Categoria</label>
                <select class="custom-select" name="Categoria" required>                    
                    <option {{ old('Categoria') == 'P-Particular' ? 'selected' : ( $product->Categoria == 'P-Particular' ? 'selected' :'') }} value="P-Particular">
                        P-Particular
                    </option>
                    <option {{ old('Categoria') == 'M-Motos_y_cuatriciclos' ? 'selected' : ($product->Categoria == 'M-Motos_y_cuatriciclos' ? 'selected' :'') }} value="M-Motos_y_cuatriciclos">
                        M-Motos_y_cuatriciclos
                    </option>
                    <option {{ old('Categoria') == 'Profesional_A' ? 'selected' : ($product->Categoria == 'Profesional_A' ? 'selected' :'') }} value="Profesional_A">
                        Profesional_A
                    </option>
                    <option {{ old('Categoria') == 'Profesional_B' ? 'selected' : ($product->Categoria == 'Profesional_B' ? 'selected' :'') }} value="Profesional_B">
                        Profesional_B
                    </option>
                    <option {{ old('Categoria') == 'Profesional_C' ? 'selected' : ($product->Categoria == 'Profesional_C' ? 'selected' :'') }} value="Profesional_C">
                        Profesional_C
                    </option>
                    <option {{ old('Categoria') == 'Maquinaria_Pesada' ? 'selected' : ($product->Categoria == 'Maquinaria_Pesada' ? 'selected' :'') }} value="Maquinaria_Pesada">
                        Maquinaria_Pesada
                    </option>           
                </select>
            </div>
            <div class="form-row mb-2">
                <label>Operador</label>
                <input class="form-control" type="text" class="form-control" name="Operador" title="Operador" value="{{ old('Operador') ?? $product->Operador }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Propietario</label>
                <input class="form-control" type="text" class="form-control" name="Propietario" title="Propietario" value="{{ old('Propietario') ?? $product->Propietario}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Marca</label>
                <input class="form-control" type="text" class="form-control" name="Marca" title="Marca" value="{{ old('Marca') ?? $product->Marca }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Modelo</label>
                <input class="form-control" type="text" class="form-control" name="Modelo" title="Modelo" value="{{ old('Modelo') ?? $product->Modelo}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Capacidad</label>
                <input class="form-control" type="text" class="form-control" name="Capacidad" title="Capacidad" value="{{ old('Capacidad') ?? $product->Capacidad}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Clase</label>
                <input class="form-control" type="text" class="form-control" name="Clase" title="Clase" value="{{ old('Clase') ?? $product->Clase}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Placa</label>
                <input class="form-control" type="text" class="form-control" name="Placa" title="Placa" value="{{ old('Placa') ?? $product->Placa}}" required>
            </div>
            
            <div class="form-row mb-2">
                <label>Rutas Autorizadas</label>
                <input class="form-control" type="text" class="form-control" name="Rutas_Aut" title="Rutas_Aut" value="{{ old('Rutas_Aut') ?? $product->Rutas_Aut}}" {{-- required --}}>
            </div>
            
            <div class="form-row mb-2">
                <label>Fecha de Emisión</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Emision" title="Fecha_Emision" value="{{ old('Fecha_Emision') ?? $product->FechaEmision}}" required>
            </div>

            <div class="form-row mb-2">
                <label> <b> Duración del Viaje </b></label>
                
            </div>
            <div class="form-row mb-2">
                <label>Fecha de Inicio</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Inicio" title="Fecha_Inicio" value="{{ old('Fecha_Inicio') ?? $product->Fecha_Inicio}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Fecha Final</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Final" title="Fecha_Final" value="{{ old('Fecha_Final') ?? $product->Fecha_Final}}" required>
            </div>
            <div class="form-row mb-2">
                <label>Estado</label>
                <select class="custom-select" name="Estado" required>
                    <option {{ old('Estado') == 'Nuevo' ? 'selected' : ($product->Estado == 'Nuevo' ? 'selected' :'') }} value="Nuevo">Nuevo</option>
                    <option {{ old('Estado') == 'Renovación' ? 'selected' :($product->Estado == 'Renovación' ? 'selected' :'') }} value="Renovación">Renovación</option>
                </select>
            </div>
            <div class="form-row mb-2">
                <label>Código QR</label>
                <input class="form-control" type="file" class="form-control" name="Qr" title="Qr" value="{{ old('Qr') ?? $product->Qr}}" required>
            </div>
            
            <div class="form-row mt-3">
                <button class="btn btn-primary btn-lg" type="submit">Editar Viático</button>
                <a href="{{ route('products.index', $product->id) }}" class="btn btn-success btn-lg">Volver</a> 
            </div>
        </div>
        
    </form>
</div>
@endsection