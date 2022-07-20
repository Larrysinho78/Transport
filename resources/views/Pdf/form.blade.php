<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">       
        <title>Laravel</title>  
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">          
        <style>
            @page{
                margin: 0cm 0cm;
                font-size: 1em;
            }
            body{
                margin: 2cm 2cm 2cm;               
            }
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                text-align: right;
                line-height: 30px;
            }
            footer {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                text-align: right;
                line-height: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">            
            {{--  @foreach($datosCh as $datosCh) --}}
            @if($datosCh == $datosCh)
                {{-- CABECERA --}}
                <div class="container-fluid" style="width: 100%;">
                    <div align="center" style="padding-left: 0px; padding-top: 3px; position: relative;	float: left; width: 17%;  height: 12%;">
                        <img src="assets\img\escudoact.jpg"> 
                    </div>
                    
                    <div align="center" style="font-family:arial; font-size:16px; padding-top: 30px; padding-right: 10px; padding-left: 10px; padding-bottom: 0px;
                                float: left; width: 70%;  height: 7%;">
                        <b>TARJETA DE OPERACIÓN<br>
                        DIRECCIÓN DE TRANSPORTE Y TELECOMUNICACIONES <br>GADLP</b>
                    </div>            
                </div>
                <br> <br> <br> <br> <br> <br>

                <div class="container-fluid" style="width: 100%;">
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                                <b>Nº TARJETA: </b> 
                    </div>
                    <div align="left" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                        float: left; width: 30%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->id }}
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                        float: left; width: 5%; height: auto;">    &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 25%; border: solid 1px black; height: auto;">
                                <b>Nº REGISTRO DE OPERADOR: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                        float: left; width: 15%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Reg_Operador }}
                    </div>
                </div>
                <br>
                
                <div class="container-fluid" style="width: 100%;  ">                           
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px;  position: relative;	
                                float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>OPERADOR: </b> 
                    </div>
                    
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px;  position: relative;
                                float: left; width: 30%; border: solid 1px black;  height: auto;">
                        {{ $datosCh->Operador }}
                    </div>
                    
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                float: left; width: 5%; height: auto;">    &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>PROPIETARIO: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                float: left; width: 25%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Propietario }}
                        
                    </div>	
                </div>
                <br>
                
                <div class="container-fluid" style="width: 100%;  ">                           
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px;  position: relative;	
                                float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>MARCA: </b> 
                    </div>
                    
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px;  position: relative;
                                float: left; width: 10%; border: solid 1px black;  height: auto;">
                        {{ $datosCh->Marca }}
                    </div>
                    
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                float: left; width: 4%; height: auto;">    &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>MODELO: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Modelo }}
                    </div>

                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                float: left; width: 4%; height: auto;">    &nbsp;                    
                    </div>
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>CAPACIDAD: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Capacidad }}
                        
                    </div>	
                </div><br>

                <div class="container-fluid" style="width: 100%;  ">                           
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px;  position: relative;	
                                float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>CLASE: </b> 
                    </div>
                    
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px;  position: relative;
                                float: left; width: 10%; border: solid 1px black;  height: auto;">
                        {{ $datosCh->Clase }}
                    </div>
                    
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                float: left; width: 4%; height: auto;">    &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>CATEGORÍA: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Categoria }}
                    </div>

                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; margin-left: 10px;	position: relative;	
                                float: left; width: 4%; height: auto;">    &nbsp;                    
                    </div>
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 15%; border: solid 1px black; height: auto;">
                        <b>PLACA: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Placa }}
                        
                    </div>	
                </div><br>

                <div class="container-fluid" style="width: 100%;">
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; position: relative;
                                        float: left; width: 20%; border: solid 1px black; height: auto;">
                                <b>RUTAS AUTORIZADAS </b> 
                    </div>
                    <div align="left" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                        float: left; width: 30%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Rutas_Aut }}
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  position: relative;	
                                        float: left; width: 3%; height: auto;">    &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 30%; border: solid 1px black; height: auto;">
                                <b>RESOLUCIÓN ADMINISTRATIVA: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                        float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Res_Adm  }}
                    </div>
                </div>
                <br>

                <div class="container-fluid" style="width: 100%;">
                    <div align="center" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; 	position: relative;
                                float: left; width: 20%; border: solid 1px black; height: auto;">
                        <b>DURACIÓN DEL VIAJE : </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 24%; border: solid 1px black; height: auto;">
                        {{ $datosCh->Fecha_Inicio->format('d/m/Y') }}<b> AL </b> {{ $datosCh->Fecha_Final->format('d/m/Y') }}
                    </div>						
                </div><br> 

                <div class="container-fluid"  style="width: 100%;">
                    <div align="left" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black; height: auto;">
                        <b>NUEVO/RENOVACIÓN:</b> 
                    </div>
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black;   height: auto;">
                        {{ $datosCh->Estado }}
                    </div>
                </div><br><hr style="border: solid 1px black;">
            
                {{-- 2da parte --}}
                <div align="center" style="font-family:arial;  width: 100%;   ">
                    <span  style="font-weight:bold">RESOLUCIÓN ADMINISTRATIVA</span>             
                </div><br> <br>
    
                <div class="container-fluid" style="width: 100%;">
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                        float: left; width: 30%; border: solid 1px black; height: auto;">
                                <b>RESOLUCIÓN ADMINISTRATIVA: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                                        float: left; width: 10%; border: solid 1px black;   height: auto;">
                                {{ $datosCh->Res_Adm  }}
                    </div>

                    <div align="center" style="font-family:arial; font-size:11px;  position: relative; float: left; width: 12%; height: auto;">    
                        &nbsp;                    
                    </div>

                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                        float: left; width: 25%; border: solid 1px black; height: auto;">
                        <b>Nº REGISTRO DE OPERADOR: </b> 
                    </div>
                    <div align="center" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                            float: left; width: 15%; border: solid 1px black;   height: auto;">
                            {{ $datosCh->Reg_Operador }}
                    </div>
                </div>
                <br>
        
                <div class="container-fluid" style="width: 100%;  ">                           
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px;  position: relative;	
                                float: left; width: 10%; border: solid 1px black; height: auto;">
                        <b>OPERADOR: </b> 
                    </div>
                    
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px;  position: relative;
                                float: left; width: 30%; border: solid 1px black;  height: auto;">
                        {{ $datosCh->Operador }}
                    </div>
                    
                    <div align="center" style="font-family:arial; font-size:11px;  position: relative; float: left; width: 12%; height: auto;">    
                        &nbsp;                    
                    </div>
                    
                    <div align="right" style="font-family:arial; font-size:11px; padding-left: 10px; position: relative;
                            float: left; width: 20%; border: solid 1px black; height: auto;">
                            <b>RUTAS AUTORIZADAS </b> 
                    </div>
                    <div align="left" style="font-family:arial; font-size:11px;  padding-left: 10px; position: relative;	
                            float: left; width: 20%; border: solid 1px black;   height: auto;">
                        {{ $datosCh->Rutas_Aut }}
                    </div>	
                </div>
                <br>

                <div class="container-fluid"  style="width: 100%;">
                    <div align="left" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black; height: auto;">
                        <b>FECHA DE EMISIÓN:</b> 
                    </div>
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black;   height: auto;">
                        {{ $datosCh->Fecha_Emision->format('d/m/Y') }}
                    </div>
                </div><br>

                <div class="container-fluid"  style="width: 100%;">
                    <div align="left" style="font-family:arial; font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black; height: auto;">
                        <b>NUEVO/RENOVACIÓN:</b> 
                    </div>
                    <div align="left" style="font-family:arial;	font-size:11px; padding-left: 10px; padding-top: 0px; padding-bottom: 0px; margin-left: 0px; position: relative;
                                float: left; width: 20%; border: solid 1px black;   height: auto;">
                        {{ $datosCh->Estado }}
                    </div>
                </div><br>

                <div class="container-fluid" style="width: 100%; float: left; height:80px; ">
                    <table style="font-size:10px; text-align:center; width:100%;">
                        <tr>
                            <td style="height:40px;"></td>
                        </tr>
                        <tr>
                            <td style="height:10px;">_____________________________________________________</td>
                        </tr>
                        <tr>
                            <td style="height:20px;">Firma: RESPONSABLE</td>
                        </tr>
                    </table>
                </div><br><br><br><br>
            @endif
           
        </div>
        
        {{-- <div style="font-size:8px;">
            <footer class="blockquote-footer">
                AUT &#169; GADLP
            </footer>
        </div> --}}

        

            
    </body>
</html>