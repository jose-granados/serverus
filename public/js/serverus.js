$(document).ready(function(){
    // ocultar las alertas despues de unos segundos
    setTimeout(function() {
        $('.alert').fadeOut(1500);
    }, 3000); // <-- time in milliseconds

    // metodo para transformar tablas a data-tables
    $('.data-table').DataTable({
        "language": {
            "url": "public/js/dataTables.Spanish.lang"
        }
    });

    // metodo para mostrar tooltips de ver editar y eliminar
    $('.glyphicon-eye-open').attr('title','Ver').tooltip();
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
                    className: 'btn btn-lg btn-default fill-red btn-move'
                },
                'confirm': {
                    label: 'Aceptar',
                    className: 'btn btn-lg btn-default fill-green'
                }
            },
            callback: function(result) {
                if (result) {
                    currentForm.submit();
                }
            }
        });
    });

    // Anexar y eliminar row cuando se de el caso de anexar "n" cantidad de registros
    $(document).on("click",".addrow",function() {
        $(this).closest(".form-group").find(".tableRow  .clone:first").clone().find("input").each(function() {
            $(this).val('');
        }).end().appendTo($(this).closest(".form-group").find("table.tableRow "));

    })

    $(document).on("click",".addrowUser",function(e) {
        $(this).closest(".form-group").find(".tableRowUser .clone:first").clone().find("input").each(function() {
            $(this).val('');
        }).end().appendTo($(this).closest(".form-group").find("table.tableRowUser"));
        
        // $(".tablaIPS tr.clone:first-child .ip_primaria").prop('checked', true);
        // $(".tablaIPS tr.clone:last-child .ip_primaria").prop('checked', false).val(0);
        $(".tablaIPS tr.clone:last-child .label_ip").text("IP Secundaria");
    })

    $(document).on("click",".removerow",function() {
        $(this).parent().parent().fadeTo("fast", 0.0, function(){
            $(this).slideUp("fast", function() {
                $(this).remove();
            });
        });
    })
});

// metodo para deshabilitar inputs
function disable_inputs(){
    $('input ,select, textarea').attr('disabled',true);
}
