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
        $sql = "INSERT INTO property (cadastral_reference, square_meters, property_type, characteristics, number_of_rooms, date_publication, comment, price)
        VALUES 
        ('CR1', '100', 'House', 'Balcony' ,'10/02/2000', 3, 'Beautiful house with garden',10000),
        ('CR2', '80', 'Apartment','Garden' ,'10/02/2000', 2, 'Apartment with sea view',10000),
        ('CR3', '120', 'House', 4, 'Balcony','10/02/2000',5 ,'House with pool',10000),
        ('CR4', '70', 'Apartment','Balcony' ,'10/02/2000', 1, 'Downtown apartment',10000),
        ('CR5', '200', 'House', 5, 'Balcony','10/02/2000',6 ,'Large house with garage',10000),
        ('CR6', '90', 'Apartment', 'Balcony','10/02/2000' ,2, 'Apartment with balcony',10000),
        ('CR7', '140', 'House', 4, 'Balcony','10/02/2000',5 ,'House in the suburbs',10000),
        ('CR8', '75', 'Apartment','Balcony' ,'10/02/2000', 1, 'Apartment near park',10000),
        ('CR9', '180', 'House', 4, 'Balcony' ,'10/02/2000',3,'House with large backyard',10000),
        ('CR10', '85', 'Apartment', 'Balcony','10/02/2000' ,2, 'Modern apartment',10000),
        ('CR11', '130', 'House', 3,'Balcony','10/02/2000',4 , 'House with attic',10000),
        ('CR12', '65', 'Apartment', 'Balcony' ,'10/02/2000',1, 'Cozy apartment',10000),
        ('CR13', '150', 'House', 4, 'Balcony' ,'10/02/2000',4,'House with basement',10000),
        ('CR14', '95', 'Apartment', 'Balcony','10/02/2000' ,2, 'Apartment with large living room',10000),
        ('CR15', '110', 'House', 4,'Balcony' ,'10/02/2000',3, 'House with office room',10000),
        ('CR16', '80', 'Apartment',4,'Balcony' ,'10/02/2000', 2, 'Apartment with two bathrooms',10000),
        ('CR17', '160', 'House',4, 'Balcony' ,'10/02/2000',4, 'House with guest room',10000),
        ('CR18', '70', 'Apartment',4,'Balcony' ,'10/02/2000', 1, 'Apartment with large kitchen',10000),
        ('CR19', '120', 'House',4,'Balcony' ,'10/02/2000', 3, 'House with fireplace',10000),
        ('CR20', '85', 'Apartment', 2, 'Garden',,'10/02/2000',4'Apartment with rooftop terrace',10000);";
        if ($conn->query($sql) === TRUE) {
            echo "Records inserted successfully";
        } else {
            echo "Error inserting records: " . $conn->error;
        }
        $conn->close();
    }
?>