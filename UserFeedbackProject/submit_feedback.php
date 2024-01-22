<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);
    
    $content = "Name: $name\nEmail: $email\nFeedback: $feedback\n\n";
    file_put_contents("feedback.txt", $content, FILE_APPEND);
    echo "Thank you for your feedback!";
}
?>
