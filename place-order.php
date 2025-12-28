<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require "config.php";  // database connect

    $name      = trim($_POST['name'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $address   = trim($_POST['address'] ?? '');
    $medicines = trim($_POST['medicines'] ?? '');
    $note      = trim($_POST['note'] ?? '');

    // basic validation
    if ($name == '' || $phone == '' || $address == '' || $medicines == '') {
        echo "Required fields missing. Please go back and fill the form.";
        exit;
    }

    $sql = "INSERT INTO orders (name, phone, email, address, medicines, note)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        echo "Database error: " . $conn->error;
        exit;
    }

    $stmt->bind_param("ssssss", $name, $phone, $email, $address, $medicines, $note);

    if ($stmt->execute()) {
        echo "Order saved successfully. You can close this page and check phpMyAdmin.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

} else {
    header("Location: index.php#order");
    exit;
}
?>

