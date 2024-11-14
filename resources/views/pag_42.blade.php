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
            margin-top: 8%;
            /* padding-top: 0%; */
            padding: 8px 20px;
            border-radius: 10px;
            color: white;
            font-weight: bolder;
        }

        .header1 {
            margin-top: 13%;
            padding: 8px 20px;
            color: white;
            font-weight: bolder;
            margin-left: 8%;
            font-size: 26px;

        }

        .contenedor {
            width: 100%;
            height: 40px;
        }

        .triangulo {
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-left: 20px solid black;
            float: left;
            /* Hace que el triángulo flote a la izquierda */
        }

        .texto {
            float: left;
            /* Hace que el texto flote a la izquierda, junto al triángulo */
            margin-left: 10px;
            /* Espacio entre el triángulo y el texto */
        }
    </style>


    <div style="width: 100%;height: 92%;background: #094268">

        <div
            style="width: 90%;margin: auto;height : 15%; background:#305ea2;border-bottom-left-radius: 20px; border-bottom-right-radius: 18px">
            <div class="row">
                <div class="col header1">
                    <strong>MÓDULOS</strong>
                </div>
            </div>

            <div class="row" style="margin-top: 35%">
                <div class="col" style="width: 100%; color: white; font-weight: bolder;font-size: 16px;padding-left: 40px">
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #01506d;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px;">AUTOMOTORES</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #4b6cb7;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">CENTRO TECNOLÓGICO TEXTIL Y CONFECCIONES - CTTC</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #305399;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">CISCO</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #006c77;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">CONFECCIÓN TEXTIL</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #008c93;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">DESARROLLO PERSONAL SOCIAL</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #01506d;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">ELECTROTECNIA</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #008c93;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">GESTIÓN - ADMINISTRACIÓN</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #00b3c6;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">INDUSTRIA ALIMENTARIAS</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #00d3dd;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">MECÁNICA DE MANTENIMIENTO</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #54e0ef;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">METALMECÁNICA - SOLDADURA</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #54e0ef;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius: 8px">SEGURIDAD Y SALUD EN EL TRABAJO</span>
                      </div>
                      
                      <div class="contenedor">
                        <div class="triangulo" style="border-left-color: #9e691b;margin-top: 6px"></div>
                        <span class="texto" style="border: 1px solid white; padding: 5px 15px; border-radius:8px">PROGRAMAS DE GESTIÓN - CTTC</span>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
    <div class="row" style=" width: 100%; height: 5%;color: white;font-weight: bold;background: #094268">
        <div class="col" style=" width: 8%;text-align: center;margin-left: 40px">
            <img src="{{ public_path('img/circle-play.svg') }}" width="20px" alt="Logo" height="20px"><br>
            <span style=" font-size: 8px">FECHAS DE INICIO</span>

        </div>
        <div class="col" style="margin-left: 5px;width: 6%;text-align: center">
            <img src="{{ public_path('img/calendar.svg') }}" width="20px" alt="Logo" height="20px"><br>
            <span style=" font-size: 8px; margin-top: 2px ;">DÍA DE CLASES</span>

        </div>
        <div class="col" style="margin-left: 5px;width: 8%;text-align: center">
            <img src="{{ public_path('img/clock.svg') }}" width="20px" alt="Logo" height="20px"><br>
            <span style=" font-size: 8px">HORARIOS</span>

        </div>
        <div class="col" style="margin-left: 5px;width: 8%;text-align: center">
            <img src="{{ public_path('img/user.svg') }}" width="20px" alt="Logo" height="20px"><br>
            <span style=" font-size: 8px">DOCENTES</span>
        </div>
        <div class="col" style="margin-top: 5px">
        </div>
        <div class="col" style="width: 55%; text-align: right;font-size: 12px">
            <span>MENU <br> INTERACTIVO</span>

        </div>

        <div class="col">
            <img src="{{ public_path('img/puntero.svg') }}" width="50px" alt="Logo" height="50px"><br>

        </div>

    </div>
    <div class="row" style="background: #062e5a; width: 100%; height: 3%">
    </div>

    <div class="page-break"></div>


    <div style="width: 100%;height: 93%;">
        <div
            style="width: 90%;margin: auto;height : 10%; background:#006369;border-bottom-left-radius: 20px; border-bottom-right-radius: 18px">
            <div class="row">
                <div class="col header2">
                    <strong style="font-size: 18px">AUTOMOTORES</strong>
                </div>
                <div class="col" style=" padding-top: 20px;padding-right: 25px;  margin-left: 5%;float: right;">
                    <img src="{{ public_path('img/logo.jpg') }}" alt="Logo" height="45px">
                </div>
            </div>
        </div>

        <div style="width: 90%;margin: auto;background: #ebebeb; border-radius: 20px;height: 25%; margin-top: 25px;">

            <div class="row" style="height: 85%; ">
                <h4 style="padding-left: 20px;margin-bottom: 0%; color: #006369; ">CONDUCCIÓN A LA DEFENSIVA (12 HORAS)
                </h4>
                <p style="font-size: 11px;  padding: 0px 0px 0px 20px; margin-bottom: 0px; margin-top: 0px;">
                    Al término del curso, el participante conocerá las leyes y normas del tránsito, así como las
                    condiciones
                    físicas y psíquicas que debe de tener para conducir un vehículo y evitar incidentes y accidentes.
                </p>

                <div class="col" style="width: 48%;">
                    <ul style="font-size: 10px; padding-left: 30px">
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
                <div class="row"
                    style="height: 140px;margin-left: 50%;margin-top: 12%;width: 46%!important;font-size: 10px; font-weight: bolder;background: #cccccc">
                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 50px;">

                        <img style="margin: 10px" src="{{ public_path('img/circle-play.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>23 de oct.</span>

                    </div>
                    <div class="col"
                        style="width: 20%; margin-top: 14% ;text-align: center;border-right: 2px solid white;height: 50px;">


                        <img style="margin: 10px" src="{{ public_path('img/calendar.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>Lu-Mi-Vi</span>
                    </div>

                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 50px;">

                        <img style="margin: 10px" src="{{ public_path('img/clock.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>19:00-21:15</span>
                    </div>

                    <div class="col" style="width: 20%; margin: 12% 2% ;text-align: center;height: 50px;">


                        <img style="margin: 10px" src="{{ public_path('img/user.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>José Ulloa</span>
                    </div>

                </div>

            </div>

            <div class="row" style=" color: #006369; font-size: 9px; padding-left: 22px;">
                <strong>PRE-REQUISITO:</strong> Tener licencia de conducir.
            </div>


        </div>


        <div style="width: 90%;margin: auto;background: #ebebeb; border-radius: 20px;height: 23%; margin-top: 40px;">

            <div class="row" style="height: 85%; ">
                <h4 style="padding-left: 20px;margin-bottom: 0%; color: #006369; ">ELECTRICIDAD Y ELECTRÓNICA
                    AUTOMOTRIZ
                    (12 HORAS)</h4>
                <p style="font-size: 11px;  padding: 0px 0px 0px 20px; margin-bottom: 0px; margin-top: 0px;">
                    Al finalizar el curso, los participantes conocerán los principios básicos de la electricidad y
                    electrónica automotriz, la lectura de planos de
                    los circuitos, las señales y sus características, además de la comunicación entre los diferentes
                    sistemas electrónicos del vehículo, así
                    como el mantenimiento que requieren siguiendo las Normas de Seguridad y Salud en el Trabajo.
                </p>

                <div class="col" style="width: 48%;">
                    <ul style="font-size: 10px; padding-left: 30px">
                        <li>Conocer los conceptos fundamentales de Electricidad Automotriz.</li>
                        <li>Conocer y realizar la lectura básica de diagramas eléctricos.</li>
                        <li>Conocer el proceso básico de diagnóstico de un circuito automotriz</li>
                        <li>Conocer los conceptos fundamentales de Electrónica Automotriz.</li>
                        <li>Conocer y realizar lectura básica de diagramas Electrónicos. </li>
                        <li>Conocer los conceptos fundamentales de Señales</li>
                    </ul>

                </div>
                <div class="row"
                    style="height: 140px;margin-left: 50%;margin-top: 8%;width: 46%!important;font-size: 10px; font-weight: bolder;background: #cccccc">
                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 50px;">
                        <img style="margin: 10px" src="{{ public_path('img/circle-play.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>15 de oct</span>

                    </div>
                    <div class="col"
                        style="width: 20%; margin-top: 14% ;text-align: center;border-right: 2px solid white;height: 50px;">


                        <img style="margin: 10px" src="{{ public_path('img/calendar.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>Ma-Ju</span>
                    </div>

                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 50px;">

                        <img style="margin: 10px" src="{{ public_path('img/clock.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>21:00-22:30</span>
                    </div>

                    <div class="col" style="width: 20%; margin: 12% 2% ;text-align: center;height: 50px;">


                        <img style="margin: 10px" src="{{ public_path('img/user.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>Catherine Landeo</span>
                    </div>

                </div>

            </div>

        </div>


        <div style="width: 90%;margin: auto;background: #ebebeb; border-radius: 20px;height: 22%; margin-top: 45px;">

            <div class="row" style="height: 80%;">
                <h4 style="padding-left: 20px;margin-bottom: 0%; color: #006369; ">ESTRATEGIAS DE DIAGNÓSTICO EN LOS
                    SISTEMAS MECÁNICOS Y ELECTRÓNICOS DEL
                    VEHÍCULO ( 14 HORAS) </h4>
                <p style="font-size: 11px;  padding: 0px 0px 0px 20px; margin-bottom: 0px; margin-top: 0px;">
                    Al término del curso los participantes estarán en condiciones de aplicar estrategias de diagnóstico
                    para identificar la causa raíz de las
                    fallas en el sistema mecánico y electrónico, y realizar una reparación profesional. Aplicando
                    técnicas y procedimientos recomendados por
                    el fabricante

                </p>

                <div class="col" style="width: 40%;">
                    <ul style="font-size: 10px; padding-left: 30px">
                        <li>Localización de averías</li>
                        <li>Estrategias de diagnóstico comprimido.</li>
                    </ul>

                </div>
                <div class="row"
                    style="height: 160px;margin-left: 42%;margin-top: 2%;width: 54%;font-size: 10px; font-weight: bolder;background: #cccccc">
                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 65px;">
                        <img style="margin: 10px" src="{{ public_path('img/circle-play.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>21 de oct.</span><br>
                        <span>22 de oct.</span><br>
                    </div>
                    <div class="col"
                        style="width: 20%; margin-top: 14% ;text-align: center;border-right: 2px solid white;height: 65px;">
                        <img style="margin: 10px" src="{{ public_path('img/calendar.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>Lu-Mi-Vi</span><br>
                        <span>Ma-Ju</span>
                    </div>

                    <div class="col"
                        style="width: 20%; margin: 12% 2% ; padding:5px;text-align: center;border-right: 2px solid white;height: 65px;">

                        <img style="margin: 10px" src="{{ public_path('img/clock.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>19:00-21:38</span><br>
                        <span>19:00-21:38</span>
                    </div>

                    <div class="col" style="width: 20%; margin: 12% 2% ;text-align: center;height: 65px;">
                        <img style="margin: 10px" src="{{ public_path('img/user.svg') }}" width="20px"
                            alt="Logo" height="20px"><br>
                        <span>José Aquije</span><br>
                        <span>José Aquije</span>
                    </div>

                </div>

            </div>
            <div class="row" style=" color: #006369;font-size: 9px; padding-left: 22px;width: 40%;">
                <strong>PRE-REQUISITO:</strong> Tener conocimientos de mecánica y electricidad
                automotriz.
            </div>
        </div>


    </div>

    <div class="row" style="width: 90%; height: 4%;font-size: 8px; font-weight: bolder; margin: auto ">
        <div class="col">
            <img src="{{ public_path('img/circle-play.svg') }}" width="20px" alt="Logo" height="20px">
        </div>
        <div class="col" style="margin-top: 5px">
            <span style="margin-top:15px; margin-left: 5px">FECHAS DE INICIO</span>
        </div>
        <div class="col" style="margin-left: 5px">
            <img src="{{ public_path('img/calendar.svg') }}" width="20px" alt="Logo" height="20px">
        </div>
        <div class="col" style="margin-top: 5px">
            <span style="margin-top:15px; margin-left: 5px">DÍA DE CLASES</span>
        </div>
        <div class="col" style="margin-left: 5px">
            <img src="{{ public_path('img/clock.svg') }}" width="20px" alt="Logo" height="20px">
        </div>
        <div class="col" style="margin-top: 5px">
            <span style="margin-top:15px; margin-left: 5px">HORARIOS</span>
        </div>
        <div class="col" style="margin-left: 5px">
            <img src="{{ public_path('img/user.svg') }}" width="20px" alt="Logo" height="20px">
        </div>
        <div class="col" style="margin-top: 5px">
            <span style="margin-top:15px; margin-left: 5px">DOCENTES</span>
        </div>
        <div class="col" style="width: 52%; text-align: right;font-size: 12px">
            5
        </div>
    </div>

    <div class="row" style="background: #3953a5; width: 100%; height: 3%">
    </div>


    <div class="page-break"></div>

    <div style="width: 100%;height: 94%;">

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

    <div class="row" style="width: 90%; height: 3%;margin: auto;font-size: 12px ">
        <span>42</span>
    </div>

    <div class="row" style="background: #7c98c3; width: 100%; height: 3%">
    </div>

    {{-- <div class="bottom-border"></div> --}}
    <!-- Salto de página -->
</body>

</html>
