<div id="contenido" class="form-container">
    <form autocomplete="on" method="post" name="updateForm" id="updateForm" 
    onsubmit="return validate();" action="index.php?page=controller_property&op=update">
    <table width="75%" border="0">
            <tr> 
                <td>Cadastral Reference</td>
                <td><input type="text" name="cadastral_reference" id="cadastral_reference" value="<?php echo $property['cadastral_reference'];?>"></td>
                <td>
                    <font color="red">
                        <span id="error_cadastral_reference" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Square Meters</td>
                <td><input type="text" name="square_meters" id="square_meters" value="<?php echo $property['square_meters'];?>"></td>
                <td>
                    <font color="red">
                        <span id="error_square_meters" class="error">
                        </span>
                    </font>
            </tr>
            
            <tr>
                <td>Property Type</td>
                <td>
                    <?php
                        if ($property['property_type']==="House"){
                    ?>
                        <input type="radio" id="property_type_house" name="property_type" value="House" checked>
                        <label for="property_type_house">House</label><br>
                        <input type="radio" id="property_type_apartment" name="property_type" value="Apartment">
                        <label for="property_type_apartment">Apartment</label><br>
                        <input type="radio" id="property_type_other" name="property_type" value="Other">
                        <label for="property_type_other">Other</label>
                    <?php
                        }elseif ($property['property_type']==="Apartment"){
                    ?>
                        <input type="radio" id="property_type_house" name="property_type" value="House">
                        <label for="property_type_house">House</label><br>
                        <input type="radio" id="property_type_apartment" name="property_type" value="Apartment" checked>
                        <label for="property_type_apartment">Apartment</label><br>
                        <input type="radio" id="property_type_other" name="property_type" value="Other">
                        <label for="property_type_other">Other</label>
                    <?php
                        }else{
                    ?>
                        <input type="radio" id="property_type_house" name="property_type" value="House">
                        <label for="property_type_house">House</label><br>
                        <input type="radio" id="property_type_apartment" name="property_type" value="Apartment">
                        <label for="property_type_apartment">Apartment</label><br>
                        <input type="radio" id="property_type_other" name="property_type" value="Other" checked>
                        <label for="property_type_other">Other</label>
                    <?php
                        }
                    ?>                
                </td>
                <td>
                    <font color="red">
                        <span id="error_property_type" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Characteristics</td>
                    <?php
                        $characteristics=explode(",", $property['characteristics']);
                        $characteristics = array_map('trim', $characteristics);//Elimina los espacios en blanco de los extremos del array.
                        // var_dump($characteristics);
                    ?>
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
                <td>
                    <font color="red">
                        <span id="error_characteristics" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr> 
                <td>Number of Rooms</td>
                <td>
                    <select name="number_of_rooms" required>
                        <option value="">Select number of rooms</option>
                        <option value="1" <?php echo $property['number_of_rooms'] == '1' ? 'selected' : ''; ?>>1</option>
                        <option value="2" <?php echo $property['number_of_rooms'] == '2' ? 'selected' : ''; ?>>2</option>
                        <option value="3" <?php echo $property['number_of_rooms'] == '3' ? 'selected' : ''; ?>>3</option>
                        <option value="4" <?php echo $property['number_of_rooms'] == '4' ? 'selected' : ''; ?>>4</option>
                        <option value="5" <?php echo $property['number_of_rooms'] == '5' ? 'selected' : ''; ?>>5</option>
                    </select>
                </td>
                <td>
                    <font color="red">
                        <span id="error_number_of_rooms" class="error">
                        </span>
                    </font>
                </td>
            </tr> 
            <tr>
                <td>Comment</td>
                <td><textarea name="comment" id="comment"><?php echo $property['comment'];?></textarea></td>
                <td>
                    <font color="red">
                        <span id="error_comment" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Date of publication</td>
                <td><input type="text" name="date_publication" id="date_publication" value="<?php echo $property['date_publication'];?>"></td>
                <td>
                    <font color="red">
                        <span id="error_date_publication" class="error">
                        </span>
                    </font>
                </td>
            <tr>
                <td>Price</td>
                <td><input type="text" name="price" id="price" value="<?php echo $property['price'];?>"></td>
                <td>
                    <font color="red">
                        <span id="error_price" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="update" id="update" value="Update"/></td>
                <td align="right"><a class="backbutton" href="index.php?page=controller_property&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>
