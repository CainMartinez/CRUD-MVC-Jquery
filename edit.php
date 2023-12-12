<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    
    $cadastral_reference = mysqli_real_escape_string($conn, $_POST['cadastral_reference']);
    $square_meters = mysqli_real_escape_string($conn, $_POST['square_meters']);
    $property_type = mysqli_real_escape_string($conn, $_POST['property_type']);
    $number_of_rooms = mysqli_real_escape_string($conn, $_POST['number_of_rooms']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $date_publication = mysqli_real_escape_string($conn, $_POST['date_publication']);
    $characteristics = isset($_POST['characteristics']) ? $_POST['characteristics'] : "";
    $price = mysqli_real_escape_string($conn, $_POST['price']);


    // checking empty fields
    if(empty($cadastral_reference) || empty($square_meters) || empty($property_type) || empty($number_of_rooms) || empty($comment) || empty($characteristics) || empty($price) || empty($date_publication)) {	

        if(empty($cadastral_reference)) {
            echo "<font color='red'>Cadastral reference field is empty.</font><br/>";
        }		
        if(empty($square_meters)) {
            echo "<font color='red'>Square meters field is empty.</font><br/>";
        }
        if(empty($property_type)) {
            echo "<font color='red'>Property type field is empty.</font><br/>";
        }
        if(empty($number_of_rooms)) {
            echo "<font color='red'>Number of rooms field is empty.</font><br/>";
        }
        if(empty($comment)) {
            echo "<font color='red'>Comment field is empty.</font><br/>";
        }
        if(empty($date_publication)) {
            echo "<font color='red'>Date publication field is empty.</font><br/>";
        }
        if(empty($characteristics)) {
            echo "<font color='red'>Characteristics field is empty.</font><br/>";
        }
        if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }

    } else {	
        //updating the table
        $result = mysqli_query($conn, "UPDATE property SET cadastral_reference='$cadastral_reference',square_meters='$square_meters',property_type='$property_type',number_of_rooms='$number_of_rooms',comment='$comment' WHERE id=$id");
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
include_once("update.php");
?>