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
        $characteristics = isset($_POST['characteristics']) ? implode(", ", $_POST['characteristics']) : ""; 
        $date_publication = isset($_POST['date_publication']) ? mysqli_real_escape_string($conn, $_POST['date_publication']) : "";
        $price = mysqli_real_escape_string($conn, $_POST['price']); 

        if (!preg_match("/^[a-zA-Z0-9]*$/", $cadastral_reference)) {
            echo "<font color='red'>Invalid cadastral reference.</font><br/>";
            return;
        }
        if (!preg_match("/^[0-9]*$/", $square_meters)) {
            echo "<font color='red'>Invalid square meters.</font><br/>";
            return;
        }
        if (!preg_match("/^[0-9]*$/", $number_of_rooms)) {
            echo "<font color='red'>Invalid number of rooms.</font><br/>";
            return;
        }
        if (!preg_match("/^[0-9]*$/", $price)) {
            echo "<font color='red'>Invalid price.</font><br/>";
            return;
        }
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
            if(empty($characteristics)) {
                echo "<font color='red'>Characteristics field is empty.</font><br/>";
            }
            if(empty($date_publication)) {
                echo "<font color='red'>Date publication field is empty.</font><br/>";
            }
            if(empty($price)) {
                echo "<font color='red'>Price field is empty.</font><br/>";
            }

            // Link to the previous page (not add.php)
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else { 
            // if all the fields are filled (not empty) 

            //insert data to database
            $result = mysqli_query($conn, "INSERT INTO property(cadastral_reference,square_meters,property_type,number_of_rooms,comment,characteristics, date_publication,price) VALUES('$cadastral_reference','$square_meters','$property_type','$number_of_rooms','$comment','$characteristics','$date_publication','$price')");

            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }
    ?>
    </body>
</html>