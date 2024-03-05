document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('uploadForm').addEventListener('submit', function(e) {
        e.preventDefault();
        // Handling form submission
        console.log('Form submitted!');
        // You can add further actions here, like sending the data to a server or displaying a success message
    });
});

