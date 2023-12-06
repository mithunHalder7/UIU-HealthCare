<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $studentId = $_POST["student_id"];
    $age = $_POST["age"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $reason = $_POST["reason"];

    // TODO: Add validation and sanitization for the form data as needed

    // Now, you can perform actions like saving the appointment to a database, sending emails, etc.
    
    // For example, you can echo the details for testing purposes
    echo "Appointment Details: <br>";
    echo "Student ID: $studentId <br>";
    echo "Age: $age <br>";
    echo "Date: $date <br>";
    echo "Time: $time <br>";
    echo "Email: $email <br>";
    echo "Contact: $contact <br>";
    echo "Reason: $reason <br>";

    // TODO: Add your logic to save the appointment to the database or take other actions as needed
    
} else {
    // If the form is not submitted, you can add any initial code here
    // For example, you might want to redirect the user to the form page
    header("Location: ../Patient/patientAppointmentForm.php");
    exit();
}
?>
