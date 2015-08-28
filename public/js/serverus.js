// metodo para deshabilitar inputs
function disable_inputs(){
	$('input ,select, textarea').attr('disabled',true);
}

$(document).ready(function(){
	// metodo para transformar tablas a data-tables
	$('.data-table').DataTable();

	// metodo global para borrar registros
	$('.borrar-registro').click(function(){
		var currentForm = $(this).closest('form')
		bootbox.confirm("¿Estas seguro?", function(result){
			if(result){
				currentForm.submit();
			}

		});
	});
});