{{-- <h1> <b>Viático Nº:</b> {{ $provision->id }}</h1>
<p> <b> Nº Memorandum o resolución: </b> {{ $provision->NroMemo }} </p>
<p> <b> Categoria: </b> {{ $provision->Categoria }} </p>
<p> <b> Fecha de la solicitud: </b> {{ $provision->FechaSol }} </p>
<p> <b> Motivo del Viaje: </b> {{ $provision->MotivoViaje }}</p>
<p> <b> Duración del Viaje:</b> {{ $provision->FechaInicio }} AL   {{ $provision->FechaFin }}</p>
<p> <b> Nº de Días:</b>  {{ $provision->NroDias }} </p>
<p> <b> Monto Total:</b>  {{ $provision->MontoTotal }} </p>
<p> <b> IVA:</b>  {{ $provision->Iva }}</p>
<p> <b> Liquido Pagable:</b> {{ $provision->LiquidoPagble }}</p> --}}

<table class="table table-striped">
    <tbody>
        <tr>
            <h1> <b>Tarjeta Nº:</b> {{ $product->id }}</h1>
        </tr>
        <tr>
            <th >Nº Resolución Adm:</th>
            <td> {{ $product->Res_Adm }}  </td>
        </tr>
        <tr>
            <th >Nº Regsitro Operador:</th>
            <td> {{ $product->Reg_Operador }}  </td>
        </tr>
        <tr>
            <th >Categoria:</th>
            <td> {{ $product->Categoria }} </td>
        </tr>
        <tr>
            <th >Operador:</th>
            <td> {{ $product->Operador }} </td>
        </tr>
        <tr>
            <th >Propietarios:</th>
            <td> {{ $product->Propietario }} </td>
        </tr>
        <tr>
            <th >Marca: </th>
            <td> {{ $product->Marca }}</td>
        </tr>
        <tr>
            <th >Modelo: </th>
            <td> {{ $product->Modelo }}</td>
        </tr>
        <tr>
            <th >Capacidad:</th>
            <td >{{ $product->Capacidad }}</td>
        </tr>           
        <tr>
            <th >Clase: </th>
            <td> {{ $product->Clase }}</td>
        </tr>
        <tr>
            <th >Placa: </th>
            <td> {{ $product->Placa }}</td>
        </tr>
        <tr>
            <th >Rutas Autorizadas: </th>
            <td> {{ $product->Rutas_Aut }}</td>
        </tr>
        <tr>
            <th >Fecha de la solicitud:</th>
            <td> {{ $product->Fecha_Emision }} </td>
        </tr>
        <tr>
            <th >Duración del Viaje:</th>
            <td >{{ $product->Fecha_Inicio }} <b>Al</b>  {{ $product->Fecha_Final }}</td>
        </tr>
        <tr>
            <th >Estado: </th>
            <td> {{ $product->Estado }}</td>
        </tr>
        <tr>
            <th >Código Qr: </th>
            <td> {{ $product->Qr }}</td>
        </tr>
    </tbody>
</table>