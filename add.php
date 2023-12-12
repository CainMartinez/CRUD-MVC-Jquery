<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
    <?php
    //including the database connection file
    include_once("config.php");

    if(isset($_POST['Submit'])) {	
        $cadastral_reference = mysqli_real_escape_string($conn, $_POST['cadastral_reference']);
        $square_meters = mysqli_real_escape_string($conn, $_POST['square_meters']);
        $property_type = isset($_POST['property_type']) ? mysqli_real_escape_string($conn, $_POST['property_type']) : "";
        $number_of_rooms = mysqli_real_escape_string($conn, $_POST['number_of_rooms']);
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);

        // checking empty fields
        if(empty($cadastral_reference) || empty($square_meters) || empty($property_type) || empty($number_of_rooms) || empty($comment)) {

            if(empty($cadastral_reference)) {
                echo "<font color='red'>Cadastral Reference field is empty.</font><br/>";
            }

            if(empty($square_meters)) {
                echo "<font color='red'>Square Meters field is empty.</font><br/>";
            }

            if(empty($property_type)) {
                echo "<font color='red'>Property Type field is empty.</font><br/>";
            }

            if(empty($number_of_rooms)) {
                echo "<font color='red'>Number of Rooms field is empty.</font><br/>";
            }

            if(empty($comment)) {
                echo "<font color='red'>Comment field is empty.</font><br/>";
            }

            // Link to the previous page (not add.php)
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else { 
            // if all the fields are filled (not empty) 

            //insert data to database
            $result = mysqli_query($conn, "INSERT INTO property(cadastral_reference,square_meters,property_type,number_of_rooms,comment) VALUES('$cadastral_reference','$square_meters','$property_type','$number_of_rooms','$comment')");

            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }
    ?>
    </body>
</html>
