<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    /* Make the footer span the entire screen */
    #footer {
        margin-top: 40px;
        margin-bottom: 20px;
    width: 1500px;
      display: flex;     /* Flexbox for alignment */
      align-items: center; /* Center content vertically */
      justify-content: center; /* Center content horizontally */
    }
    .footer .container {
      max-width: 100%; /* Stretch container width */
    }
  </style>
</head>
<body>
  <!-- Footer Section -->
<footer class="footer bg-dark text-white py-5" id="footer">
  <div class="container">
    <div class="row">
      <!-- About Us -->
      <div class="col-md-3 col-sm-6 text-lg-start text-center mb-4">
        <a class="navbar-brand d-block mb-3" href="#">
          <img src="img/logo.png" alt="Logo" height="60px">
        </a>
        <h5 class="mt-3">About Information Systems</h5>
        <p>Explore the power of technology and how information systems help businesses and organizations thrive.</p>
      </div>
      <!-- Services -->
      <div class="col-md-3 col-sm-6 text-lg-start text-center mb-4">
        <h5>Our Information Systems Services</h5>
        <ul class="list-unstyled">
          <li><a class="text-light text-decoration-none" href="#">System Design</a></li>
          <li><a class="text-light text-decoration-none" href="#">Data Analysis</a></li>
          <li><a class="text-light text-decoration-none" href="#">Cloud Solutions</a></li>
          <li><a class="text-light text-decoration-none" href="#">Cybersecurity Solutions</a></li>
          <li><a class="text-light text-decoration-none" href="#">IT Support</a></li>
        </ul>
      </div>
      <!-- Contact Us -->
      <div class="col-md-3 col-sm-6 text-lg-start text-center mb-4">
        <h5>Contact Us</h5>
        <p>123 Technology Lane,<br>Tech City, Country</p>
        <p>Email: <a class="text-light text-decoration-none" href="mailto:info@infosys.com">info@infosys.com</a><br>
           Phone: <a class="text-light text-decoration-none" href="tel:+1234567890">+1234567890</a>
        </p>
      </div>
      <!-- Newsletter -->
      <div class="col-md-3 col-sm-6 text-lg-start text-center">
        <h5>Stay Updated</h5>
        <form>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email" aria-describedby="subscribe-button">
            <button class="btn btn-outline-light" type="button" id="subscribe-button">Subscribe</button>
          </div>
        </form>
        <p>Get the latest news about Information Systems and tech trends.</p>
      </div>
    </div>
  </div>
</footer>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
