<?php

class ConfiguracionesSeeder extends Seeder {

    public function run(){

    	Configuracion::truncate();
		Configuracion::insert(array(
			array(
				'nombre_configuracion'=>'app.debug',
				'valor'=>'false',
				'descripcion'=>'Modo debug (true/false)',
			),
			array(
				'nombre_configuracion'=>'database.log_query',
				'valor'=>'false',
				'descripcion'=>'Escribe los querys en el archivo log (true/false)',
			),
			array(
				'nombre_configuracion'=>'app.log_in_console',
				'valor'=>'false',
				'descripcion'=>'Imprime el log en consola',
			),
		));

    }
}

?>
