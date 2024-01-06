<div id="contenido">
    <form autocomplete="on" method="post" name="delete_all_property" id="delete_all_property">
        <table border='0'>
            <tr>
                <th width=1500><h3 align="center">Are you sure you want to delete the entire list of properties?</h3></th>
                <input type="hidden" id="cadastral_reference" name="cadastral_reference" placeholder="cadastral_reference" value="<?php echo $property['id'];?>"/>
            </tr>
        </table>
        <table border='0'>
            <tr>
                <td width=680 align="center"><input name="Submit" type="button" class="Button_green" onclick="operations_property('delete_all')" value="Accept"/></td>
                <td width=680 align="center"><a class="Button_red" href="index.php?page=controller_property&op=list">Cancel</a></td>
            </tr>
        </table>
        <br>
        <br>
    </form>
</div>