<!-- <?php 

include '../function/connection.php';


$s1 = mktime(10);
$s2 = mktime(12);
$s3 = mktime(14);
$s4 = mktime(16);

$sch1 = date("h.00 a, d M", $s1); 
$sch2 = date("h.00 a, d M", $s2);
$sch3 = date("h.00 a, d M", $s3);
$sch4 = date("h.00 a, d M", $s4);

if ($sch1.date("h") <= date("h")) {
  $sch1 = date("h.00 a, d M", strtotime("+1 day"));
}

$vaccinationDate = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $vaccinationDate = $_POST['vaccinationDate'];

    do {
        if (empty($vaccinationDate)) {
            $errorMessage = "Please choose the available time!";
            break;
        }

    } while (false);

  }

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Keluarga Sehat Website - Choose Available Schedule</title>
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
          <li><a href="../index.html">Home</a></li>
          <li class="active">Choose Time</li>
        </ol>
        <h2>Choose Available Schedule</h2>

      </div>
    </section>
    
    <!-- End Breadcrumbs -->

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Please Choose the Available Schedule</h2>
          <p>for book your vaccination.</p>
        </div>

        <div class="vstack col-lg-8 mt-5 m-auto">
          <div class="row">
            <div class="col-lg-12 d-block align-items-center mb-lg-2" data-aos="zoom-in">
              <div class="icon-box icon-box-pink">
                <h4 class="title mb-0 d-flex align-items-center">
                  <a href=""><?php echo $sch1; ?></a>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                </h4>
              </div>
            </div>

            <div class="col-lg-12 d-block align-items-center mb-lg-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box icon-box-cyan">
                <h4 class="title mb-0 d-flex align-items-center">
                  <a href=""><?php echo $sch2; ?></a>
                  <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                </h4>
              </div>
            </div>

            <div class="col-lg-12 d-block align-items-center mb-lg-2" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box icon-box-green">
                <h4 class="title mb-0 d-flex align-items-center">
                  <a href=""><?php echo $sch3; ?></a>
                  <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                </h4>
              </div>
            </div>

            <div class="col-lg-12 d-block align-items-center mb-lg-2" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box icon-box-blue">
                <h4 class="title mb-0 d-flex align-items-center">
                  <a href=""><?php echo $sch4; ?></a>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                </h4>
              </div>
            </div>

          </div>
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

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
