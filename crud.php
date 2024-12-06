<?php
session_start();
include("config.php");

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Sanitize and validate form data
    $Name = htmlspecialchars(trim($_POST['Name']));
    $Gender = $_POST['Gender'];
    $PhoneNumber = htmlspecialchars(trim($_POST['PhoneNumber']));

    // Prepare the SQL query using prepared statements
    $sql = "INSERT INTO persontb (Name, Gender, PhoneNumber, user_id, added_at) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the parameters
        $stmt->bind_param("sssi", $Name, $Gender, $PhoneNumber, $user_id);

        // Execute the query
        if ($stmt->execute()) {
            $_SESSION['status'] = "Person added successfully.";
        } else {
            $_SESSION['status'] = "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();

        // Redirect to avoid duplicate submissions on refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $_SESSION['status'] = "Error preparing the query: " . $conn->error;
    }
}

// Fetch records from the database for the logged-in user
$sql = "SELECT * FROM persontb WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Close the statement
$stmt->close();
?>
<?php
// Existing PHP code...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CRUD</title>
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
                    <a class="btn btn-secondary me-3" href="index.php"><i class='bx-fw bx bx-arrow-back'></i>Back</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-success me-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class='bx-fw bx bx-plus-circle'></i>Add Person
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav><br><br><br>

<div class="container">
    <table class="table table-hover text-center">
        <thead>
            <tr class="bg-primary text-white">
                <th>Name</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Added At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= htmlspecialchars($row['Name']); ?></td>
                    <td><?= htmlspecialchars($row['Gender']); ?></td>
                    <td><?= htmlspecialchars($row['PhoneNumber']); ?></td>
                    <td><?= $row['added_at']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?= $row['id']; ?>" data-name="<?= htmlspecialchars($row['Name']); ?>">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="deletePersonName"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteButton" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding a Person (unchanged) -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Person</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Gender" class="form-label">Gender</label>
                        <select class="form-select" id="Gender" name="Gender" required>
                            <option selected disabled>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="PhoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="PhoneNumber" name="PhoneNumber" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Populate the delete modal with dynamic data
    const deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const personId = button.getAttribute('data-id');
        const personName = button.getAttribute('data-name');

        const deletePersonName = document.getElementById('deletePersonName');
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');

        deletePersonName.textContent = personName;
        confirmDeleteButton.href = `delete.php?id=${personId}`;
    });
</script>
</body>
</html>
