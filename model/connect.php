<?php
	class connect{
		public static function con(){
			$env = parse_ini_file('C:/sites/.env.ini');

			$host = $env['DB_HOST'];
			$db= $env['DB_NAME'];
			$pass = $env['DB_PASSWORD'];
			$user = $env['DB_USER'];                     
    		$port = 3306;
    		
    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
	}