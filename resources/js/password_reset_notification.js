
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('resetPasswordButton').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Show the notification
        showNotification("The service is currently unavailable. Please try again later.");
    });
});

// Function to show a notification
function showNotification(message) {
    // Create a new div element
    var notification = document.createElement('div');
    notification.className = 'alert alert-danger'; // Add classes for styling
    notification.setAttribute('role', 'alert');
    notification.textContent = message;

    // Append the notification to the document body
    document.body.appendChild(notification);

    // Remove the notification after a certain duration (5 seconds)
    setTimeout(function() {
        document.body.removeChild(notification);
    }, 5000); // the duration (in milliseconds)
}
