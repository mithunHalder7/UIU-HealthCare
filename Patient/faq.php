<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FAQ Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for FAQ page -->
  <link rel="stylesheet" href="faq.css">

</head>

<body>


  <!-- Navbar (if you have one) -->

  <?php include '../Global_Components/PatientNavbar.php'; ?>

  <div class="container">
    <h1 class="mb-4 text-center">Frequently Asked Questions</h1>

    <div class="accordion" id="faqAccordion">
      <!-- FAQ Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Question 1: How to make an online appointment through the system?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <input type="text" class="form-control" placeholder="Follow the given path: Login->Appointment">
          </div>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Question 2: What services the university healthcare offers?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <input type="text" class="form-control" placeholder="Primary Treatment, Regular checkup,Basic Sugesstion">
          </div>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Question 3: What should I do in case of medical emergency?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <input type="text" class="form-control" placeholder="You just need to come our health center.We'll provide primary treatment first then other formalities.">
          </div>
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Question 4: What are the regular office hours for the doctors?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <input type="text" class="form-control" placeholder="Our service is available from 9:00 am to 4:30 pm on working days">
          </div>
        </div>
      </div>

      <!-- FAQ Item 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            Question 5: How much does it cost to visit a doctor at the university healthcare center?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            <input type="text" class="form-control" placeholder="It costs only 50 Taka">
          </div>
        </div>
      </div>




    </div>
  </div>
  <br>
  <br>
  <div class="footer text-center bg-custom-footer" style="width: 2050px;left: 0px;position: absolute;top: 868px;">
    <p>Powered by S.E.M.D <br>&copy; 2023 United International University. <br>All rights reserved.</p>
  </div>

  <!-- Bootstrap JS and Popper.js (required for Bootstrap's JavaScript features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>