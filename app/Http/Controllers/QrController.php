<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{
    public function qr_generate()
    {
        $nombre = 'Alan Rodrigo Mendoza Gutierrez.';
        $edad = 26;
        return QrCode::size(300)
                ->color(199, 0, 57)
                ->margin(2)
                ->encoding('UTF-8')
                ->generate("Nro de tarjeta: 425698
                Operador: $nombre
                Marca: Honda
                Capacidad: 500 kg.
                Categoria: B
                ");
                // '../public/qrtransport/qrtransport.svg'
    }
}
