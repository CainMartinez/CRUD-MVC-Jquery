<div id="contenido" class="centered-content">
    <form autocomplete="on" method="post" name="delete_property" id="delete_property">
        <table border='0'>
            <tr>
                <td align="center" colspan="2"><p style="font-size: 20px;">Are you sure you want to delete the property with cadastral reference <b><?php echo $_GET['id']; ?></b>, property type <b><?php echo $property['property_type']; ?></b> and with a price of <b><?php echo $property['price']; ?></b> ?</p></td>
                <input type="hidden" name="cadastral_reference" value="<?php echo $_GET['id']; ?>">
            </tr>
            <tr>
                <td align="center"><input type="button" class="styled-button styled-button-green" name="Submit" onclick="operations_property('delete')" value="Yes, delete it"></input></td>
                <td align="center"><a class="styled-button styled-button-red" href="index.php?page=controller_property&op=list">Cancel</a></td>
            </tr>
        </table>
    </form>
</div>