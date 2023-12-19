<div id="contenido" class="form-container">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" 
    onsubmit="return validate();" action="index.php?page=controller_property&op=create" > 
        <h1>New Property</h1>
        <table width="75%" border="0">
            <tr> 
                <td>Cadastral Reference</td>
                <td><input type="text" name="cadastral_reference" id="cadastral_reference" placeholder="Input the cadastral reference..." pattern="[a-zA-Z0-9]*" required></td>
                <td>
                    <font color="red">
                        <span id="error_cadastral_reference" class="error">
                            <?php
                                // echo "$error_cadastral_reference";
                            ?>
                        </span>
                    </font>
                </td>
            </tr>
            <tr> 
                <td>Square Meters</td>
                <td><input type="text" name="square_meters" id="square_meters" placeholder="Input the square meters..." pattern="\d*" required></td>
            </tr>
            <tr> 
                <td>Property Type</td>
                <td>
                    <input type="radio" id="property_type" name="property_type" value="House" required>
                    <label for="house">House</label><br>
                    <input type="radio" id="property_type" name="property_type" value="Apartment">
                    <label for="apartment">Apartment</label><br>
                    <input type="radio" id="property_type" name="property_type" value="Other">
                    <label for="other">Other</label>
                </td>
            </tr>
            <tr> 
                <td>Characteristics</td>
                <td>
                    
                    <input type="checkbox" id="characteristics[]" name="characteristics[]" value="Balcony">
                    <label for="balcony">Balcony</label><br>
                    <input type="checkbox" id="characteristics[]" name="characteristics[]" value="Garage">
                    <label for="garage">Garage</label><br>
                    <input type="checkbox" id="characteristics[]" name="characteristics[]" value="Pool">
                    <label for="pool">Pool</label><br>
                    <input type="checkbox" id="characteristics[]" name="characteristics[]" value="Garden">
                    <label for="garden">Garden</label><br>
                </td>
            </tr>
            <tr> 
                <td>Number of Rooms</td>
                <td>
                    <select name="number_of_rooms[]" id="number_of_rooms[]" required>
                        <option value="">Select number of rooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            <tr> 
                <td>Comment</td>
                <td><textarea name="comment" id="coment" rows="4" cols="50" placeholder="Input a commentary..." required></textarea></td>
            </tr>
            <tr> 
                <td>Date of publication</td>
                <td><input type="text" name="date_publication" id="fecha" placeholder="Input the date..." required></td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" id="price" pattern="[0-9]*" placeholder="Input the price..." required></td>
            </tr>
            <tr>
                <td><input type="submit" name="create" id="create" value="Add new"/></td>
                <td align="right"><a href="index.php?page=controller_property&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>