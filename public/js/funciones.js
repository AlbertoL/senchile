$(document).ready(function() {
	var count1 = 0;
	var count2 = 0;
	var count3 = 0;
	var count4 = 0;
	$('#btn-down-one').click(function() {
		count1++
		if (count1 % 2 == 1) {
			$("#icon-down-one").removeClass('glyphicon-chevron-down');
			$("#icon-down-one").addClass('glyphicon-chevron-up');
		}
		else{
			$("#icon-down-one").removeClass('glyphicon-chevron-up ');
			$("#icon-down-one").addClass('glyphicon-chevron-down');
		}
	});
	$('#btn-down-two').click(function() {
		count2++
		if (count2 % 2 == 1) {
			$("#icon-down-two").removeClass('glyphicon-chevron-down');
			$("#icon-down-two").addClass('glyphicon-chevron-up');
		}
		else{
			$("#icon-down-two").removeClass('glyphicon-chevron-up ');
			$("#icon-down-two").addClass('glyphicon-chevron-down');
		}
	});
	$('#btn-down-three').click(function() {
		count3++
		if (count3 % 2 == 1) {
			$("#icon-down-three").removeClass('glyphicon-chevron-down');
			$("#icon-down-three").addClass('glyphicon-chevron-up');
		}
		else{
			$("#icon-down-three").removeClass('glyphicon-chevron-up ');
			$("#icon-down-three").addClass('glyphicon-chevron-down');
		}
	});
	$('#btn-down-four').click(function() {
		count4++
		if (count4 % 2 == 1) {
			$("#icon-down-four").removeClass('glyphicon-chevron-down');
			$("#icon-down-four").addClass('glyphicon-chevron-up');
		}
		else{
			$("#icon-down-four").removeClass('glyphicon-chevron-up ');
			$("#icon-down-four").addClass('glyphicon-chevron-down');
		}
	});

	$( "#date-inicio" ).datepicker({
    		dateFormat: "dd-mm-yy",
			firstDay: 1,
			monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
			'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
    		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
    		changeMonth: true,
			changeYear: true,
			onClose: function( selectedDate ) {
				$( "#date-termino" ).datepicker( "option", "minDate", selectedDate );
      			}
    });
    $( "#date-termino" ).datepicker({
    	dateFormat: "dd-mm-yy",
		firstDay: 1,
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		dayNames: [ "Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" ],
		dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
		changeMonth: true,
		changeYear: true,
      	onClose: function( selectedDate ) {
        	$( "#date-inicio" ).datepicker( "option", "maxDate", selectedDate );
      	}
    });

    function eliminar(url) {
    	if (confirm('¿Deseas eliminar el registro?')) {
    		window.location=url;
    	}
    }

});