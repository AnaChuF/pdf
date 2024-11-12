<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
    <style>
        @page {
            margin-top: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }


        .row {
            width: 100%;
        }

        .row::after {
            content: " ";
            display: block;
            height: 0;
            clear: both;
        }

        .row>.col {
            float: left;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }
    </style>


    <div class="row"
        style="height : 12%; background:#006369;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">

        <div class="col" style="border: 1px solid white">

            <h3 style="color: white">AUTOMOTORES</h3>
        </div>
        <div class="col" style="float: right;  padding-top: 20px; padding-right: 20px">
            <img src="{{ public_path('img/logo.jpg') }}" alt="Logo" height="50px">

        </div>

    </div>

    <div style="background: #ebebeb; border-radius: 20px;">

        <div class="row">
            <h4 style="padding-left: 20px; color: #006369">CONDUCCIÓN A LA DEFENSIVA (12 HORAS)</h4>
            <p style="font-size: 12px;  padding: 10px 20px 0px 20px;  margin-bottom: 0px">
                Al término del curso, el participante conocerá las leyes y normas del tránsito, así como las condiciones
                físicas y psíquicas que debe de tener para conducir un vehículo y evitar incidentes y accidentes.

            </p>

            <div class="col" style="width: 50%">


                <ul style="font-size: 11px; padding-left: 30px">
                    <li>Ley General de Transporte y Tránsito Terrestre</li>
                    <li>Reglamento Nacional de Tránsito.</li>
                    <li>Sistema de control de licencias de conducir por puntos. </li>
                    <li>Reglamento Nacional de Administración de Transporte.</li>
                    <li>Reglamento Nacional de Vehículos. </li>
                    <li>Reglamento Nacional de Responsabilidad Civil y Seguros
                        obligatorios por accidentes de tránsito. </li>
                    <li>Los aspectos fundamentales del manejo defensivo que
                        evitan estar involucrado en un accidente de tránsito. </li>
                    <li>Factores y Condiciones que alteran la conducta personal en la conducción</li>
                    <li>El alcohol y la conducción de vehículos no son buenos compañeros.</li>
                </ul>

            </div>
            <div class="col" style="background: #cccccc">
                {{-- asd --}}
                {{-- <div class="row"  style="width: 100%;background: rgb(0, 255, 94)"> --}}
                    <div class="col" style="width: 20%;background: blue">


                        <img src="{{ public_path('img/play.svg') }}" width="1px" alt="Logo" height="1px">



                    </div>
                    {{-- <div class="col" style="width: 10%;background: rgb(113, 113, 133)">asd</div>
                    <div class="col" style="width: 10%;background: rgb(83, 83, 251)">asdaaa</div>
                    <div class="col" style="width: 10%;background: rgb(0, 255, 94)">asdas</div> --}}
                {{-- </div> --}}
            </div>


        </div>






    </div>







</body>

</html>
