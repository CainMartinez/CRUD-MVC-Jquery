<div id="contenido" class="centered-content">
    <form autocomplete="on" method="post" name="delete_property" id="delete_property" action="index.php?page=controller_property&op=delete&id=<?php echo $_GET['id']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>Are you sure you want to delete the property with cadastral reference <?php echo $_GET['id']; ?>?</h3></td>
            </tr>
            <tr>
                <td align="center"><button type="submit" class="styled-button styled-button-green" name="delete" id="delete">Yes, delete it</button></td>
                <td align="center"><a class="styled-button styled-button-red" href="index.php?page=controller_property&op=list">Cancel</a></td>
            </tr>
        </table>
    </form>
</div>