@extends('master')                           

@section('content') 




<link rel="stylesheet" type="text/css" href="public/Css/form.css">
<br>
<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">
    
    <section id="page1">
    <div class="panel panel-default">
    <!--<div class="panel-heading">Información Personal</div>-->
    <div class="panel-body">
    <br>
    <div class="row">
        <div class="col-md-6" align="center">
            <label for="formGroupExampleInput">¿Tiene familiares con algún tipo de  discapacidad?</label>
        </div>
          <div class="col-xs-6 col-sm-5">
            <select name="discapacidad" id="discapacidad" class="form-control" data-readonly="tipo_discapacidad" data-readonly-value="1">
                <option value="">Seleccione</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        <br></div>

        <div class="col-md-6" align="center">
            <label  for="formGroupExampleInput2">¿Qué tipo de discapacidad?
            
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>

         <div class="col-xs-6 col-sm-5"><input required type="text" class="form-control" id="tipo_discapacidad" name="tipo_discapacidad" readonly="readonly"> <br></div>
      

      <!-- 2 parte-->
        <div class="col-md-6" align="center">
            <label for="formGroupExampleInput">¿Su familiar hace parte de algún grupo social, deportivo o de formación académica?</label>
        </div>
          <div class="col-xs-6 col-sm-5">
            <select name="grupo" id="grupo" class="form-control" data-readonly="tipo_grupo" data-readonly-value="1">
                <option value="">Seleccione</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        <br></div>

        <div class="col-md-6" align="center">
            <label  for="formGroupExampleInput2">Por favor indique a que grupo pertenece 
            
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        
         <div class="col-xs-6 col-sm-5"><input required type="text" class="form-control" id="tipo_grupo" name="tipo_grupo" readonly="readonly"><br></div>

<!-- 3 parte-->

 <div class="col-md-6" align="center">
            <label for="formGroupExampleInput">¿En su espacio laboral ha presenciado  exclusión a personas en condición de discapacidad?</label>
        </div>
          <div class="col-xs-6 col-sm-5">
            <select name="lugar" id="lugar" class="form-control" data-readonly="tipo_lugar" data-readonly-value="1">
                <option value="">Seleccione</option>
                <option value="1">Si</option>
                <option value="2">No</option>
            </select>
        <br></div>

        <div class="col-md-6" align="center">
            <label  for="formGroupExampleInput2">¿En qué lugar? (opcional)
            
            </label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        
         <div class="col-xs-6 col-sm-5"><input required type="text" class="form-control" id="tipo_lugar" name="tipo_lugar" readonly="readonly"><br></div>


<!-- 4 parte-->

<div class="col-md-6" align="center">
            <label for="formGroupExampleInput">Nombre</label>
        </div>
          <div class="col-xs-6 col-sm-5"><input required type="text" class="form-control" id="nombre" name="nombre" >
        <br></div>

        <div class="col-md-6" align="center">
            <label  for="formGroupExampleInput2">Área</label>
            <label class="freebirdFormviewerViewItemsPagebreakDescriptionText" style="font-size:11px"></label>
        </div>
        
         <div class="col-xs-6 col-sm-5"><input required type="text" class="form-control" id="area" name="area"></div>
    </div>
    
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

