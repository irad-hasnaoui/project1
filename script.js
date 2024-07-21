document.addEventListener('DOMContentLoaded', function() {
    const messageElement = document.getElementById('message');
    const button = document.getElementById('change-message-btn');

    const messages = [
        "hello!",
        "i sent the project github url.",
        "what the project needed.",
        "Cliquez sur le bouton sent"
    ];

    button.addEventListener('click', function() {
        const randomIndex = Math.floor(Math.random() * messages.length);
        messageElement.textContent = messages[randomIndex];
    });
});