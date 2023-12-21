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
function validate() {
    // console.log('Validate js OK');
    // return false;

    var check = true;

    var v_cadastral_reference = document.getElementById('cadastral_reference').value;
    console.log(v_cadastral_reference);
    return false;
    var v_square_meters = document.getElementById('square_meters').value;
    var v_property_type = document.getElementsByName('property_type');
    var v_characteristics = document.getElementsByName('characteristics[]');
    var v_number_of_rooms = document.getElementById('number_of_rooms').value;
    var v_comment = document.getElementById('coment').value;
    var v_date_publication = document.getElementById('fecha').value;
    var v_price = document.getElementById('price').value;


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

    return check;
}