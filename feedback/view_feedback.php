<?php
include "config.php";

$result = $conn->query("SELECT * FROM feedbacks ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #ffbd59; }
    </style>
</head>
<body>

<h2>Visitor Feedback</h2>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Feedback</th>
    <th>Rating</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['feedback']; ?></td>
    <td><?php echo $row['rating']; ?> ★</td>
    <td><?php echo $row['created_at']; ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
