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

    sino = $(".sino").val();
    if(sino == 1){$(".sino").prop('checked', true);}
    sinove = $(".sinoverificar").val();
    if(sinove == 1){$(".sinoverificar").prop('checked', true);}
    $(".sino").click(function() {  
        if($(".sino").is(':checked')) {  
            $(".divVns").show();  
        } else {  
        	$(".divVns input").val("");
            $(".divVns").hide();  
        }  
    }); 
    if($(".sino").is(':checked')) {  
        $(".divVns").show();  
    } else {  
      	$(".divVns input").val("");
        $(".divVns").hide();  
    }   
});
