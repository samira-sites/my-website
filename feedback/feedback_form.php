<?php include "config.php"; ?>

<?php
include "config.php";

$result = $conn->query("SELECT * FROM feedbacks ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h4>" . $row['name'] . " (Rating: " . $row['rating'] . ")</h4>";
    echo "<p>" . $row['feedback'] . "</p>";
    echo "</div>";
}
?>

