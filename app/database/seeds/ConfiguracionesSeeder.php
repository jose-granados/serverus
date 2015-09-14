<?php

class ConfiguracionesSeeder extends Seeder {

    public function run(){

		DB::table('configuraciones')->truncate();
		DB::table('configuraciones')->insert(array(
			array('nombre_configuracion'=>'app.debug','valor'=>'true','descripcion'=>'Modo debug (debe ser "true" para que esté habilitado) '),
			array('nombre_configuracion'=>'app.log_in_console','valor'=>'true','descripcion'=>'Muestra en consola lo que se imprime en el archivo de log (debe ser "true" para que esté habilitado)'),
			array('nombre_configuracion'=>'database.log_query','valor'=>'true','descripcion'=>'Guarda en el log los querys que se ejecutan en base de datos (debe ser "true" para que esté habilitado)'),
			array('nombre_configuracion'=>'mail.driver','valor'=>'smtp','descripcion'=>'Driver para configuración de correo'),
			array('nombre_configuracion'=>'mail.host','valor'=>'smtp.gmail.com','descripcion'=>'Host para configuración de correo'),
			array('nombre_configuracion'=>'mail.port','valor'=>'587','descripcion'=>'Puerto para configuración de correo'),
			array('nombre_configuracion'=>'mail.encryption','valor'=>'tls','descripcion'=>'Encriptacion para configuración de correo'),
			array('nombre_configuracion'=>'mail.username','valor'=>'serverus.test@gmail.com','descripcion'=>'Cuenta de correo para envio'),
			array('nombre_configuracion'=>'mail.password','valor'=>'serverus.test1!','descripcion'=>'Contraseña de la cuenta de correo para envio'),
			array('nombre_configuracion'=>'mail.from.address','valor'=>'serverus.test@gmail.com','descripcion'=>'Direccion que aparecerá en los correos enviados por la aplicación'),
			array('nombre_configuracion'=>'mail.from.name','valor'=>'Serverus TEST','descripcion'=>'Nombre que aparecerá en los correos enviados por la aplicación'),
		));

    }
}

?>
