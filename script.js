// script.js
document.addEventListener('DOMContentLoaded', function() {
    const profilePicture = document.querySelector('.profile-picture');
    
    profilePicture.addEventListener('mouseenter', function() {
        profilePicture.src = 'new-profile-picture.jpg'; // Replace with your actual new profile picture
    });
    
    profilePicture.addEventListener('mouseleave', function() {
        profilePicture.src = 'placeholder.jpg'; // Replace with your placeholder image
    });
});
