<?php
    include("model/connect.php");
    
	class DAOProperty{
		function insert_property($datos){
			die('<script>console.log('.json_encode( $datos ) .');</script>');

			$property=$datos['usuario'];
        	$passwd=$datos['pass'];
        	$name=$datos['nombre'];
        	$dni=$datos['DNI'];
        	$sex=$datos['sexo'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$age=$datos['edad'];
        	$country=$datos['pais'];
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	$sql = "INSERT INTO property(cadastral_reference,square_meters,property_type,number_of_rooms,comment,characteristics, date_publication,price) VALUES('$cadastral_reference','$square_meters','$property_type','$number_of_rooms','$comment','$characteristics','$date_publication','$price')";

			// die('<script>console.log('.json_encode( $sql ) .');</script>');
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_property(){
			// $data = 'DAO select_all_property OK';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM property ORDER BY cadastral_reference ASC";
			
			$conection = connect::con();
            $res = mysqli_query($conection, $sql);
			connect::close($conection);
            return $res;
		}
		
		function select_property($property){
			// $data = 'hola DAO select_property';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM usuario WHERE property='$property'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_property($datos){
			//die('<script>console.log('.json_encode( $datos ) .');</script>');
			$property=$datos['usuario'];
        	$passwd=$datos['pass'];
        	$name=$datos['nombre'];
        	$dni=$datos['DNI'];
        	$sex=$datos['sexo'];
        	$birthdate=$datos['fecha_nacimiento'];
        	$age=$datos['edad'];
        	$country=$datos['pais'];
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	
        	$sql = " UPDATE usuario SET pass='$passwd', name='$name', dni='$dni', sex='$sex', birthdate='$birthdate', age='$age',"
        		. " country='$country', language='$language', comment='$comment', hobby='$hobby' WHERE property='$property'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_property($property){
			$sql = "DELETE FROM property WHERE cadas='$property'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}