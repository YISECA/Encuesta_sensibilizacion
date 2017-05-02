@extends('master')                              
@section('content')         
<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">
<section id="page1">
    <div class="panel panel-default">
        <div class="panel-heading">Inicio</div>
        <div class="panel-body">
            <div class="freebirdFormviewerViewFormContent ">
                <div class="freebirdFormviewerViewHeaderHeader">
                    <div class="freebirdFormviewerViewHeaderTitleRow">
                        <!--<div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1">CAMINATA CERRO DEL ELEFANTE </div>-->
                    </div>
                    <div class="stage">
                        <div id="SLDR-ONE" class="sldr">
                            <ul class="wrp animate">
                                <li class="elmnt-one">
                                    <div class="skew">
                                        <div class="wrap"><img src="public/Img/cerrito.jpg" width="1000" height="563">
                                        </div>
                                    </div>
                                </li>
                                <li class="elmnt-two">
                                    <div class="skew">
                                        <div class="wrap"><img src="public/Img/cerrito.jpg" width="1000" height="563">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <ul class="selectors">
                            <li class="focalPoint"><a href="">•</a>
                            </li>
                            <li><a href="">•</a>
                            </li>
                            <li><a href="">•</a>
                            </li>
                            <li><a href="">•</a>
                            </li>
                        </ul>
                    </div>
                    <script src="public/Js/jquery.sldr.js"></script>
                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">
                        <h2>Ubicación</h2>
                        <p><font size="4">El sendero se encuentra ubicado en el cerro de la ¨TETA¨ de la localidad de san Cristóbal. En el recorrido se puede observar piedras con líquenes rojos conocidas como piedras coloradas, además  podemos contemplar una mirada del sur oriente de la ciudad. </font></p>
                        <h2>Descripción del recorrido</h2>
                        <p><font size="4">El recorrido da inicio en la entrada del parqueadero de los buses del SIP ubicado frente al barrio pinares, donde se realizara un calentamiento de aproximadamente 20 minutos, el guía de caminatas del IDRD dará las recomendaciones asi como las prohibiciones y restricciones propias del recorrido y necesarias para su ejecucion y se dará inicio a la caminata.</font></p>
                        <h3>Durante el recorrido se reconocerán los siguientes aspectos:</h3>
                        <ul class="ul_inicio">
                            <font size="4"><li>Zona de páramo</li>
                            <li>Miradores</li>
                            <li>Ecosistema de niebla y sub- páramo</li>
                            <li>Piedras coloradas</li></font>
                        
                        </ul>
                        <font size="4"><table width="769">
                            <col width="281">
                                <col width="282">
                                    <tr valign="top">
                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Punto de encuentro</p>
                                        </td>
                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Parqueadero del SIP ubicado en la entrada del barrio pinares.</p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Fecha</p>
                                        </td>
                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>30 de Octubre</p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Hora</p>
                                        </td>
                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>8:00 a.m</p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Cupo Máximo</p>
                                        </td>
                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>40 Personsa</p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Rango de Edad</p>
                                        </td>
                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #5b9bd5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>13 - 60 años</p>
                                        </td>
                                    </tr>

                                    <tr valign="top">
                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Altitud</p>
                                        </td>
                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>3.000 m.s</td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Temperatura</p>
                                        </td>
                                        <td width="282" bgcolor="#ffffff" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>14°</p>
                                        </td>
                                    </tr>
                                    <tr valign="top">
                                        <td width="281" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Nivel</p>
                                        </td>
                                        <td width="282" bgcolor="#deeaf6" style="border: 1px solid #9cc2e5; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.16cm; padding-right: 0.19cm">
                                            <p>Medio</p>
                                        </td>
                                    </tr>
                        </table></font>
                        <h2>Recomendaciones</h2>
                        <ul class="ul_inicio">
                            <font size="4"><li>Llevar ropa abrigadora</li>
                            <li>Hidratación</li>
                            <li>Calzado cómodo</li>
                            <li>Llevar carné de la eps</li>
                            <li>Refrigerio.</li>
                            <li>Medicamentos personales </li>
                            <li>No llevar mascotas </li>
                            <li>Caminata apta para mayores de 12 años </li>
                            <li>Abstenerse de asistir si no se encuentra inscrito</li></font>
                        </ul> <a class="btn btn-info" href="registro">Registrarse</a> </div>
                </div>
            </div>
        </div>
</section>
@stop