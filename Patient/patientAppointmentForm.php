<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+8mkz5f5PlFf3Fiu12M2g2by5pBskYYgB5cE" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="PatientAppiointmentForm.css">
  <title>Patient's Appointment form</title>
</head>

<body>
  <?php include '../Global_Components/PatientNavbar.php'; ?>
  <br>

  <div class="container mt-4">
    <div class="d-flex flex-column ">
      <!-- 1st row -->
      <div class="d-flex mb-2">
        <div class="me-2" style="width: 45%;">
          <label for="Name" class="custom-label">Student ID</label>

          <input id="password" class="form-control custom-input1" type="number" placeholder="011******">
        </div>
        <div style="width: 45%;">
          <label for="confirm-password">Age</label>
          <input id="confirm-password" class="form-control custom-input1" type="number" placeholder="">
        </div>
      </div>

      <br>

      <!-- 2nd row -->

      <div class="d-flex mb-2">
        <div class="me-2" style="width: 45%;">
          <label for="Name" class="custom-label">Date</label>
          <input id="password" class="form-control custom-input1" type="date" placeholder="">
        </div>
        <div style="width: 45%;">
          <label for="confirm-password">Time</label>
          <input id="confirm-password" class="form-control custom-input1" type="time" placeholder="">
        </div>
      </div>

      <br>
      <!-- 3rd row -->
      <div class="d-flex mb-2">
        <div class="me-2" style="width: 45%;">
          <label for="Name" class="custom-label">Email</label>
          <input id="password" class="form-control custom-input1" type="email" placeholder="*********@uiu.ac.bd">
        </div>
        <div style="width: 45%;">
          <label for="confirm-password">Contact</label>
          <input id="confirm-password" class="form-control custom-input1" type="number" placeholder="+880**********">
        </div>
      </div>
      <br>

      <!-- 4th row -->
      <div class="d-flex mb-2">
        <div class="me-2" style="width: 100%;">
          <label for="Name" class="custom-label">Reason for Appointment</label>
          <textarea class="form-control custom-input4" rows="4" placeholder="Enter your reason for the appointment" style="width: 1170px; height: 200px;"></textarea>
        </div>
      </div>







      <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 100px;margin-right: 70px; margin-bottom: 100px;">
        <button class="btn btn-primary me-md-2" type="button" style="background-color: #F99417; border: none;">Cancel</button>
        <button class="btn btn-primary" type="button" style="background-color: #F99417;border:none">Save changes</button>
      </div>


    </div>


  </div>






  <div class="footer text-center bg-custom-footer" style="width: 100%;">
    <p>Powered by S.E.M.D <br>&copy; 2023 United International University. <br>All rights reserved.</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>