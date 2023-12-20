<div id="contenido" class="form-container">
    <form autocomplete="on" method="post" name="update_property" id="update_property" 
    onsubmit="return validate();" action="index.php?page=controller_property&op=update" > 
        <h1>Update Property</h1>
        <table width="75%" border="0">
            <!-- Aquí van todos los campos del formulario de creación -->
            <!-- Recuerda cambiar los nombres de los campos y los ID si es necesario -->
            <!-- También asegúrate de llenar los campos con los valores actuales de la propiedad -->
            <!-- Por ejemplo, para el campo de referencia catastral, puedes hacer algo como esto: -->
            <tr> 
                <td>Cadastral Reference</td>
                <td><input type="text" name="cadastral_reference" id="cadastral_reference" placeholder="Input the cadastral reference..." value="<?php echo $property->getCadastralReference(); ?>"></td>
                <td>
                    <font color="red">
                        <span id="error_cadastral_reference" class="error">
                        </span>
                    </font>
                </td>
            </tr>
            <tr>
                <td>Square Meters</td>
                <td><input type="text" name="square_meters" id="square_meters" placeholder="Input the square meters..." pattern="\d*" value="<?php echo $property->getSquareMeters(); ?>"></td>
                <td>
                    <font color="red">
                        <span id="error_square_meters" class="error">
                        </span>
                    </font>
            </tr>
            <tr>
                <td>Property Type</td>
                <td>
                    <input type="radio" id="house" name="property_type" value="House" <?php if($property->getPropertyType() === 'House') echo 'checked'; ?>>
                    <label for="house">House</label><br>
                    <input type="radio" id="apartment" name="property_type" value="Apartment" <?php if($property->getPropertyType() === 'Apartment') echo 'checked'; ?>>
                    <label for="apartment">Apartment</label><br>
                    <input type="radio" id="other" name="property_type" value="Other" <?php if($property->getPropertyType() === 'Other') echo 'checked'; ?>>
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
                    <input type="checkbox" id="balcony" name="characteristics[]" value="Balcony" <?php if(in_array('Balcony', $property->getCharacteristics())) echo 'checked'; ?>>
                    <label for="balcony">Balcony</label><br>
                    <input type="checkbox" id="garage" name="characteristics[]" value="Garage" <?php if(in_array('Garage', $property->getCharacteristics())) echo 'checked'; ?>>
                    <label for="garage">Garage</label><br>
                    <input type="checkbox" id="pool" name="characteristics[]" value="Pool" <?php if(in_array('Pool', $property->getCharacteristics())) echo 'checked'; ?>>
                    <label for="pool">Pool</label><br>
                    <input type="checkbox" id="garden" name="characteristics[]" value="Garden" <?php if(in_array('Garden', $property->getCharacteristics())) echo 'checked'; ?>>
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
                        <option value="1" <?php if($property->getNumberOfRooms() === '1') echo 'selected'; ?>>1</option>
                        <option value="2" <?php if($property->getNumberOfRooms() === '2') echo 'selected'; ?>>2</option>
                        <option value="3" <?php if($property->getNumberOfRooms() === '3') echo 'selected'; ?>>3</option>
                        <option value="4" <?php if($property->getNumberOfRooms() === '4') echo 'selected'; ?>>4</option>
                        <option value="5" <?php if($property->getNumberOfRooms() === '5') echo 'selected'; ?>>5</option>
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
                <td>Price</td>
                <td><input type="text" name="price" id="price" placeholder="Input the price..." pattern="\d*" value="<?php echo $property->getPrice(); ?>"></td>
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
<!-- <div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_property" id="update_property" onsubmit="return validate();" action="index.php?page=controller_property&op=update">
        <h1>Modify Property</h1>
        <table border='0'>
            <tr>
                <td>Usuario: </td>
                <td><input type="text" id="usuario" name="usuario" placeholder="usuario" value="<?php echo $property['property'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_usuario" class="error">
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>Contraseña: </td>
                <td><input type="password" id="pass" name="pass" placeholder="contraseña" value="<?php echo $property['pass'];?>"/></td>
                <td><font color="red">
                    <span id="error_pass" class="error">
                        <?php
                            echo "$error_pass";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Nombre: </td>
                <td><input type="text" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $property['name'];?>"/></td>
                <td><font color="red">
                    <span id="error_nombre" class="error">
                        <?php
                            echo "$error_nombre";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>DNI: </td>
                <td><input type="text" id= "DNI" name="DNI" placeholder="DNI" value="<?php echo $property['dni'];?>"/></td>
                <td><font color="red">
                    <span id="error_DNI" class="error">
                        <?php
                            echo "$error_DNI";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Sexo: </td>
                <td>
                    <?php
                        if ($property['sex']==="Hombre"){
                    ?>
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre" checked/>Hombre
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer"/>Mujer
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Hombre"/>Hombre
                        <input type="radio" id="sexo" name="sexo" placeholder="sexo" value="Mujer" checked/>Mujer
                    <?php   
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_sexo" class="error">
                        <?php
                            echo "$error_sexo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Fecha de nacimiento: </td>
                <td><input id="fecha" type="text" name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?php echo $property['birthdate'];?>"/></td>
                <td><font color="red">
                    <span id="error_fecha_nacimiento" class="error">
                        <?php
                            echo "$error_fecha_nacimiento";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Edad: </td>
                <td><input type="text" id="edad" name="edad" placeholder="edad" value="<?php echo $property['age'];?>"/></td>
                <td><font color="red">
                    <span id="error_edad" class="error">
                        <?php
                            echo "$error_edad";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>
            
            <tr>
                <td>Pais: </td>
                <td><select id="pais" name="pais" placeholder="pais">
                    <?php
                        if($property['country']==="España"){
                    ?>
                        <option value="España" selected>España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }elseif($property['country']==="Portugal"){
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal" selected>Portugal</option>
                        <option value="Francia">Francia</option>
                    <?php
                        }else{
                    ?>
                        <option value="España">España</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Francia" selected>Francia</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_pais" class="error">
                        <?php
                            echo "$error_pais";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Idioma: </td>
                <?php
                    $lang=explode(":", $property['language']);
                ?>
                <td><select multiple size="3" id="idioma[]" name="idioma[]" placeholder="idioma">
                    <?php
                        $busca_array=in_array("Español", $lang);
                        if($busca_array){
                    ?>
                        <option value="Español" selected>Español</option>
                    <?php
                        }else{
                    ?>
                        <option value="Español">Español</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Ingles", $lang);
                        if($busca_array){
                    ?>
                        <option value="Ingles" selected>Ingles</option>
                    <?php
                        }else{
                    ?>
                        <option value="Ingles">Ingles</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Portugues", $lang);
                        if($busca_array){
                    ?>
                        <option value="Portugues" selected>Portugues</option>
                    <?php
                        }else{
                    ?>
                        <option value="Portugues">Portugues</option>
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Frances", $lang);
                        if($busca_array){
                    ?>
                        <option value="Frances" selected>Frances</option>
                    <?php
                        }else{
                    ?>
                        <option value="Frances">Frances</option>
                    <?php
                        }
                    ?>
                    </select></td>
                <td><font color="red">
                    <span id="error_idioma" class="error">
                        <?php
                            echo "$error_idioma";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Observaciones: </td>
                <td><textarea cols="30" rows="5" id="observaciones" name="observaciones" placeholder="observaciones"><?php echo $property['comment'];?></textarea></td>
                <td><font color="red">
                    <span id="error_observaciones" class="error">
                        <?php
                            echo "$error_observaciones";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>Aficiones: </td>
                <?php
                    $afi=explode(":", $property['hobby']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("Informatica", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Informatica" checked/>informatica
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Informatica"/>informatica
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Alimentacion", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Alimentacion" checked/>alimentacion
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Alimentacion"/>alimentacion
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("Automovil", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "aficion[]" name="aficion[]" value="Automovil" checked/>automovil</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "aficion[]" name="aficion[]" value="Automovil"/>automovil</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_aficion" class="error">
                        <?php
                            echo "$error_aficion";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a class="backbutton" href="index.php?page=controller_property&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div> -->