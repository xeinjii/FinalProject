<?php
session_start();
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute delete query
    $sql = "DELETE FROM persontb WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id, $_SESSION['user_id']);

    if ($stmt->execute()) {
        $_SESSION['status'] = "Person deleted successfully.";
    } else {
        $_SESSION['status'] = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page
    header("Location: crud.php");
    exit();
} else {
    $_SESSION['status'] = "Invalid request.";
    header("Location: crud.php");
    exit();
}
?>
