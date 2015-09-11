$(document).ready(function(){

	$('.selectTipo').change(function(){
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

    var loc = window.location;
    var pathName = window.location.pathname.substring(0, loc.pathname.lastIndexOf('/') - 10);
    $(".serverFisico").change(function() {
        $.get(pathName + 'ubicacion/' + $(this).val(), function(data) {
           $('.selectLoca').val(data);
           $('.selectLoca').change();
        }); 
    });

    $(".clone .label_ip").text("IP Secundaria");
    $("tr.clone:first-child .label_ip").text("IP Primaria");

    $(".check_ip").prop( "checked", true );
  
});
