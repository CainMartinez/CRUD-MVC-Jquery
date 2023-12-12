<?php
    $env = parse_ini_file('C:/sites/.env.ini');

	$db_host = $env['DB_HOST'];
    $db_name = $env['DB_NAME'];
    $db_password = $env['DB_PASSWORD'];
    $db_user = $env['DB_USER'];

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
    }else{
        $sql = "INSERT INTO property (cadastral_reference, square_meters, property_type, number_of_rooms, comment)
        VALUES 
        ('CR1', '100', 'House', 3, 'Beautiful house with garden'),
        ('CR2', '80', 'Apartment', 2, 'Apartment with sea view'),
        ('CR3', '120', 'House', 4, 'House with pool'),
        ('CR4', '70', 'Apartment', 1, 'Downtown apartment'),
        ('CR5', '200', 'House', 5, 'Large house with garage'),
        ('CR6', '90', 'Apartment', 2, 'Apartment with balcony'),
        ('CR7', '140', 'House', 4, 'House in the suburbs'),
        ('CR8', '75', 'Apartment', 1, 'Apartment near park'),
        ('CR9', '180', 'House', 4, 'House with large backyard'),
        ('CR10', '85', 'Apartment', 2, 'Modern apartment'),
        ('CR11', '130', 'House', 3, 'House with attic'),
        ('CR12', '65', 'Apartment', 1, 'Cozy apartment'),
        ('CR13', '150', 'House', 4, 'House with basement'),
        ('CR14', '95', 'Apartment', 2, 'Apartment with large living room'),
        ('CR15', '110', 'House', 3, 'House with office room'),
        ('CR16', '80', 'Apartment', 2, 'Apartment with two bathrooms'),
        ('CR17', '160', 'House', 4, 'House with guest room'),
        ('CR18', '70', 'Apartment', 1, 'Apartment with large kitchen'),
        ('CR19', '120', 'House', 3, 'House with fireplace'),
        ('CR20', '85', 'Apartment', 2, 'Apartment with rooftop terrace');";
        if ($conn->query($sql) === TRUE) {
            echo "Records inserted successfully";
        } else {
            echo "Error inserting records: " . $conn->error;
        }
        $conn->close();
    }
?>