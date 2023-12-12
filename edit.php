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

    // checking empty fields
    if(empty($cadastral_reference) || empty($square_meters) || empty($property_type) || empty($number_of_rooms) || empty($comment)) {	

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

    } else {	
        //updating the table
        $result = mysqli_query($conn, "UPDATE property SET cadastral_reference='$cadastral_reference',square_meters='$square_meters',property_type='$property_type',number_of_rooms='$number_of_rooms',comment='$comment' WHERE id=$id");
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM property WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $cadastral_reference = $res['cadastral_reference'];
    $square_meters = $res['square_meters'];
    $property_type = $res['property_type'];
    $number_of_rooms = $res['number_of_rooms'];
    $comment = $res['comment'];
}
?>
<html>
<head>	
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr> 
            <td>Cadastral Reference</td>
            <td><input type="text" name="cadastral_reference" value="<?php echo $cadastral_reference;?>"></td>
        </tr>
        <tr> 
            <td>Square Meters</td>
            <td><input type="text" name="square_meters" value="<?php echo $square_meters;?>"></td>
        </tr>
        <tr> 
            <td>Property Type</td>
            <td><input type="text" name="property_type" value="<?php echo $property_type;?>"></td>
        </tr>
        <tr> 
            <td>Number of Rooms</td>
            <td><input type="text" name="number_of_rooms" value="<?php echo $number_of_rooms;?>"></td>
        </tr>
        <tr> 
            <td>Comment</td>
            <td><input type="text" name="comment" value="<?php echo $comment;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>