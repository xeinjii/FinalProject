<?php
session_start();
include("config.php"); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $phoneNumber = $_POST['PhoneNumber'];
    $userId = 1; 

    
    $sql = "INSERT INTO persontb (Name, Gender, PhoneNumber, user_id, added_at) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    $stmt->bind_param("sssi", $name, $gender, $phoneNumber, $userId);

    if ($stmt->execute()) {
        // Redirect to the homepage with a success message
        header("Location: homepage.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
