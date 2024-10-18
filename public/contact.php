<?php include '../templates/header.php'; ?>

<h2>Contact me</h2>
<form id="contactForm">
    <label for="name">Name: </label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email: </label><br>
    <input type="text" id="email" name="email" required><br><br>
    <label for="msg">Message: </label><br>
    <textarea name="msg" id="msg" required></textarea><br><br>
    <button type="submit">Send</button>
</form>

<script> // AJAX - Updates
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); //Prevents form for sending default

    console.log("Form submitted");

    fetch('/api/contact/', { 
        method: "POST",
        body: JSON.stringify({
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            msg: document.getElementById('msg').value
        }),
        headers: {
            'Content-Type': 'application/json' // Specify content
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`)
        }
        return response.json();
    })
    .then(data => {
        document.body.innerHTML = `<h1>${data.message}</h1>`; // Show if success
    })
    .catch(error => console.error('Error', error));
});
</script>
<script src="../js/contact.js"></script>

<?php include '../templates/footer.php'; ?>