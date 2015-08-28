// metodo para deshabilitar inputs
function disable_inputs(){
	$('input ,select, textarea').attr('disabled',true);
}

// metodo para transformar tablas a data-tables
$(document).ready(function(){
	$('.data-table').DataTable();
});

// metodo global para borrar registros
$(document).ready(function(){
	$('.borrar-registro').click(function(){
		var currentForm = $(this).closest('form')
		bootbox.confirm("¿Estas seguro?", function(result){
			if(result){
				currentForm.submit();
			}
		});
	});
});