@extends('master')                           

@section('content') 




<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<h2>Formulario para Proponentes</h2>
<br>
<p><font size="3">Por favor diligenciar el siguiente formato y anexarlo a la propuesta. Le agradecemos tener en cuenta la siguiente información: </font></p>
<ul class="ul_inicio">
    <font size="3">
        <li>El Festival se ralizará en el <strong>Complejo Metropolitano Simón Bolívar</strong> el cual consta de los siguientes escenarios: Parque Simón Bolívar, Parque Recreodeportivo El Salitre(PRD), Unidad Deportiva El Salitre(UDS), Parque el Lago / Novios, Complejo Acuático y Palacio de los Deportes. </li>
        <li>El contenido de la propuesta se puede presentar en formato Word, PDF o Power Point.</li>
    </font>
</ul>
<br>
<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
    
    <section id="page1">
    <div class="panel panel-default">
    <!--<div class="panel-heading">Información Personal</div>-->
    <div class="panel-body">
    <div class="row">
        <div class="col-md-6">
            <label for="formGroupExampleInput">Tipo de Organización que presenta la propuesta</label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">Cual?
            
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-6">
            <select name="tipo_organizacion" id="tipo_organizacion" class="form-control" data-readonly="otra_organizacion" data-readonly-value="6">
                <option value="1">Club</option>
                <option value="2">Fundación</option>
                <option value="3">Liga</option>
                <option value="4">Entidad sin ánimo de lucro</option>
                <option value="5">Persona natural</option>
                <option value="6">Otro</option>
            </select>
        </div>
        <div class="col-md-6"><input required type="text" class="form-control" id="otra_organizacion" name="otra_organizacion" readonly="readonly"></div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6">
            <label for="formGroupExampleInput">Nombre del organizador</label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">Nombre de la propuesta  
            
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-6"><input required type="text" class="form-control" id="nombre_organizacion" name="nombre_organizacion" ></div>
       <div class="col-md-6"><input required type="text" class="form-control" id="nombre_propuesta" name="nombre_propuesta" ></div>
        
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput2">
            Describir brevemente en que consiste la propuesta 
            </label>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput2">
            Especificar a que público se encuantra dirigido el evento 
            </label>
        </div>
        <div class="col-md-6"><textarea cols=82 rows=5 name="propuesta" id="propuesta"></textarea> </div>
        <div class="col-md-6">
            <select name="publico_dirigido" id="publico_dirigido" class="form-control" >
                <option value="1">Niños y Niñas</option>
                <option value="2">Personas Mayores</option>
                <option value="3">Pensionados y Madres comunitarias</option>
                <option value="4">Comunidades organizadas</option>
                <option value="5">Adultos</option>
            </select>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput2" >
            Antecedentes del evento: Explicar brevemente si el evento ya se ha realizado anteriormente y cuál ha sido la trayectoria del mismo (Asistencia, lugar y fecha como datos mínimos)
            </label>
        </div>
        <div class="col-md-6"> <label  for="formGroupExampleInput2">Fechas propuestas para realización del evento en el Festival  de Verano entre el 5 y el 13 de agosto (opcional)</label>
        </div>
        <div class="row">
        	<div class="col-md-12">
		        <div class="col-md-6"><textarea cols=82 rows=5 name="antecedentes" id="antecedentes"></textarea></div>
		        <div class="col-md-6"><input required type="text" class="form-control" id="fecha_propuesta" name="fecha_propuesta" ></div>
	       	</div>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput">Definir el tipo de evento</label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">Cual?
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-6">
            <select name="tipo_evento" id="tipo_evento" class="form-control" data-readonly="evento" data-readonly-value="3" >
                <option value="1">Deportivo</option>
                <option value="2">Recreativo</option>
                <option value="3">Otro</option>
            </select>
        </div>
        <div class="col-md-6"><input required type="text" class="form-control" id="evento" name="evento" readonly="readonly"></div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-4"><label  for="formGroupExampleInput">Tiempo de montaje del evento</label>
        </div>
        <div class="col-md-4"><label  for="formGroupExampleInput">Duración del evento</label>
        </div>
        <div class="col-md-4">
            <label  for="formGroupExampleInput2">Tiempo de desmontaje del evento
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-4">
            <select name="tiempo_montaje" id="tiempo_montaje" class="form-control" >
                <option value="1 - 2 días">1 - 2 días</option>
                <option value="2 - 4 días">2 - 4 días</option>
                <option value="4 o más días">4 o más días</option>
            </select>
        </div>
        <div class="col-md-4">
            <select name="duracion" id="duracion" class="form-control" >
                <option value="1 - 2 días">1 - 2 días</option>
                <option value="2 - 4 días">2 - 4 días</option>
                <option value="4 o más días">4 o más días</option>
            </select>
        </div>
        <div class="col-md-4">
            <select name="tiempo_desmontaje" id="tiempo_desmontaje" class="form-control" >
                <option value="1 - 2 días">1 - 2 días</option>
                <option value="2 - 4 días">2 - 4 días</option>
                <option value="4 o más días">4 o más días</option>
            </select>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput">Lugar(es) propuesto (s) para realizar el evento en el Complejo Metropolitano Simón Bolívar</label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-6">
            <select name="lugar_propuesto" id="lugar_propuesto" class="form-control" >
                <option value="1">Parque Central Simón Bolívar </option>
                <option value="2">PRD</option>
                <option value="3">UDS</option>
                <option value="4">Parque El Lago / Novios</option>
                <option value="5">Complejo Acuático</option>
                <option value="6">Palacio de los Deportes</option>
            </select>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-12">
          Impacto esperado del evento: ¿A cuántas personas espera impactar con su evento entre participantes y espectadores?
          <strong>Participantes: </strong>Aquellos que hacen parte de la actividad como por ejemplo deportistas.
          <strong>Espectadores: </strong> Público que asiste para ver el evento <br>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-4"><label  for="formGroupExampleInput">Número de participantes</label>
        </div>
        <div class="col-md-4"><label  for="formGroupExampleInput">Número de espectadores</label>
        </div>
        <div class="col-md-4">
            <label  for="formGroupExampleInput2">Total
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        <div class="col-md-4">
            <input required type="text" class="form-control" id="numero_participantes" name="numero_participantes" >
        </div>
        <div class="col-md-4">
            <input required type="text" class="form-control" id="numero_espectadores" name="numero_espectadores" >
        </div>
        <div class="col-md-4">
           <input required type="text" class="form-control" id="total" name="total" >
        </div>

        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput">Especificar si tiene patrocinadores o aliados para el desarrollo de la actividad y quienes son:
        </label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">Cuales?
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        
        <div class="col-md-6"><input required type="text" class="form-control" id="nombre_patrocinador" name="nombre_patrocinador"></div>
        <div class="col-md-6">
            <select name="patrocinador" id="patrocinador" class="form-control" data-readonly="nombre_patrocinador" data-readonly-value="1" >
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
        <div class="col-md-12">
            <br>
        </div>
        <div class="col-md-6"><label  for="formGroupExampleInput">Indicar si el evento se encuentra financiado (Recursos propios, patrocinadores, aliados, otros)
        </label>
        </div>
        <div class="col-md-6">
            <label  for="formGroupExampleInput2">¿En qué pocentaje se encuentra financiado?  %
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        
        <div class="col-md-6"><input required type="text" class="form-control" id="porcentaje" name="porcentaje"></div>
        <div class="col-md-6">
            <select name="financiado" id="financiado" class="form-control" data-readonly="porcentaje" data-readonly-value="1" >
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        </div>
    </div>
    <br>
     <center><h3>Información adicional para tener en  cuenta</h3></center>
     <p><font size="3"><strong><center>Es responsabilidad de cada proponente tener muy claros todos los descuentos por impuestos que aplican para incluirlos en el valor del final de la propuesta.</center></strong></font></p>
    
    </fieldset>
    <div class="freebirdFormviewerViewFormContent ">
    <div class="freebirdFormviewerViewHeaderHeader">
        <div class="freebirdFormviewerViewHeaderTitleRow">
            <div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div>
        </div>
        <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div>
    </div>
    <div class="freebirdFormviewerViewItemList" role="list">
        <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading">
            <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner">
                <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div>
            </div>
        </div>
        <div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div>
        <div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881">
            <div class="freebirdFormviewerViewItemsItemItemheader">
                <div class="freebirdFormviewerViewItemsItemItemTitleContainer">
                    <div  dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*</span></div>
                    <div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos en el presente formulario</div>
                </div>
            </div>
            <div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class="">
                <div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto">
                    <div class="freebirdFormviewerViewItemsCheckboxChoice">
                        <label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer">
                            <div class="exportLabelWrapper">
                                <input type="checkbox" required style="float: left;
                                    margin: 0px;" name="acepto" id="acepto">
                                <div class="docssharedWizToggleLabeledContent">
                                    <div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">Acepto</span></div>
                                </div>
                            </div>
                        </label>
                    </div>
                    <input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden">
                </div>
            </div>
            <div id="i.req.131124881" class="screenreaderOnly"></div>
            <div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div>
        </div>
    </div>
    <div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681">
        <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
            <div class="freebirdFormviewerViewNavigationButtons">
                <input class="enviar" type="submit" value="Enviar"> 
            </div>
            <div class="freebirdFormviewerViewNavigationProgress">
                <div class="freebirdFormviewerViewNavigationProgressIndicator" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" aria-labelledby="lpd4pf" role="progressbar">
                    <div class="freebirdFormviewerViewNavigationProgressIndicatorFill done" style="width:100%"></div>
                </div>
                <div id="lpd4pf" class="quantumWizButtonPaperbuttonContent" aria-hidden="true">Página 1 de 1</div>
            </div>
        </div>
        <div class="freebirdFormviewerViewNavigationPasswordWarning">.</div>
    </div>
</form>
<script type="text/javascript" src="public/Js/form.js"></script>
@stop

