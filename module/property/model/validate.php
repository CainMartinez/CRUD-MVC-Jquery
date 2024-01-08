<?php
function validate_cadastral_reference($cadastral_reference){
    $sql = "SELECT * FROM property WHERE cadastral_reference='$cadastral_reference'";

    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql)->fetch_object();
    connect::close($conexion);
    return $res;
}

function validate(){
    // $data = 'Validate php OK';
    // die('<script>console.log('.json_encode( $data ) .');</script>');

    $check = true;

    $cadastral_reference = $_POST['cadastral_reference'];
    $cadastral_reference = validate_cadastral_reference($cadastral_reference);

    if ($cadastral_reference !== null) {
        echo '<script language="javascript">setTimeout(() => {
                toastr.error("The cadastral reference number cannot be repeated.");
            }, 1000);</script>';
        $check = false;
    }

    return $check;
}
function validate_update(){
    $check = true;

    $cadastral_reference = $_POST['cadastral_reference'];
    $cadastral_reference = validate_cadastral_reference($cadastral_reference);

    if($cadastral_reference !== null){
        if($cadastral_reference !== $_POST['cadastral_reference_old']){
            $check = false;
        }
    }

    return $check;
}
