<div id="contenido">
    <div class="container">
        <div class="row">
            <h3>LISTA DE VIVIENDAS</h3>
        </div>
        <div class="row">
            <p><a href="index.php?page=controller_property&op=create"><img src="view/img/anadir.png"></a></p>
            <table>
                <tr>
                    <th width=125><b>Cadastral Reference</b></th>
                    <th width=125><b>Square Meters</b></th>
                    <th width=125><b>Property Type</b></th>
                    <th width=125><b>Number of Rooms</b></th>
                    <th width=125><b>Comment</b></th>
                    <th width=125><b>Characteristics</b></th>
                    <th width=125><b>Date of Publication</b></th>
                    <th width=125><b>Price</b></th>
                    <th width=350><b>Action</b></th>
                </tr>
                <?php
                if ($rdo->num_rows === 0) {
                    echo '<tr>';
                    echo '<td align="center" colspan="8">No Properties Found</td>';
                    echo '</tr>';
                } else {
                    foreach ($rdo as $row) {
                        echo '<tr>';
                        echo '<td width=125>' . $row['cadastral_reference'] . '</td>';
                        echo '<td width=125>' . $row['square_meters'] . '</td>';
                        echo '<td width=125>' . $row['property_type'] . '</td>';
                        echo '<td width=125>' . $row['number_of_rooms'] . '</td>';
                        echo '<td width=125>' . $row['comment'] . '</td>';
                        echo '<td width=125>' . $row['characteristics'] . '</td>';
                        echo '<td width=125>' . $row['date_publication'] . '</td>';
                        echo '<td width=125>' . $row['price'] . '</td>';
                        echo '<td width=350>';
                        echo '<a class="Button_blue" href="index.php?page=controller_property&op=read&id=' . $row['cadastral_reference'] . '">Read</a>';
                        echo '&nbsp;';
                        echo '<a class="Button_green" href="index.php?page=controller_property&op=update&id=' . $row['cadastral_reference'] . '">Update</a>';
                        echo '&nbsp;';
                        echo '<a class="Button_red" href="index.php?page=controller_property&op=delete&id=' . $row['cadastral_reference'] . '">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>