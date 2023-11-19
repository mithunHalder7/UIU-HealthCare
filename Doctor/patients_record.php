<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+8mkz5f5PlFf3Fiu12M2g2by5pBskYYgB5cE" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="patients_record.css">
  <title>Records</title>
</head>

<body>
  <?php include '../Global_Components/DoctorNavbar.php'; ?>
  <div class="container mt-4">
    <div class="input-group custom-input-group">
      <input type="text" class="form-control custom-input3" placeholder="Search for nearest hospitals" aria-label="Search for nearest hospitals" aria-describedby="search-icon-button">
      <button class="btn custom-button" type="button" id="search-icon-button">
        <i class="fas fa-search"></i>
      </button>
    </div>
  </div>
  <div class="container mt-4">
    <div class="d-flex flex-column ">
      <!-- Placeholder with label -->
      <div class="d-flex mb-2">
        <div class="me-2" style="width: 45%;">
          <label for="Name" class="custom-label">Name</label>
          <input id="password" class="form-control custom-input1" type="password" placeholder="">
        </div>
        <div style="width: 45%;">
          <label for="confirm-password">Age</label>
          <input id="confirm-password" class="form-control custom-input1" type="password" placeholder="">
        </div>
      </div>
      <div class="mb-2">
        <label for="username">Weight</label>
        <input id="username" class="form-control custom-input2" type="text" placeholder="">
      </div>
      <!-- Two placeholders side by side with labels -->

      <!-- Your three input fields are now placed under the navbar -->
    </div>
    <hr class="horizontal-line">
  </div>
  <div class="container mt-4">
    <h6 for="">Last Consultation Date: 05/10/23</h6>
  </div>

  <div class="container mt-4">
    <div class="mb-2">
      <label for="username">Medicine</label>
      <input id="username" class="form-control custom-input4" type="text" placeholder="">
    </div>
    <div class="mb-2">
      <label for="username">Tests</label>
      <input id="username" class="form-control custom-input4" type="text" placeholder="">
    </div>
    <div class="mb-2">
      <label for="username">General Advice</label>
      <input id="username" class="form-control custom-input4" type="text" placeholder="">
    </div>
  </div>




  <div class="my-custom-margin"></div>
  <div class="footer text-center bg-custom-footer">
    <p>Powered by S.E.M.D <br>&copy; 2023 United International University. <br>All rights reserved.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>