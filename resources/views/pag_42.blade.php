<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAG 42</title>
</head>

<body>
    <style>
        @page {
            /* margin-top: 0px; */

            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .page-break {
            page-break-before: always;
            /* Inicia en una nueva página */
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

        .header {
            border: 1.5px solid white;
            margin-left: 35px;
            margin-top: 25px;
            /* padding-top: 0%; */
            padding: 8px 20px;
            border-radius: 10px;
            color: white;
            font-weight: bolder;
            width: 70%;
        }

        .header2 {
            border: 1.5px solid white;
            margin-left: 35px;
            margin-top: 25px;
            /* padding-top: 0%; */
            padding: 8px 20px;
            border-radius: 10px;
            color: white;
            font-weight: bolder;
            /* width: 70%; */
        }
    </style>


    {{-- PAG 5 --}}
    {{-- <div style="background: #0b4067; height: 100%;width: 100%; border: 10px solid">

        <div style="height : 17%; background:#1e75aa;border-bottom-left-radius: 20px; border-bottom-right-radius: 18px; width: 85%;margin:auto">
            <strong style="color: white; font-size: 30px">MÓDULOS</strong>

        </div>
    </div> --}}



    <div style="width: 100%;height: 100%;">
        <div
            style="width: 90%;margin: auto;height : 10%; background:#006369;border-bottom-left-radius: 20px; border-bottom-right-radius: 18px">
            <div class="row">
                <div class="col header2">
                    <strong>AUTOMOTORES</strong>
                </div>
                <div class="col" style=" padding-top: 20px;  margin-left: 5%">
                    <img src="{{ public_path('img/logo.jpg') }}" alt="Logo" height="40px">
                </div>
            </div>
        </div>

        <div style="width: 90%;margin: auto;background: #ebebeb; border-radius: 20px;height: 30%;">

            <div class="row" style="height: 35%;">
                <h4 style="padding-left: 20px; color: #006369">CONDUCCIÓN A LA DEFENSIVA (12 HORAS)</h4>
                <p style="font-size: 12px;  padding: 10px 20px 0px 20px;  margin-bottom: 0px">
                    Al término del curso, el participante conocerá las leyes y normas del tránsito, así como las
                    condiciones
                    físicas y psíquicas que debe de tener para conducir un vehículo y evitar incidentes y accidentes.

                </p>

                <div class="col" style="width: 50%;">


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
                <div class="row" style="height: 150px;margin-left: 50%;margin-top: 14%;width: 50%!important;font-size: 10px; font-weight: bolder;background: #cccccc">
                    {{-- <div class="col" style="background: #cccccc;width: 45%"> --}}
                    <div class="col" style="width: 20%; margin: 10px;border-right: 2px solid white;height: 50px;">


                        <img style="margin: 5px" src="{{ public_path('img/circle-play.svg') }}" width="15px" alt="Logo"
                            height="15px"><br>
                        <span>23 de oct.</span>


                    </div>
                    <div class="col" style="width: 20%;  margin: 10px;border-right: 2px solid white;height: 50px;">


                        <img src="{{ public_path('img/calendar.svg') }}" width="15px" alt="Logo" height="15px"><br>
                        <span>Lu-Mi-Vi</span>
                    </div>
                    <div class="col" style="width: 20%;  margin: 10px;border-right: 2px solid white;height: 50px;">


                        <img src="{{ public_path('img/clock.svg') }}" width="15px" alt="Logo" height="15px"><br>
                        <span>19:00-21:15</span>
                    </div>

                    <div class="col" style="width: 20%;  margin: 10px;border-right: 2px solid white;height: 50px;">


                        <img src="{{ public_path('img/user.svg') }}" width="15px" alt="Logo" height="15px"><br>
                        <span>José Ulloa</span>
                    </div>




                </div>

            </div>




        </div>



        <div class="page-break"></div>

        <div style="width: 100%;height: 100%;">

            <div
                style="width: 90%;margin: auto;height : 12%; background:#6f5500;border-bottom-left-radius: 20px; border-bottom-right-radius: 18px">
                <div class="row">
                    <div class="col header">
                        <strong>PROGRAMAS DE GESTIÓN - CTTC <br>
                            CENTRO TECNOLÓGICO TEXTIL Y CONFECCIONES
                        </strong>
                    </div>
                    <div class="col" style=" padding-top: 20px;  margin-left: 5%">
                        <img src="{{ public_path('img/logo.jpg') }}" alt="Logo" height="40px">

                    </div>

                </div>
                <div class="row" style="font-size: 10px; color: white;width: 73%;margin-left: 6%;">
                    Los programas de gestión están compuestos por módulos independientes y autónomos que se pueden
                    integrar
                    según las necesidades específicas de la organización
                </div>
            </div>

            <div
                style="width: 85%;margin: auto;background: #e9d5c8; border-radius: 20px;margin-top:4%; margin-bottom: 0px; padding: 20px 20px 0px 20px;">
                <div class="row">
                    <h4 style="padding-left: 20px; padding-bottom: 0px; color: #6f5500;margin-bottom: 0px;">

                        PROGRAMA DE GESTIÓN PARA FORMACIÓN DE AUDITORES DE CALIDAD TEXTIL Y CONFECCIÓN
                    </h4>
                    <p style="font-size: 10px;  padding: 0px 0px 0px 20px; margin-bottom: 0px; margin-top: 0px;">

                        Objetivo: Capacitar a los participantes en los conocimientos, habilidades y técnicas necesarias
                        para
                        realizar auditorías de calidad en todas las etapas del
                        proceso de confección, desde la materia prima hasta el producto final, garantizando el
                        cumplimiento
                        de
                        los estándares de calidad establecidos por el
                        cliente y las normativas internacionales. Además, proporcionar las herramientas para interpretar
                        y
                        aplicar las normativas de calidad y etiquetado en hilos,
                        tejidos y prendas para exportación, contribuyendo así a la mejora continua y la competitividad
                        de la
                        organización.
                    </p>

                    <table style="font-size: 10px;padding: 15px 0px 50px 20px;">
                        <thead style="color: #6f5500">
                            <tr>
                                <th style="text-align: left;width: 230px">MÓDULO / CURSO</th>
                                <th style="width: 60px">INICIO</th>
                                <th style="width: 90px">FRECUENCIA</th>
                                <th>DURACIÓN (horas)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Interpretacion de tablas AQL en confecciones</td>
                                <td style="text-align: center">8 oct.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Auditoria final según manual de calidad del cliente</td>
                                <td style="text-align: center">5 nov.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Normativa de calidad y etiquetado en hilos, tejidos
                                    y prendas para exportación</td>
                                <td style="text-align: center">3 dic.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Auditoria de calidad textil en hilandería y tejeduría</td>
                                <td style="text-align: center">2 ene.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                            <tr>
                                <td>Auditoria de calidad textil en tintorería y acabados</td>
                                <td style="text-align: center">9 oct.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                            <tr>
                                <td>Auditoria de calidad en corte y manufactura de
                                    prendas de vestir</td>
                                <td style="text-align: center">27 feb.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                            <tr>
                                <td>Auditoria de calidad en acabados de prendas de
                                    vestir</td>
                                <td style="text-align: center">25 mar.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    20:00 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
            <div
                style="width: 85%;margin: auto;background: #e9d5c8; border-radius: 20px;margin-top:5%; margin-bottom: 0px;padding: 20px 20px 0px 20px; ">
                <div class="row">
                    <h4 style="padding-left: 20px; padding-bottom: 0px; color: #6f5500;margin-bottom: 0px;">
                        PROGRAMA DE GESTIÓN EN DISEÑO Y TECNOLOGÍA TEXTIL
                    </h4>
                    <p style="font-size: 10px;  padding: 0px 20px 0px 20px; margin-bottom: 0px; margin-top: 0px;">
                        Objetivo: Capacitar a los participantes en los conocimientos teóricos fundamentales de la
                        gestión,
                        diseño y tecnología textil, desarrollando competencias
                        técnicas especializadas que les permitan identificar, analizar y aplicar los procesos,
                        herramientas
                        y
                        metodologías pertinentes para la producción
                        eficiente, innovadora y de calidad en la industria textil.
                    </p>

                    <table style="font-size: 10px;padding: 42px 20px 65px 20px;">
                        <thead style="color: #6f5500">
                            <tr>
                                <th style="text-align: left;width: 250px">MÓDULO / CURSO</th>
                                <th style="width: 60px">INICIO</th>
                                <th style="width: 90px">FRECUENCIA</th>
                                <th>DURACIÓN (horas)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fundamentos y parametros de calidad en tejido
                                    plano y tejido punto</td>
                                <td style="text-align: center">8 oct.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Guía práctica para el diseño textil en genero punto</td>
                                <td style="text-align: center">5 nov.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Tecnología aplicada en máquinas circulares y
                                    rectilíneas.</td>
                                <td style="text-align: center">3 dic.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Fundamentos de diseño y programación en tejido
                                    jacquard.</td>
                                <td style="text-align: center">2 ene.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                            <tr>
                                <td>Hilados e hilos: principios y aplicaciones</td>
                                <td style="text-align: center">28 ene.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>

                            <tr>
                                <td>Identificación de fibras textiles y sus aplicaciones</td>
                                <td style="text-align: center">20 feb.</td>
                                <td style="text-align: center">Ma-Ju <br>
                                    19:30 - 22:00</td>
                                <td style="text-align: center">12</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        {{-- <div class="bottom-border"></div> --}}
        <!-- Salto de página -->
</body>

</html>
