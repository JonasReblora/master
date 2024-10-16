<?php include "../templates/header.php"; ?>
    
    <h2>Contact me</h2>
    <form id="contactForm">
        <label for="name">Name: </label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email: </label><br>
        <input type="text" id="email" name="email" required><br><br>
        <label for="msg">Message: </label><br>
        <textarea name="message" id="message" required></textarea><br><br>
        <button type="submit">Send</button>
    </form>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event)) {
            event.preventDefault();

            const formData = {
                name:document.getElementById('name').value,
                email:document.getElementById('email').value,
                msg:document.getElementById('msg').value
            };
        };
    </script>

<?php include "../templates/footer.php"; ?>