<?php 

include '../function/connection.php';

$ID = "";
$name = "";
$doB = "";
$gender = "";
$email = "";
$phoneNum = "";
$patientStatus = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $ID = $_POST['ID'];
    $name = $_POST['name'];
    $doB = $_POST['doB'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $patientStatus = $_POST['patientStatus'];

    do {
        if (empty($ID) || empty($name) || empty($doB) || empty($gender) || empty($email) || empty($phoneNum) || 
        empty($patientStatus)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO vaccine_stock(vaccineType, stock, date)".
                "VALUES ('$ID', '$name', '$doB', '$gender', '$email', '$phoneNum', '$patientStatus')";
        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query" . $conn->error;
            break;
        }

        $ID = "";
        $name = "";
        $doB = "";
        $gender = "";
        $email = "";
        $phoneNum = "";
        $patientStatus = "";

        echo "<script>alert('Patient data submitted!')
        document.location = 'patient-success.php'</script>";

    } while (false);

}
?>

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
          <li><a class="nav-link scrollto" href="../index.php#faq">FAQ</a></li>
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
          <li><a href="../index.html">Home</a></li>
          <li class="active">Registration Form</li>
        </ol>
        <h2>Registration Success</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

    <div class="section-title" data-aos="fade-up">
          <h2>Register Now</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
        <form action="" method="POST" role="form" class="php-email-form">
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
                                <select aria-label="Status" title="status-choice" type="text" class="form-control" name="patientStatus" id="patientStatus" placeholder="Vaccine Status" required>
                                    <option value="not vaccinated" <?php echo $patientStatus == 'not vaccinated'; ?>>not vaccinated</option>
                                    <option value="Dosage 1" <?php echo $patientStatus == 'Dosage 1'; ?>>Dosage 1</option>
                                    <option value="Dosage 2" <?php echo $patientStatus == 'Dosage 2'; ?>>Dosage 2</option>
                                    <option value="Dosage 3" <?php echo $patientStatus == 'Dosage 3'; ?>>Dosage 3</option>
                                    <option value="Booster 1" <?php echo $patientStatus == 'Booster 1'; ?>>Booster 1</option>
                                    <option value="Booster 2" <?php echo $patientStatus == 'Booster 2'; ?>>Booster 2</option>
                                    <option value="Booster 3" <?php echo $patientStatus == 'Booster 3'; ?>>Booster 3</option>
                                </select>
                                <label for="inputStatus">Status</label>
                                <div class="validate"></div>
                            </div>
                            <input type="submit" value="Submit" name="submit" class="btn btn-success btn-user ms-3"/>
                        <input type="button" value="Cancel" name="cancel" class="btn btn-danger btn-user"/>
                        </a>
                      <hr>
                </form>
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
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#faq">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#contact">Privacy policy</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Official Site</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Vaccination Data Site</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Covid Spread Map</a></li>
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

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>