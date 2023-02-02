<!-- <?php 

include '../function/connection.php';

$ID = "";
$name = "";
$doB = "";
$gender = "";
$email = "";
$phoneNum = "";
$address = "";
$vaccineType = "";
$vaccinationDate = "";
$price = "";
$payment = "";

$errorMessage = "";
$successMessage = "";

if (isset($_POST['Submit'])) {
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $doB = $_POST['doB'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $address = $_POST['address'];
    $vaccineType = $_POST['vaccineType'];
    $vaccinationDate = $_POST['vaccinationDate'];
    $price = $_POST['price'];
    $payment = $_POST['payment'];

  }

  echo "<script>document.location = 'regist-2.php'</script>";

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Keluarga Sehat Website - Registration Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/keluargasehat.png" rel="icon">
  <link href="../assets/img/keluargasehat.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v4.10.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <div class="logo me-auto">
        <h1><a href="index.php">Keluarga Sehat<img src="../assets/img/keluargasehat.png" alt="" class="img-fluid"></a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="../index.php#faq">Why Us?</a></li>
          <li><a class="nav-link scrollto" href="../index.php#pricing">Our Services</a></li>
          <li><a class="nav-link scrollto" href="../index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li class="active">Registration Form</li>
        </ol>
        <h2>Registration Form</h2>

      </div>
    </section>
    
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">

      <div class="section-title" data-aos="fade-up">
        <h2>Register Now</h2>
        <p>*Please fill in your data according to your ID card.</p>

        <?php
          if (!empty($errorMessage)) {
          echo "
            <div class='col-xl-3 col-md-6'>
              <div class='card bg-warning text-white mb-4'>
                <div class='card-body'$errorMessage</div>
                <button class='btn-close' data-bs-dismiss='alert'>Close</button>
              </div>
            </div>                                
          ";
           }
        ?>

      </div>


      <div class="row">
        <div class="col-lg-8 mt-5 d-flex m-auto" data-aos="fade-left">
          <form action="regist-2.php" method="POST" role="form" class="php-email-form">
            <div class="form-floating mb-3">
              <input type="number" class="form-control form-control-user" value="<?php echo $ID; ?>" name="ID" placeholder="ID" required>
              <label for="inputID">ID</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control form-control-user" value="<?php echo $name; ?>" name="name" placeholder="Name" required>
              <label for="inputName">Name</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control form-control-user" value="<?php echo $doB; ?>" name="doB" placeholder="Date of Birth" required>
              <label for="inputDoB">Date of Birth</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <select aria-label="Gender" title="gender-choice" type="text" class="form-control" name="gender" placeholder="Gender" required>
                <option value="male" <?php echo $gender == 'male'; ?>>male</option>
                <option value="female" <?php echo $gender == 'female'; ?>>female</option>
              </select>
              <label for="inputGender">Gender</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control form-control-user" value="<?php echo $email; ?>" name="email" placeholder="Email" required>
              <label for="inputEmail">Email</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control form-control-user" value="<?php echo $phoneNum; ?>" name="phoneNum" placeholder="Phone Number" required>
              <label for="inputPhoneNum">Phone Number</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control form-control-user" value="<?php echo $address; ?>" name="address" placeholder="Address" required>
              <label for="inputAddress">Address</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <select aria-label="VaccineType" title="status-choice" type="text" class="form-control" name="vaccineType" id="vaccineType" placeholder="Vaccine Type" onchange="priceTotal(this.value)" required>
                <option value="" disabled selected>Select vaccination</option>
                <option value="Dosage 1" <?php echo $vaccineType == 'Dosage 1'; ?>>Dosage 1</option>
                <option value="Dosage 2" <?php echo $vaccineType == 'Dosage 2'; ?>>Dosage 2</option>
                <option value="Dosage 3" <?php echo $vaccineType == 'Dosage 3'; ?>>Dosage 3</option>
                <option value="Booster 1" <?php echo $vaccineType == 'Booster 1'; ?>>Booster 1</option>
                <option value="Booster 2" <?php echo $vaccineType == 'Booster 2'; ?>>Booster 2</option>
                <option value="Booster 3" <?php echo $vaccineType == 'Booster 3'; ?>>Booster 3</option>
              </select>
              <label for="inputStatus">Vaccine Type</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="date" class="form-control form-control-user" value="<?php echo date('Y-m-d', strtotime($vaccinationDate)); ?>" id="vaccinationDate" required>
              <label for="inputVaccinationDate">Vaccination Date</label>
              <div class="validate"></div>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control form-control-user" value="<?php echo $price; ?>" name="price" id="price" placeholder="Price" readonly>
              <label for="inputPrice">Price</label>
              <div class="validate"></div>
            </div>
            <fieldset>
              <legend class="form-floating mb-3">Please select a payment method</legend>
                  <input type="radio" id="bca" name="bca" value="BCA" <?php echo $payment == 'bca'; ?>>
                  <label for="bca">BCA</label>
                  <input type="radio" id="bsi" name="bsi" value="BSI" <?php echo $payment == 'bsi'; ?>>
                  <label for="bsi">BSI</label>
                  <input type="radio" id="gopay" name="gopay" value="GoPay" <?php echo $payment == 'gopay'; ?>>
                  <label for="gopay">GoPay</label>
                  <input type="radio" id="dana" name="dana" value="Dana" <?php echo $payment == 'dana'; ?>>
            </fieldset>
              <input type="submit" value="Submit" name="submit" class="btn btn-success btn-user ms-3"/>
              <input type="button" value="Cancel" name="cancel" class="btn btn-danger btn-user"/>
            <hr>
          </form>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6">
              <div class="footer-info">
                <h3>Keluarga Sehat Website</h3>
                <h5></h5>
                <p>
                  Jl. Merbabu IV Rawa Mekar<br>
                  South Tangerang, Indonesia<br><br>
                  <strong>Phone:</strong> +62 1234 5678 901<br>
                  <strong>Email:</strong> ksehat@gmail.com<br>
                </p>
              </div>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Sections</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#hero">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#faq">Why Us?</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#pricing">Our Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#contact">Privacy policy</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Partnerships</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="https://www.kemkes.go.id">Official Site</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://vaksin.kemkes.go.id/#/vaccines">Vaccination Data Site</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="https://covid19.go.id/peta-sebaran">Covid Spread Map</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Scaffold</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->

  <a href="#" title="to top" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <script>
    function priceTotal(val){
    var totalPrice;
    if(val == 'Dosage 1'){
      totalPrice = 45000;
    } else if(val == 'Dosage 2'){
      totalPrice = 50000;
    } else if(val == 'Dosage 3'){
      totalPrice = 55000;
    } else if(val == 'Booster 1'){
      totalPrice = 60000;
    } else if(val == 'Booster 2'){
      totalPrice = 65000;
    } else if(val == 'Booster 3'){
      totalPrice = 70000;
    }
    //display price
    var disPrice = document.getElementById('price');
    disPrice.value = totalPrice;

  }
  </script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
