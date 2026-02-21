<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);
    $rating = intval($_POST['rating']);

    if (!empty($feedback) && $rating>=1 && $rating<=5) {
        $stmt = $conn->prepare("INSERT INTO feedbacks (name, feedback, rating) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $name, $feedback, $rating);
        $stmt->execute();
        $stmt->close();
        echo "Thank you for your feedback!";
    } else {
        echo "Please provide feedback and a rating!";
    }
}
?>
