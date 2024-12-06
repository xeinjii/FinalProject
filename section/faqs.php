<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      color: #333;
    }

    /* FAQ Section Styling */
    .faq {
      background: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      min-height: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .faq h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #004aad;
    }

    .faq p {
      font-size: 1rem;
      color: #666;
    }

    .accordion-button {
      font-weight: 600;
      background-color: #004aad;
      color: #ffffff;
      border-radius: 5px;
      border: none;
      padding: 15px;
      transition: background-color 0.3s;
    }

    .accordion-button:hover {
      background-color: #003580;
    }

    .accordion-button.collapsed {
      background-color: #f4f4f4;
      color: #333;
    }

    .accordion-body {
      font-size: 0.95rem;
      color: #444;
      background-color: #f8f8f8;
      border-radius: 5px;
      padding: 20px;
    }
  </style>
</head>

<body>
<!-- FAQs Section -->
<section class="faq py-5 mx-3">
  <div class="container py-4">
    <!-- FAQ Header -->
    <div class="text-center mb-5">
      <h2>Frequently Asked Questions About Information Systems</h2>
      <p>Your top questions about information systems answered</p>
    </div>

    <!-- FAQ Accordion -->
    <div class="accordion" id="accordionExample">
      <!-- Accordion Item #1 -->
      <div class="accordion-item border-0">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            What is an Information System?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            An information system (IS) is a set of interrelated components working together to collect, process, store, and disseminate information to support decision-making and organizational activities.
          </div>
        </div>
      </div>

      <!-- Accordion Item #2 -->
      <div class="accordion-item border-0">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            How do information systems benefit businesses?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Information systems improve business efficiency by streamlining processes, enhancing communication, supporting data-driven decision-making, and facilitating real-time access to crucial data and insights.
          </div>
        </div>
      </div>

      <!-- Accordion Item #3 -->
      <div class="accordion-item border-0">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            What types of information systems are there?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Common types of information systems include Transaction Processing Systems (TPS), Management Information Systems (MIS), Decision Support Systems (DSS), and Executive Information Systems (EIS).
          </div>
        </div>
      </div>

      <!-- Accordion Item #4 -->
      <div class="accordion-item border-0">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            How does cybersecurity relate to information systems?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Cybersecurity protects the information systems from unauthorized access, attacks, or damage to the data and systems. It is vital for maintaining the confidentiality, integrity, and availability of information.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
