<?php

include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_POST["email"];
    $password =($_POST["password"]); 
	
	$sql = "Select * from user Where email like '%bscse%' AND password='$password'";
    $sql1= "SELECT * FROM user WHERE email like '%admin%' AND password ='$password'";
	$result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);
	$data = $result->fetch_assoc() ;
    $data1 = $result1->fetch_assoc() ;
	$num = mysqli_num_rows($result);
    $num1 = mysqli_num_rows($result1);
	if ($num == 1 && stripos($email, 'bscse') !== false) {
		// Redirect to index.php if email contains 'bscse'
		header("location:../Patient/Patient_home.php");
	} elseif ($num1 == 1 && stripos($email, 'admin') !== false) {
		// Redirect to patients_record.php if email contains 'admin'
		header("location:../Doctor/Doctorhome.php");
	} else {
        $errorMessage = "Invalid email or password. Please try again.";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+8mkz5f5PlFf3Fiu12M2g2by5pBskYYgB5cE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        overflow: hidden;
        background-color: aliceblue;
    }
    .image-container {
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
            height: 100vh;
            left: 200px;
            width: 600px;
        }
        .img-icon {
    width: 60px; /* Set your desired width */
    height: 60px; 
    position: relative;
    top: -60px;
    left: 80px;
    /* Set your desired height */
    /* Add any additional styles here */
    
}
.custom-logo{
    position: relative;
  left: 80px;
  top: -33px;
}
.custom-btn{
    background-color: #F99417;
    color: white;
}
.custom-height {
    height: 100%; 
    position: absolute;/* Adjust the height to your preference */
}
.shadow-right {
    box-shadow: 5px 0 10px rgba(0, 0, 0, 0.2); 
        
    }
    .custom-text{
        position: relative;
        left: 60px;
        top: -40px;
        font-weight: 600;
    }
</style>
<body>
    <div class="container-fluid custom-height ">
        <div class="row h-100 ">
            <!-- Left Section with Login Form -->
            <div class="col-md-4 bg-white p-5 shadow-right ">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <img src="Images/United_International_University_Monogram.png" alt="Icon" class="img-icon">
          <a class="navbar-brand custom-logo" href="#" style="color:black;"><span style="color: #F99417; font-weight: 500;">UIU</span><br><span style="color: #F99417;">Health</span>Sync</a>
          <p class="text-dark custom-text">Login into your account</p>
                        <form method="POST">
                            <label for="password" class="text-secondary">E-Mail</label>
                            <div class="input-group">
                                <input type="text" class="form-control bg-light" style="border: none;  border-radius: 12px;" id="password" placeholder="Enter E-mail" name="email"  required>
                                <div class="input-group-append">
                                <span class="input-group-text text-white" style="background-color: #F99417;">
                                <i class="fa-solid fa-envelope"></i>
                             </span>
                             </div>
                            </div>
                            <label for="password" class="text-secondary">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control bg-light" style="border: none; border-radius: 12px;" id="password" placeholder="Enter Password" name="password"  required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-white" style="background-color: #F99417;">
                                        <i class="fa-solid fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            
                            
                            <div class="text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="mt-3"> <button type="submit" class="btn custom-btn btn-block" style="border: 14px;" name="login">Login</button></div>
                            <div class="text-center mt-2">
    <?php
        if (isset($errorMessage)) {
            echo '<div class="alert alert-danger" role="alert">' . $errorMessage . '</div>';
        }
    ?>
</div>
                        </form>
                        
                    </div>

                </div>
            </div>
            <!-- Right Section with Image -->
            <div class="col-md-4 d-none d-md-block p-0">
                <div class="d-flex h-100">
                    <div class="image-container">
                        <img src="Images/login.png" alt="Image">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
