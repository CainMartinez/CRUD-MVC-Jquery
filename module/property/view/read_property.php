<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Usuario: </td>
            <td>
                <?php
                    echo $property['property'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Contraseña: </td>
            <td>
                <?php
                    echo $property['pass'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Nombre: </td>
            <td>
                <?php
                    echo $property['name'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>DNI: </td>
            <td>
                <?php
                    echo $property['dni'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Sexo: </td>
            <td>
                <?php
                    echo $property['sex'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha de nacimiento: </td>
            <td>
                <?php
                    echo $property['birthdate'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Edad: </td>
            <td>
                <?php
                    echo $property['age'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>Pais: </td>
            <td>
                <?php
                    echo $property['country'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                    echo $property['language'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Observaciones: </td>
            <td>
                <?php
                    echo $property['comment'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Aficiones: </td>
            <td>
                <?php
                    echo $property['hobby'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_property&op=list">Volver</a></p>
</div>