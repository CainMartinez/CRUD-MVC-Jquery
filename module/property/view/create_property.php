<div id="contenido" class="form-container">
    <form autocomplete="on" method="post" name="alta_property" id="alta_property"> 
        <h1>New Property</h1>
        <table width="75%" border="0">
            <tr> 
                <td>Cadastral Reference</td>
                <td><input type="text" name="cadastral_reference" id="cadastral_reference" placeholder="Input the cadastral reference..."></td>
                <td>
                    <font color="red">
                        <span id="error_cadastral_reference" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr> 
                <td>Square Meters</td>
                <td><input type="text" name="square_meters" id="square_meters" placeholder="Input the square meters..." pattern="\d*"></td>
                <td>
                    <font color="red">
                        <span id="error_square_meters" class="error">
                        </span>
                    </font>            
            </tr>
            <tr> 
                <td>Property Type</td>
                <td>
                    <input type="radio" id="house" name="property_type" value="House">
                    <label for="house">House</label><br>
                    <input type="radio" id="apartment" name="property_type" value="Apartment">
                    <label for="apartment">Apartment</label><br>
                    <input type="radio" id="other" name="property_type" value="Other">
                    <label for="other">Other</label>
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
                <td>
                    <input type="checkbox" id="balcony" name="characteristics[]" value="Balcony">
                    <label for="balcony">Balcony</label><br>
                    <input type="checkbox" id="garage" name="characteristics[]" value="Garage">
                    <label for="garage">Garage</label><br>
                    <input type="checkbox" id="pool" name="characteristics[]" value="Pool">
                    <label for="pool">Pool</label><br>
                    <input type="checkbox" id="garden" name="characteristics[]" value="Garden">
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
                    <select name="number_of_rooms" id="number_of_rooms">
                        <option value="">Select number of rooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                <td>
                    <font color="red">
                        <span id="error_number_of_rooms" class="error">
                        </span>
                    </font>
                </td>
            <tr> 
                <td>Comment</td>
                <td><textarea name="comment" id="comment" rows="4" cols="50" placeholder="Input a commentary..."></textarea></td>
                <td>
                    <font color="red">
                        <span id="error_comment" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr> 
                <td>Date of publication</td>
                <td><input type="text" name="date_publication" id="date_publication" placeholder="Input the date..."></td>
                <td>
                    <font color="red">
                        <span id="error_date_publication" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr> 
                <td>Price</td>
                <td><input type="text" name="price" id="price" placeholder="Input the price..."></td>
                <td>
                    <font color="red">
                        <span id="error_price" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td><input type="button" class="styled-button styled-button-green" name="Submit" onclick="validate('create')" value="Add new"/></td>
                <td align="right"><a class="backbutton" href="index.php?page=controller_property&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>