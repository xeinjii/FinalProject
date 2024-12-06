<?php
session_start();
include("config.php");

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the current data for this person
    $sql = "SELECT * FROM persontb WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $person = $result->fetch_assoc();

    if (!$person) {
        $_SESSION['status'] = "Person not found!";
        header("Location: crud.php");
        exit;
    }

    // Update data if the form is submitted
    if (isset($_POST['submit'])) {
        $Name = htmlspecialchars(trim($_POST['Name']));
        $Gender = $_POST['Gender'];
        $PhoneNumber = htmlspecialchars(trim($_POST['PhoneNumber']));

        $update_sql = "UPDATE persontb SET Name = ?, Gender = ?, PhoneNumber = ? WHERE id = ? AND user_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("sssii", $Name, $Gender, $PhoneNumber, $id, $user_id);

        if ($update_stmt->execute()) {
            $_SESSION['status'] = "Person updated successfully!";
            header("Location: crud.php");
            exit;
        } else {
            echo "Error: " . $update_stmt->error;
        }

        $update_stmt->close();
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Edit Person</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="#">INFORMATION SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="crud.php">Back</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<div class="wrapper mt-5">
    <div class="title">Edit Person</div>
    <form action="" method="POST">
        <!-- Display alerts -->
        <div class="field">
            <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($person['Name']); ?>" required>
            <label for="Name">Name</label>
        </div>
        <div class="mt-3">
         <label for="select">Gender</label>
            <select class="form-select" id="Gender" name="Gender" required>
                <option value="Male" <?php echo $person['Gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                <option value="Female" <?php echo $person['Gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
            </select>
        </div>
        <div class="field mt-3">
            <input type="tel" id="PhoneNumber" name="PhoneNumber" value="<?php echo htmlspecialchars($person['PhoneNumber']); ?>" required>
            <label for="PhoneNumber">Phone Number</label>
        </div>
        <div class="field mt-4">
                <input type="submit" name="submit" value="Update" class="btn btn-primary w-100 mb-2">
                <a class="btn btn-secondary w-100 bb" href="crud.php">Cancel</a>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
