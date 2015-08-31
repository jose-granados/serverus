$(document).ready(function(){

	// metodo para transformar tablas a data-tables
	$('.data-table').DataTable();

	// metodo para mostrar tooltips de ver editar y eliminar
	$('.glyphicon-eye-open').attr('title','ver').tooltip();
	$('.glyphicon-edit').attr('title','Editar').tooltip();
	$('.glyphicon-trash').attr('title','Eliminar').tooltip();

	// metodo global para borrar registros
	$('.borrar-registro').on( "click", function() {
		var currentForm = $(this).closest('form')
		bootbox.confirm({
		    message: '¿Estas seguro?',
		    buttons: {
		        'cancel': {
		            label: 'Cancelar',
		            className: 'btn btn-lg btn-default fill btn-move'
		        },
		        'confirm': {
		            label: 'Aceptar',
		            className: 'btn btn-lg btn-default fill'
		        }
		    },
		    callback: function(result) {
		        if (result) {
		            currentForm.submit();
		        }
		    }
		});
	});
});

// metodo para deshabilitar inputs
function disable_inputs(){
	$('input ,select, textarea').attr('disabled',true);
}