<?php
require_once dirname(__DIR__, 2) . '/configuration/config.php';

$result = $conn->query("SELECT * FROM feedbacks ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<h4>" . htmlspecialchars($row['name']) . " (Rating: " . htmlspecialchars($row['rating']) . ")</h4>";
    echo "<p>" . htmlspecialchars($row['feedback']) . "</p>";
    echo "</div>";
}
?>