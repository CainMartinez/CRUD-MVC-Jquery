<div id="contenido" class="property-list-container">
    <div class="container" >
    <table>
            <tr>
                <th><h2 align="center">ADD one record</h2><p align="center"><a href="index.php?page=controller_property&op=create" class="add-button"><i class="fas fa-plus"></i></a></p></th>
                <th><h2 align="center">ADD with Dummies</h2><p align="center"><a href="index.php?page=controller_property&op=dummies" class="add-button"><i class="fas fa-plus"></i></a></p></th>
                <th><h2 align="center">Delete All</h2><p align="center"><a href="index.php?page=controller_property&op=delete_all" class="add-button"><i class="fas fa-trash"></i></a></p></th>
            </tr>
        </table>
        <br>
        <div class="row title-row">
            <h1>Properties list</h1>
        </div>
        <div class="row title-row">
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
                        print ("<div class='cadastral_reference Button_blue' id='".$row['cadastral_reference']."'><i class='fas fa-eye'></i></div>");  //READ
                        // echo '<a class="Button_blue" href="index.php?page=controller_property&op=read&id=' . $row['cadastral_reference'] . '"><i class="fas fa-eye"></i></a>';
                        echo '&nbsp;';
                        echo '<a class="Button_green" href="index.php?page=controller_property&op=update&id=' . $row['cadastral_reference'] . '"><i class="fas fa-edit"></i></a>';
                        echo '&nbsp;';
                        echo '<a class="Button_red" href="index.php?page=controller_property&op=delete&id=' . $row['cadastral_reference'] . '"><i class="fas fa-trash"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<section id="property_modal">
    
</section>
