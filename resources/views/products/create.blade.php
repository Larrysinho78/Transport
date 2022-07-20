@extends('layouts.app')

@section('content')
<div class="container-fluid" style=" font-size: 20px;  background: #DE6B70; ">
    {{-- font-weight: normal;
            background: #f50000; 
            border-top: 4px solid #f44336; 
            border-left: 1px solid #fff; 
            border-bottom: 1px solid #fff; 
            color: #fff; 
            text-align: center; --}}
    <div class="col-12 text-center" style="color: #fff; font-size: 70px; ">
        <label >Nueva Tarjeta </label>
    </div>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="container-fluid">
            <div class="form-row mb-2">
                <label>Nº de Resolución Adm</label>
                <input class="form-control" type="text" class="form-control" name="Res_Adm" title="Res_Adm" value="{{ old('Res_Adm') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Nº de Registro Operador</label>
                <input class="form-control" type="text" class="form-control" name="Reg_Operador" title="Reg_Operador" value="{{ old('Reg_Operador') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Categoría</label>
                <select class="custom-select" name="Categoria" required>
                    <option value="" selected> Ingrese una Opción...</option>
                    <option {{ old('Categoria') == 'P-Particular' ? 'selected' :'' }} value="P-Particular"> P-Particular </option>
                    <option {{ old('Categoria') == 'M-Motos_y_cuatriciclos' ? 'selected' :'' }} value="M-Motos_y_cuatriciclos"> M-Motos_y_cuatriciclos </option>
                    <option {{ old('Categoria') == 'Profesional_A' ? 'selected' :'' }} value="Profesional_A"> Profesional_A </option>
                    <option {{ old('Categoria') == 'Profesional_B' ? 'selected' :'' }} value="Profesional_B"> Profesional_B </option>
                    <option {{ old('Categoria') == 'Profesional_C' ? 'selected' :'' }} value="Profesional_C"> Profesional_C </option>
                    <option {{ old('Categoria') == 'T-Maquinaria_Pesada' ? 'selected' :'' }} value="T-Maquinaria_Pesada">T-Maquinaria_Pesada</option>           
                </select>
            </div>
            <div class="form-row mb-2">
                <label>Operador</label>
                <input class="form-control" type="text" class="form-control" name="Operador" title="Operador" value="{{ old('Operador') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Propietario</label>
                <input class="form-control" type="text" class="form-control" name="Propietario" title="Propietario" value="{{ old('Propietario') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Marca</label>
                <input class="form-control" type="text" class="form-control" name="Marca" title="Marca" value="{{ old('Marca') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Modelo</label>
                <input class="form-control" type="text" class="form-control" name="Modelo" title="Modelo" value="{{ old('Modelo') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Capacidad</label>
                <input class="form-control" type="text" class="form-control" name="Capacidad" title="Capacidad" value="{{ old('Capacidad') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Clase</label>
                <input class="form-control" type="text" class="form-control" name="Clase" title="Clase" value="{{ old('Clase') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Placa</label>
                <input class="form-control" type="text" class="form-control" name="Placa" title="Placa" value="{{ old('Placa') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Rutas Autorizadas</label>
                <input class="form-control" type="text" class="form-control" name="Rutas_Aut" title="Rutas_Aut" value="{{ old('Rutas_Aut') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Fecha de Emisión</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Emision" title="Fecha_Emision" value="{{ old('Fecha_Emision') }}" required>
            </div>
            <div class="form-row mb-2">
                <label> <b> Duración del Viaje </b></label>
                
            </div>
            <div class="form-row mb-2">
                <label>Fecha de Inicio</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Inicio" title="Fecha_Inicio" value="{{ old('Fecha_Inicio') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Fecha Final</label>
                <input class="form-control" type="date" class="form-control" name="Fecha_Final" title="Fecha_Final" value="{{ old('Fecha_Final') }}" required>
            </div>
            <div class="form-row mb-2">
                <label>Estado</label>
                <select class="custom-select" name="Estado" required>
                    <option value="" selected> Ingrese una Opción...</option>
                    <option {{ old('Estado') == 'Nuevo' ? 'selected' :'' }} value="Nuevo">Nuevo</option>
                    <option {{ old('Estado') == 'Renovación' ? 'selected' :'' }} value="Renovación">Renovación</option>        
                </select>
            </div>
            <div class="form-row mb-2">
                <label>Código QR</label>
                <input class="form-control" type="file"  class="form-control" name="Qr" title="Qr" value="{{ old('Qr') }}" required>
            </div>
            <div class="form-row mt-3 mb-3">
                <button class="btn btn-success btn-lg" type="submit">Crear Tarjeta</button>
            </div>
        </div>
        
    </form>
</div>
@endsection