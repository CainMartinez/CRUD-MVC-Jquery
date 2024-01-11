<?php

	$path = $_SERVER['DOCUMENT_ROOT'];
    include($path . "/model/connect.php");
    
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
		function update_property_new($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$cadastral_reference_old = $datos['cadastral_reference_old'];
			$square_meters = $datos['square_meters'];
			$property_type = $datos['property_type'];
			$characteristics = implode(",", $datos['characteristics']);
			$number_of_rooms = $datos['number_of_rooms'];
			$comment = $datos['comment'];
			$date_publication = $datos['date_publication'];
			$price = $datos['price'];

			$sql = "UPDATE property SET square_meters='$square_meters', property_type='$property_type', characteristics='$characteristics',
			number_of_rooms='$number_of_rooms', comment='$comment', date_publication='$date_publication', price='$price' WHERE cadastral_reference='$cadastral_reference_old'";

			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			// die('<script>console.log('.json_encode( $res ) .');</script>');
			return $res;
		}
		function update_property($datos){
			// die('<script>console.log('.json_encode( $datos ) .');</script>');
			$cadastral_reference_old = $datos['cadastral_reference_old'];
			$cadastral_reference = $datos['cadastral_reference'];
			$square_meters = $datos['square_meters'];
			$property_type = $datos['property_type'];
			$characteristics = implode(",", $datos['characteristics']);
			$number_of_rooms = $datos['number_of_rooms'];
			$comment = $datos['comment'];
			$date_publication = $datos['date_publication'];
			$price = $datos['price'];

			$sql = "UPDATE property SET cadastral_reference='$cadastral_reference', square_meters='$square_meters', property_type='$property_type', characteristics='$characteristics',
			number_of_rooms='$number_of_rooms', comment='$comment', date_publication='$date_publication', price='$price' WHERE cadastral_reference='$cadastral_reference_old'";

			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			// die('<script>console.log('.json_encode( $res ) .');</script>');
			return $res;
			
		
		}
		
		function delete_property($cadastral_reference){
			$sql = "DELETE FROM property WHERE cadastral_reference='$cadastral_reference'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		function delete_all_property(){
			$sql = "DELETE FROM property";
			
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
			connect::close($conexion);
			return $res;
		}
		function dummies_property(){
			$sql = "DELETE FROM property;";
			
			$sql .= "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment, characteristics, date_publication, price) " 
			." VALUES ('1W2D50JIL04J3L5K1', '120', 'Apartment', '3', 'New and modern apartment', 'Balcony,Garden', '2022-01-15', '50000');";

			$sql.= "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment, characteristics, date_publication, price) " 
			." VALUES ('2OUD50JIL04J3L5G6', '200', 'House', '4', 'Spacious house with garden', 'Garden,Garage', '2019-07-26', '320000');";

			$sql.= "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment, characteristics, date_publication, price) " 
			." VALUES ('8P9D50JIL04J3L1H7', '80', 'Apartment', '2', 'Cozy apartment in city center', 'Balcony,Pool', '2019-03-30', '390000');";

			$sql.= "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment, characteristics, date_publication, price) " 
			." VALUES ('44GD50JIL04J3LH58', '300', 'Other', '5', 'Luxury villa with pool', 'Pool,Garage', '2019-07-26', '600000');";

			$sql.= "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment, characteristics, date_publication, price) " 
			." VALUES ('3J4750JIL04J3LKP4', '150', 'House', '4', 'Townhouse with rooftop terrace', 'Pool', '2017-06-20', '280000');";
			$conexion = connect::con();
            $res = mysqli_multi_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
	}