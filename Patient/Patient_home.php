<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Patient_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<html>

<body>

    <?php include '../Global_Components/PatientNavbar.php'; ?>

    <?php include '../Global_Components/banner.php'; ?>


    <!-- this code is for payment div-->
    <div class="payment">
        <div class="current-balance">
            <p>Current Balance : 5000 TK</p>
        </div>
        <div class="online-payment">
            <p>For Online Payment:</p>
            <input type="button" value="Click Me" class="pay-btn">
        </div>
    </div>

    <!-- this code is for body div -->

    <div class="body">
        <div class="left-body">
            <div class="top-corner">
                Last Prescription
            </div>

            <div class="left-body-flex">
                <div class="row1">
                    <div class="element1">
                        <h5>Medicines</h5>
                        <div class="element1div">
                            <p>Flagyl 0+1+0</p>
                            <p>Moxacil 1+1+1</p>
                            <p>Seclo 1+ 1+ 1</p>
                        </div>
                    </div>
                    <div class="element1">
                        <h5>Medicines</h5>
                        <div class="element1div">
                            <p>Flagyl 0+1+0</p>
                            <p>Moxacil 1+1+1</p>
                            <p>Seclo 1+ 1+ 1</p>
                        </div>
                    </div>
                </div>
                <div class="row2">
                    <div class="element1">
                        <h5>Medicines</h5>
                        <div class="element1div">
                            <p>Flagyl 0+1+0</p>
                            <p>Moxacil 1+1+1</p>
                            <p>Seclo 1+ 1+ 1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right-body">
            <div class="top-corner">
                Visit History
            </div>
            <div class="historyall">

                <div class="history">12 July, 2023</div>
                <div class="history">12 July, 2023</div>
                <div class="history">12 July, 2023</div>

            </div>

        </div>
    </div>


    <!-- this code is for footer -->



    <?php include '../Global_Components/footer.php'; ?>

</body>

</html>