<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['msg'];

    // Temp
    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have recieved your message and will contact you soon.</p>";
    }
?>