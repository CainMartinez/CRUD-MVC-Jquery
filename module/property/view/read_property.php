<div id="contenido">
    <h1>Property Information</h1>
    <p>
    <table border='2' class="contenidotable">
        <tr>
            <td class="contenidotd">Cadastral Reference: </td>
            <td class="contenidotd">
                <?php
                    echo $property['cadastral_reference'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td class="contenidotd">Square Meters: </td>
            <td class="contenidotd">
                <?php
                    echo $property['square_meters'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td class="contenidotd">Property Type: </td>
            <td class="contenidotd">
                <?php
                    echo $property['property_type'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td class="contenidotd">Characteristics: </td>
            <td class="contenidotd">
                <?php
                    echo $property['characteristics'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td class="contenidotd">Number of rooms: </td>
            <td class="contenidotd">
                <?php
                    echo $property['number_of_rooms'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td class="contenidotd">Publication Date: </td>
            <td class="contenidotd">
                <?php
                    echo $property['date_publication'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td class="contenidotd">Comment: </td>
            <td class="contenidotd">
                <?php
                    echo $property['comment'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td class="contenidotd">Price: </td>
            <td class="contenidotd">
                <?php
                    echo $property['price'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a class="backbutton" href="index.php?page=controller_property&op=list">Back</a></p>
</div>