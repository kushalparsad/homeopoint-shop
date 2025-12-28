<!DOCTYPE html>
<html>
<head>
    <title>Homeo-Point Orders</title>
    <style>
        body { font-family: Arial; margin: 20px; background: #f4f7fb; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #065f9b; color: white; }
        .new-order { background: #e8f5e8; }
        a { color: #065f9b; text-decoration: none; }
    </style>
</head>
<body>
    <h1>🛒 Homeo-Point New Orders</h1>
    <a href="../index.php">← Back to Website</a>
    
    <?php
    require "config.php";
    $result = $conn->query("SELECT * FROM orders ORDER BY created_at DESC");
    
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Phone</th><th>Medicines</th><th>Address</th><th>Date</th></tr>";
        
        while($row = $result->fetch_assoc()) {
            $class = ($row['id'] % 2 == 0) ? 'new-order' : '';
            echo "<tr class='$class'>";
            echo "<td><strong>#{$row['id']}</strong></td>";
            echo "<td>{$row['name']}</td>";
            echo "<td><a href='tel:{$row['phone']}'>{$row['phone']}</a></td>";
            echo "<td>{$row['medicines']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['created_at']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No orders yet. Share your website! 📱</p>";
    }
    $conn->close();
    ?>
</body>
</html>
