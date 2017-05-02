jQuery(document).ready(function($) {


	$('#fecha_propuesta').datepicker({dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,yearRange: "-100:+0",minDate:'2017-08-05',maxDate:'2017-08-13'});
	
	$('select[data-readonly]').on('change', function(e){
		var input = $(this).data('readonly');
		var readonly_value = $(this).data('readonly-value');

		if(readonly_value != $(this).val())
		{
			$('input[name="'+input+'"]').attr('readonly', 'readonly');
		} else {
			$('input[name="'+input+'"]').removeAttr('readonly');	
		}
	});


/*
    $.ajax({url:'listar_pais',type:  'post',success:  function (response) {$('#id_pais').html(response); }});
    $.ajax({url:'listar_ciudad',type:  'post',success:  function (response) {$('#id_ciudad').html(response); }});
    $.ajax({url:'listar_localidad',type:  'post',success:  function (response) {$('#id_localidad').html(response); }});
    $.ajax({url:'listar_departamento',type:  'post',success:  function (response) {$('#id_departamento').html(response); }});
*/
	

});