<?php
// $data = 'Contoller property OK';
// die('<script>console.log('.json_encode( $data ) .');</script>');
// $env = parse_ini_file('C:/sites/.env.ini');
$path = $_SERVER['DOCUMENT_ROOT'];
// echo '<script>console.log('.json_encode( $path ) .');</script>';
include($path . "/module/property/model/DAOProperty.php");
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
        $rdo = "";
        $check = true;

        if ($_POST) {
            // $data = 'Create post property OK';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            $check = validate();
            // die('<script>console.log('.json_encode( $check ) .');</script>'); It's true.

            if ($check) {
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');List the data of the form OK.
                try {
                    $daoproperty = new DAOproperty();
                    $rdo = $daoproperty->insert_property($_POST);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                } catch (Exception $e) {
                    // $callback = 'index.php?page=503';
                    // die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                            toastr.success("New register created correctly.");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_property&op=list";
                        }, 2000);</script>';
                } else {
                    // $callback = 'index.php?page=503';
                    // die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        }else{
            include("module/property/view/create_property.php");
        }
        break;

    case 'update';
        // $data = 'Update property OK';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        include("module/property/model/validate.php");
        $check = true;

        if ($_POST) {
            // $data = 'Update post property OK';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            $check = validate_update();
            // die('<script>console.log('.json_encode( $check ) .');</script>');

            if ($check) {
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                try {
                    $daoproperty = new DAOproperty();
                    $rdo = $daoproperty->update_property($_POST);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>'); //Resultado es true. Query correcta.
                    // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');
                    if ($rdo) {
                        echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Record modified correctly in the database.");
                            }, 1000);</script>';
                        echo '<script language="javascript">setTimeout(() => {
                                window.location.href="index.php?page=controller_property&op=list";
                            }, 2000);</script>';
                    } else {
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="' . $callback . '";</script>');
                    }
                } catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }elseif ($_POST['cadastral_reference_old'] === $_POST['cadastral_reference']){
                $dao_property = new DAOProperty();
                $rdo = $dao_property->update_property_new($_POST);
                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Record modified correctly in the database.");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_property&op=list";
                        }, 2000);</script>';
                } else {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }else{
                echo '<script language="javascript">setTimeout(() => {
                    toastr.error("The cadastral reference number cannot be repeated.");
                    }, 1000);</script>';
                echo '<script language="javascript">setTimeout(() => {
                    window.location.href="index.php?page=controller_property&op=list";
                }, 2000);</script>';
            }
        } else {
            try {
                $daoproperty = new DAOproperty();
                $rdo = $daoproperty->select_property($_GET['id']);
                // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                if ($rdo) {
                    $property = get_object_vars($rdo);
                }
                // die('<script>console.log('.json_encode( $property ) .');</script>');

            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            if ($rdo) {
                include("module/property/view/update_property.php");
            }
        }
        break;

    case 'read';
        // $data = 'Property read OK';
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
        // $data = 'Property delete OK';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id'] ) .');</script>');

        if ($_POST) {
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
                        toastr.success("Deleted record correctly in the database.");
                    }, 1000);</script>';
                echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_property&op=list";
                    }, 2000);</script>';
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        } else {
            try {
                $daoproperty = new DAOproperty();
                $rdo = $daoproperty->select_property($_GET['id']);
                // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                if ($rdo) {
                    $property = get_object_vars($rdo);
                }
                // die('<script>console.log('.json_encode( $property ) .');</script>');

            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            include("module/property/view/delete_property.php");
        }
        break;
    case 'delete_all';

        if ($_POST) {
            try {
                $dao_property = new DAOProperty();
                $rdo = $dao_property->delete_all_property();
            } catch (Exception $e) {
                $callback = 'index.php?page=controller_property&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                    toastr.success("List of properties deleted correctly.");
                }, 1000);</script>';
                $callback = 'index.php?page=controller_property&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=controller_property&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }

        include("module/property/view/delete_all_property.php");
        break;

    case 'dummies';

        if ($_POST) {
            try {
                $dao_property = new DAOProperty();
                $rdo = $dao_property->dummies_property();
            } catch (Exception $e) {
                $callback = 'index.php?page=controller_property&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                    toastr.success("Dummies added correctly.");
                }, 1000);</script>';
                $callback = 'index.php?page=controller_property&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=controller_property&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        }

        include("module/property/view/dummies_property.php");
        break;

    case 'read_modal':
        // echo $_GET["modal"];//Referencia catastral recojida por URL. 
        // exit;

        try{
            $daoproperty = new DAOProperty();
            $rdo = $daoproperty->select_property($_GET['modal']);
        }catch (Exception $e){
            echo json_encode("error");
            exit;
        }
        if(!$rdo){
            echo json_encode("error");
            exit;
        }else{
            $property=get_object_vars($rdo);
            echo json_encode($property);
            //echo json_encode("error");
            exit;
        }
        break;
    default;
        include("view/inc/error404.php");
        break;
}
