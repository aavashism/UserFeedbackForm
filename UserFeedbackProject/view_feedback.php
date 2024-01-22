<?php
$feedbackFile = 'feedback.txt';

// Check if the feedback file exists and is readable
if (file_exists($feedbackFile) && is_readable($feedbackFile)) {
    // Read the content of the file
    $feedbacks = file_get_contents($feedbackFile);

    // Convert the newlines to <br> tags for better web display
    $feedbacks = nl2br($feedbacks);

    echo "<h1>Feedbacks Received</h1>";
    echo "<div>$feedbacks</div>";
} else {
    echo "<h1>No feedbacks found or the file cannot be read.</h1>";
}
?>
