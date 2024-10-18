<?php include "../templates/header.php"; ?>
    
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

    const formData = new formData();
    formData.append('name', document.getElementById('name').value);
    formData.append('email', document.getElementById('email').value);
    formData.append('msg', document.getElementById('msg').value);

    fetch('/contact/', { 
        method: "POST",
        body: JSON.stringify({
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            msg: document.getElementById('msg').value
        }),
        headers: {
            'Content-Type': 'Application/json' // Specify content
        }
    })
    .then(response => response.json()) // Get the response from PHP
    .then(data => {
        document.body.innerHTML = data; // then replace the current content with response
    })
    .catch(error => console.error('Error', error));
});
</script>

<?php include "../templates/footer.php"; ?>