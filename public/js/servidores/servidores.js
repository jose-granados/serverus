$(document).ready(function(){
	$('.selectTipo').change(function(){
		opc = $( ".selectTipo option:selected" ).val();
        if(opc == 2) {
            $('.divOculto').show(); 
        } else {
            $('.divOculto').hide(); 
        } 
    }); 
	opc = $( ".selectTipo option:selected" ).val();
    if(opc == 2) {
        $('.divOculto').show(); 
    } else {
        $('.divOculto').hide(); 
    }

    $(".divVns").hide(); 
    $(".sino").click(function() {  
        if($(".sino").is(':checked')) {  
            $(".divVns").show();  
        } else {  
        	$(".divVns input").val("");
            $(".divVns").hide();  
        }  
    });  
  
});
