<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
mysqli_set_charset($conn, "utf8");
$result = mysqli_query($conn, "SELECT * FROM property ORDER BY id DESC");
?>

<html>
    <head>  
        <title>Homepage</title>
        <meta charset="utf-8">
    </head>

    <body>
<a href="add.html">Add New Data</a><br/><br/>

    <table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>ID</td>
        <td>Cadastral Reference</td>
        <td>Square Meters</td>
        <td>Property Type</td>
        <td>Number of Rooms</td>
        <td>Comment</td>
        <td>Update</td>
    </tr>
    <?php 
if($result !== false) {
    while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['cadastral_reference']."</td>";
            echo "<td>".$res['square_meters']."</td>";
            echo "<td>".$res['property_type']."</td>";
            echo "<td>".$res['number_of_rooms']."</td>";
            echo "<td>".$res['comment']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";      
        }
    } else {
        echo "Error en la consulta: Parece que no hay datos en la tabla.";
    }
    include 'debug.php';
    $data = 'Eso es el console_log';
    console_log($data);
    ?>
    </table>
</body>
</html>
