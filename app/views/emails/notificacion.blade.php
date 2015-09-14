<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
        <style type="text/css">
	        .contenedor_correo {
	            padding: 40px;
	        }
	        .contenedor_correo td {
	            padding: 10px;
	        }
	        .titulo {
	            background: #f8f8f8 none repeat scroll 0 0;
	            border: 1px solid #eeeeee;
	            color: #555;
	            font-size: 20px;
	            margin-top: 20px;
	            padding: 5px;
	            text-align: center;
	        }
	        .logo_correo {
			    float: right;
			    width: auto;
			}
	    </style>
   </head>
   <body>
        <div class="contenedor_correo">
        <div class="titulo">Datos de la aplicación</div>
        <table style="width:100%; border: 1px solid #eeeeee;">
            <tr>
                <td><strong>Servidor:</strong></td>
                <td>{{$servidor}}</td> 
            </tr>
            <tr>
                <td><strong>Localización:</strong></td>
                <td>{{$localizacion}}</td> 
            </tr>
            <tr>
                <td><strong>Aplicación:</strong></td>
                <td>{{$aplicacion}}</td> 
            </tr>
            <tr>
                <td><strong>Mensaje:</strong></td>
                <td>
                    {{$mensaje}}
                </td>
            </tr>
        </table>
      </div>
   </body>
</html>
