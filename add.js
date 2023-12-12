document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[name="form1"]');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Detiene la acción de envío del formulario

        const cadastralReference = document.querySelector('input[name="cadastral_reference"]').value;
        const squareMeters = document.querySelector('input[name="square_meters"]').value;
        const propertyType = document.querySelector('input[name="property_type"]:checked');
        const numberOfRooms = document.querySelector('select[name="number_of_rooms"]').value;
        const comment = document.querySelector('textarea[name="comment"]').value;
        const characteristics = Array.from(document.querySelectorAll('input[name="characteristics[]"]:checked')).map(cb => cb.value); // New field
        const price = document.querySelector('input[name="price"]').value; // New field

        if (!cadastralReference) {
            alert('Please enter a cadastral reference.');
        } else if (!squareMeters || isNaN(squareMeters)) {
            alert('Please enter a valid number for square meters.');
        } else if (!propertyType) {
            alert('Please select a property type.');
        } else if (!numberOfRooms || isNaN(numberOfRooms)) {
            alert('Please enter a valid number for number of rooms.');
        } else if (!comment) {
            alert('Please enter a comment.');
        } else if (characteristics.length === 0) { // New check
            alert('Please select at least one characteristic.');
        } else if (!price || isNaN(price)) { // New check
            alert('Please enter a valid price.');
        } else {
            form.submit(); // Envía el formulario solo si todas las comprobaciones de validación son exitosas
        }
    });
});