function validate_cadastral_reference(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_square_meters(texto) {
    if (texto.length > 0) {
        var reg = /^\d*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_property_type(array) {
    var i;
    var ok = 0;
    for (i = 0; i < array.length; i++) {
        if (array[i].checked) {
            ok = 1
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}

function validate_characteristics(array) {
    var i;
    var ok = 0;
    for (i = 0; i < array.length; i++) {
        if (array[i].checked) {
            ok = 1
        }
    }

    if (ok == 1) {
        return true;
    }
    if (ok == 0) {
        return false;
    }
}
function validate_number_of_rooms(texto) {
    if (texto !== "") {
        return true;
    }
    return false;
}

function validate_comment(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_date_publication(texto) {
    if (texto.length > 0) {
        return true;
    }
    return false;
}

function validate_price(texto) {
    if (texto.length > 0) {
        var reg = /^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}
function validate(op) {
    // console.log('Validate js OK');
    // return true;

    var check = true;

    var v_cadastral_reference = document.getElementById('cadastral_reference').value;
    // console.log(v_cadastral_reference);
    // return false;
    var v_cadastral_reference = document.getElementById('cadastral_reference').value;
    console.log('v_cadastral_reference:', v_cadastral_reference);

    var v_square_meters = document.getElementById('square_meters').value;
    console.log('v_square_meters:', v_square_meters);

    var v_property_type = document.getElementsByName('property_type');
    console.log('v_property_type:', v_property_type);

    var v_characteristics = document.getElementsByName('characteristics[]');
    console.log('v_characteristics:', v_characteristics);



    var v_price = document.getElementById('price').value;
    console.log('v_price:', v_price);
    var v_number_of_rooms = document.getElementById('number_of_rooms').value;
    console.log('v_number_of_rooms:', v_number_of_rooms);
    var v_comment = document.getElementById('comment').value;
    console.log('v_comment:', v_comment);
    var v_date_publication = document.getElementById('date_publication').value;
    console.log('v_date_publication:', v_date_publication);



    var r_cadastral_reference = validate_cadastral_reference(v_cadastral_reference);
    // console.log(r_cadastral_referenc);
    // return false;
    var r_square_meters = validate_square_meters(v_square_meters);
    var r_property_type = validate_property_type(v_property_type);
    var r_characteristics = validate_characteristics(v_characteristics);
    var r_number_of_rooms = validate_number_of_rooms(v_number_of_rooms);
    var r_comment = validate_comment(v_comment);
    var r_date_publication = validate_date_publication(v_date_publication);
    var r_price = validate_price(v_price);

    if (!r_cadastral_reference) {
        document.getElementById('error_cadastral_reference').innerHTML = " * The cadastral reference entered is not valid.";
        // console.log(r_cadastral_reference);
        // return false;
        check = false;
    } else {
        document.getElementById('error_cadastral_reference').innerHTML = "";
    }
    if (!r_square_meters) {
        document.getElementById('error_square_meters').innerHTML = " * The square meters entered are not valid.";
        check = false;
    } else {
        document.getElementById('error_square_meters').innerHTML = "";
    }

    if (!r_property_type) {
        document.getElementById('error_property_type').innerHTML = " * You have not selected any type of property.";
        check = false;
    } else {
        document.getElementById('error_property_type').innerHTML = "";
    }

    if (!r_characteristics) {
        document.getElementById('error_characteristics').innerHTML = " * You have not selected any characteristic.";
        check = false;
    } else {
        document.getElementById('error_characteristics').innerHTML = "";
    }

    if (!r_number_of_rooms) {
        document.getElementById('error_number_of_rooms').innerHTML = " * You have not selected the number of rooms.";
        check = false;
    } else {
        document.getElementById('error_number_of_rooms').innerHTML = "";
    }

    if (!r_comment) {
        document.getElementById('error_comment').innerHTML = " * The comment entered is invalid.";
        check = false;
    } else {
        document.getElementById('error_comment').innerHTML = "";
    }

    if (!r_date_publication) {
        document.getElementById('error_date_publication').innerHTML = " * You have not entered a publication date.";
        check = false;
    } else {
        document.getElementById('error_date_publication').innerHTML = "";
    }

    if (!r_price) {
        document.getElementById('error_price').innerHTML = " * The price entered is not valid.";
        check = false;
    } else {
        document.getElementById('error_price').innerHTML = "";
    }
    // document.getElementById('cadastral_reference').addEventListener('input', function() {
    //     document.getElementById('updateForm').action = 'index.php?page=controller_property&op=update&id=' + encodeURIComponent(this.value);
    // });

    //return check;
    if (check) {
        // console.log('Check true OK');
        // return true;
        if (op == 'create') {
            // console.log('create js OK');
            // return true;
            document.getElementById('alta_property').submit();
            document.getElementById('alta_property').action = "index.php?page=controller_property&op=create";
        }
        if (op == 'update') {
            // console.log('update js OK');
            // return true;
            document.getElementById('update_property').submit();
            document.getElementById('update_property').action = "index.php?page=controller_property&op=update";
        }
    }
}
function operations_property(op) {
    if (op == 'delete') {
        document.getElementById('delete_property').submit();
        document.getElementById('delete_property').action = "index.php?page=controller_property&op=delete";
    }
    if (op == 'delete_all') {
        document.getElementById('delete_all_property').submit();
        document.getElementById('delete_all_property').action = "index.php?page=controller_property&op=delete_all";
    }
    if (op == 'dummies') {
        document.getElementById('dummies_property').submit();
        document.getElementById('dummies_property').action = "index.php?page=controller_property&op=dummies";
    }
}

function showModal(title_Property, id , $property) {
    var cadastral_reference = $property['cadastral_reference'];
    $("#details_property").show();
    $("#property_modal").dialog({
        title: 'Details of property ' + id,
        width: $(window).width() * 0.25,  
        height: $(window).height() * 0.70,
        closeText: "",
        resizable: "false",
        modal: "true",
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        },
        buttons : {
            Update: function() {
                        window.location.href = 'index.php?page=controller_property&op=update&id=' + cadastral_reference;
                    },
            Delete: function() {
                        window.location.href = 'index.php?page=controller_property&op=delete&id=' + cadastral_reference;
                    }
        }
    });
}
function contentThen(data){
    $('<table></table>').attr('id', 'details_property').appendTo('#property_modal');
    $('<tbody></tbody>').attr('id', 'container').appendTo('#details_property');
    $('#container').empty();
    for (row in data) {
        $('<tr></tr>').html('<td>' + row + '</td><td id=' + row + '>' + data[row] + '</td>').appendTo('#container');
    }
    showModal(data.brand + " " + data.model, data.id, data);
}
function loadContentModal() {
    $('.cadastral_reference').click(function () {
        var id = this.getAttribute('id');
        ajaxPromise('GET', 'JSON','module/property/controller/controller_property.php?op=read_modal&modal=' + id, )
        .then(function(data) {
            contentThen(data);
        })
        .catch(function(error) {
            console.log("Error", error);
            window.location.href = 'index.php?page=503';
        });
    });
}

$(document).ready(function() {
    loadContentModal();
});