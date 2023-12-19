<?php
// $data = 'Contoller property OK';
// die('<script>console.log('.json_encode( $data ) .');</script>');

include("module/property/model/DAOProperty.php");
// session_start();

switch ($_GET['op']) {
    case 'list';
        // $data = 'Contoller property OK';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        try {
            $daoproperty = new DAOProperty();
            $rdo = $daoproperty->select_all_property();
            // die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>'); Result: 21. It works!
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/property/view/list_property.php");
        }
        break;

    case 'create';
        // $data = 'Create property OK';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        include("module/property/model/validate.php");

        $check = true;

        if (isset($_POST['create'])) {
            // $data = 'hola create post property';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            $check = validate();
            //die('<script>console.log('.json_encode( $check ) .');</script>');

            if ($check) {
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                try {
                    $daoproperty = new DAOproperty();
                    $rdo = $daoproperty->insert_property($_POST);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                } catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Creado en la base de datos correctamente");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_property&op=list";
                        }, 2000);</script>';
                } else {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        }
        include("module/property/view/create_property.php");
        break;

    case 'update';
        include("module/property/model/validate.php");
        $check = true;

        if (isset($_POST['update'])) {
            // $data = 'hola update post property';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            $check = validate();
            //die('<script>console.log('.json_encode( $check ) .');</script>');

            if ($check) {
                //die('<script>console.log('.json_encode( $_POST ) .');</script>');
                try {
                    $daoproperty = new DAOproperty();
                    $rdo = $daoproperty->update_property($_POST);
                    //die('<script>console.log('.json_encode( $rdo ) .');</script>');
                } catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Modificado en la base de datos correctamente");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_property&op=list";
                        }, 2000);</script>';
                } else {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            } else {
                echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_property&op=list";
                    }, 2000);</script>';
            }
        }

        try {
            $daoproperty = new DAOproperty();
            $rdo = $daoproperty->select_property($_GET['id']);
            $property = get_object_vars($rdo);
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/property/view/update_property.php");
        }
        break;

    case 'read';
        // $data = 'hola crtl property read';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

        try {
            $daoproperty = new DAOproperty();
            $rdo = $daoproperty->select_property($_GET['id']);
            $property = get_object_vars($rdo);
            //die('<script>console.log('.json_encode( $property ) .');</script>');
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/property/view/read_property.php");
        }
        break;

    case 'delete';
        // $data = 'hola crtl property delete';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

        if (isset($_POST['delete'])) {
            //die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
            try {
                $daoproperty = new DAOproperty();
                $rdo = $daoproperty->delete_property($_GET['id']);
            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Borrado en la base de datos correctamente");
                    }, 1000);</script>';
                echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_property&op=list";
                    }, 2000);</script>';
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }

        include("module/property/view/delete_property.php");
        break;
    default;
        include("view/inc/error404.php");
        break;
}
