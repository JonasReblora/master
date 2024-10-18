<?php include '../templates/header.php'; ?>
<div class="contactMe">
    <h2>Contact Me</h2>
    <p>You can find me on these platforms:</p>

    <div class="social-link">
        <a href="https://Github.com/JonasReblora" target="_blank" class="social-icon">
            <img src="/imgs/github.png" alt="Github">
        </a>
        <a href="https://www.facebook.com/share/dkqqACwMgYTKPJYG/" target="_blank" class="social-icon">
            <img src="/imgs/facebook.png" alt="Facebook">
        </a>
        <a href="https://ph.linkedin.com/in/jonas-reblora-65195b308" target="_blank" class="social-icon">
            <img src="/imgs/linkedin.png" alt="LinkedIn">
        </a>
        
    </div>
    <h3>Email:</h3>
    <p>jonas.reblora.01@gmail.com</p>
</div>

<br><br><br>

<h2>for more details</h2>
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