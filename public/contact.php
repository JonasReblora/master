<?php include "../templates/header.php"; ?>
    
    <h2>Contact me</h2>
    <form action="#" method="POST">
        <label for="name">Name: </label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email: </label><br>
        <input type="text" id="email" name="email" required><br><br>
        <label for="msg">Message: </label><br>
        <textarea name="message" id="message" required></textarea><br><br>
        <button type="submit">Send</button>
    </form>

<?php include "../templates/footer.php"; ?>