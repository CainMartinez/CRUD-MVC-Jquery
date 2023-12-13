document.querySelector('form[name="form1"]').addEventListener('submit', function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Get form fields
    var cadastral_reference = document.querySelector('input[name="cadastral_reference"]');
    var square_meters = document.querySelector('input[name="square_meters"]');
    var price = document.querySelector('input[name="price"]');
    var comment = document.querySelector('textarea[name="comment"]');
    var date_publication = document.querySelector('input[name="date_publication"]');
    var number_of_rooms = document.querySelector('select[name="number_of_rooms"]');

    // Check for empty fields
    if (!cadastral_reference.value.trim() || !square_meters.value.trim() || !price.value.trim() || !comment.value.trim() || !date_publication.value.trim() || !number_of_rooms.value.trim()) {
        alert('Please fill in all fields.');
        return;
    }

    // Validate fields with regex
    var cadastral_reference_regex = /^[a-zA-Z0-9]*$/;
    var square_meters_regex = /^[0-9]*$/;
    var price_regex = /^[0-9]*$/;

    if (!cadastral_reference_regex.test(cadastral_reference.value)) {
        alert('Invalid cadastral reference.');
        return;
    }

    if (!square_meters_regex.test(square_meters.value)) {
        alert('Invalid square meters.');
        return;
    }

    if (!price_regex.test(price.value)) {
        alert('Invalid price.');
        return;
    }

    // If all validations pass, submit the form
    event.target.submit();
});