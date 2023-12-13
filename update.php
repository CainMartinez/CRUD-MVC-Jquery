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
    $date_publication = $res['date_publication'];
    $characteristics = $res['characteristics']; 
    $price = $res['price']; 
}
$characteristics = explode(', ', $characteristics);
?>
<html>
<head>	
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('#date_publication').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1900:2030',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr> 
            <td>Cadastral Reference</td>
            <td><input type="text" name="cadastral_reference" pattern="[a-zA-Z0-9]*" value="<?php echo $cadastral_reference;?>"></td>
        </tr>
        <tr> 
            <td>Square Meters</td>
            <td><input type="text" name="square_meters" pattern="\d*" value="<?php echo $square_meters;?>"></td>
        </tr>
        <tr> 
                    <td>Property Type</td>
                    <td>
                        <input type="radio" id="house" name="property_type" value="House" <?php echo $property_type == 'House' ? 'checked' : ''; ?> required>
                        <label for="house">House</label><br>
                        <input type="radio" id="apartment" name="property_type" value="Apartment" <?php echo $property_type == 'Apartment' ? 'checked' : ''; ?>>
                        <label for="apartment">Apartment</label><br>
                        <input type="radio" id="other" name="property_type" value="Other" <?php echo $property_type == 'Other' ? 'checked' : ''; ?>>
                        <label for="other">Other</label>
                    </td>
                </tr>
                <tr> 
                    <td>Characteristics</td>
                    <td>
                        <input type="checkbox" id="balcony" name="characteristics[]" value="Balcony" <?php echo in_array('Balcony', $characteristics) ? 'checked' : ''; ?>>
                        <label for="balcony">Balcony</label><br>
                        <input type="checkbox" id="garage" name="characteristics[]" value="Garage" <?php echo in_array('Garage', $characteristics) ? 'checked' : ''; ?>>
                        <label for="garage">Garage</label><br>
                        <input type="checkbox" id="pool" name="characteristics[]" value="Pool" <?php echo in_array('Pool', $characteristics) ? 'checked' : ''; ?>>
                        <label for="pool">Pool</label><br>
                        <input type="checkbox" id="garden" name="characteristics[]" value="Garden" <?php echo in_array('Garden', $characteristics) ? 'checked' : ''; ?>>
                        <label for="garden">Garden</label><br>
                    </td>
                </tr>
                <tr> 
                    <td>Number of Rooms</td>
                    <td>
                        <select name="number_of_rooms" required>
                            <option value="">Select number of rooms</option>
                            <option value="1" <?php echo $number_of_rooms == '1' ? 'selected' : ''; ?>>1</option>
                            <option value="2" <?php echo $number_of_rooms == '2' ? 'selected' : ''; ?>>2</option>
                            <option value="3" <?php echo $number_of_rooms == '3' ? 'selected' : ''; ?>>3</option>
                            <option value="4" <?php echo $number_of_rooms == '4' ? 'selected' : ''; ?>>4</option>
                            <option value="5" <?php echo $number_of_rooms == '5' ? 'selected' : ''; ?>>5</option>
                        </select>
                    </td>
                <tr> 
        <tr> 
            <td>Comment</td>
            <td><textarea name="comment"><?php echo $comment;?></textarea></td>
        </tr>
        <tr> 
            <td>Date of Publication</td>
            <td><input type="text" name="date_publication" id="date_publication" value="<?php echo $date_publication;?>"></td>
        <tr> 
            <td>Price</td>
            <td><input type="text" name="price" pattern="[0-9]*" value="<?php echo $price;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>