$(document).ready(function(){

	$('.selectTipo').change(function(){
         $('.selectLoca').change();
        $('.selectLoca').removeAttr("selected");
		opc = $( ".selectTipo option:selected" ).val();
        if(opc == 2) {
            $(".serverFisico").change();
            $('.divOculto').show(); 
            $(".selectLoca").attr("disabled", true); 
        } else {
            $('.divOculto').hide(); 
            $(".selectLoca").attr("disabled", false); 
        } 
    }); 
	opc = $( ".selectTipo option:selected" ).val();
    if(opc == 2) {
        $('.divOculto').show(); 
        $(".selectLoca").attr("disabled", true); 
    } else {
        $('.divOculto').hide();
        $(".selectLoca").attr("disabled", false);  
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

    $(".serverFisico").change(function() {
        $.ajax({
    		url: document.location.protocol + '//' + document.location.host + '/' + window.location.pathname.split('/')[1] + '/' +'ubicacion',
    	    type:"post",
    	    async: true,
    	    data:{'id':$(this).val()},
    	    success: function(resp){
    	    	 $('.selectLoca').val(resp);
    	    	 $('.selectLoca').change();
    	    	
    		},error: function(e){
    			
    		}	
    	});
    });

    $(".clone .label_ip").text("IP Secundaria");
    $("tr.clone:first-child .label_ip").text("IP Primaria");

    $(".check_ip").prop( "checked", true );
  
});
