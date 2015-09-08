$(document).ready(function(){
	$('.selectTipo').change(function(){
		opc = $( ".selectTipo option:selected" ).val();
        if(opc == 1) {
            $('.selectServidor').show(); 
            $('.selectSwitch').hide();
        } else {
            $('.selectSwitch').show();
            $('.selectServidor').hide(); 
        } 
    }); 
	opc = $( ".selectTipo option:selected" ).val();
    if(opc == 1) {
        $('.selectServidor').show(); 
        $('.selectSwitch').hide();
    } else {
        $('.selectSwitch').show();
        $('.selectServidor').hide(); 
    } 

    $('.fecha').datepicker(); 
});
