<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Bootstrap</title>
  <link rel="stylesheet" href="style/style.ccs">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">INFORMATION SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-success text-white me-3" href="crud.php">
              <i class='bx-fw bx bx-plus-circle'></i> Add new person
            </a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class='bx-fw bx bx-log-out'></i> Log out
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
<div class="pic-container">
  <div class="container text-center text-white">
    <h1>Information Systems</h1>
    <p>
      Information systems integrate technology, people, and processes to manage and analyze data efficiently. 
      They play a crucial role in decision-making, business operations, and driving innovation in today's digital era.
    </p>
    <a class="btn btn-primary" href="crud.php">Explore More</a>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
</script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
