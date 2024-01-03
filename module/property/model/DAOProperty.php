<?php
    include("model/connect.php");
    
	class DAOProperty{
		function insert_property($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>'); List the data of the form OK.
			if (!isset($datos['cadastral_reference'], $datos['square_meters'], $datos['property_type'], $datos['number_of_rooms'], $datos['comment'], $datos['characteristics'], $datos['date_publication'], $datos['price'])) {
				return false;
			}else{
				$cadastral_reference = $datos['cadastral_reference'];
				$square_meters = $datos['square_meters'];
				$property_type = isset($datos['property_type']) ? $datos['property_type'] : '';
				$characteristics = isset($datos['characteristics']) ? (is_array($datos['characteristics']) ? implode(",", $datos['characteristics']) : $datos['characteristics']) : '';
				$number_of_rooms = $datos['number_of_rooms'];
				$comment = $datos['comment'];
				$date_publication = $datos['date_publication'];
				$price = $datos['price'];

				$sql = "INSERT INTO property(cadastral_reference,square_meters,property_type,number_of_rooms,comment,characteristics, date_publication,price) VALUES('$cadastral_reference','$square_meters','$property_type','$number_of_rooms','$comment','$characteristics','$date_publication','$price')";
				// die('<script>console.log('.json_encode( $sql ) .');</script>'); Resultado de la consulta SQL OK y probada en phpmyadmin.
				$conexion = connect::con();
				$res = mysqli_query($conexion, $sql);
				connect::close($conexion);
				return $res;
			}
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
			// $data = 'DAO select_property OK';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
			$sql = "SELECT * FROM property WHERE cadastral_reference='$property'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		function update_property($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$cadastral_reference = $datos['cadastral_reference'];
			$square_meters = $datos['square_meters'];
			$property_type = $datos['property_type'];
			$characteristics = implode(",", $datos['characteristics']);
			$number_of_rooms = $datos['number_of_rooms'];
			$comment = $datos['comment'];
			$date_publication = $datos['date_publication'];
			$price = $datos['price'];

			$sql = "UPDATE property SET cadastral_reference='$cadastral_reference', square_meters='$square_meters', property_type='$property_type', characteristics='$characteristics', number_of_rooms='$number_of_rooms', comment='$comment', date_publication='$date_publication', price='$price' WHERE cadastral_reference='$cadastral_reference_old'";

			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);

			// if (!$res) {
			// 	die('Error en la consulta: ' . mysqli_error($conexion));
			// }
			// die('<script>console.log('.json_encode( $res ) .');</script>');
			connect::close($conexion);
			return $res;
		}
		function delete_property($property){
			$sql = "DELETE FROM property WHERE cadastral_reference='$property'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}