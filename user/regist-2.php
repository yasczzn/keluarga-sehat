<?php 

include '../function/connection.php';

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
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

    do {
      if (empty($ID) || empty($name) || empty($doB) || empty($gender) || empty($email) || empty($phoneNum) || 
      empty($address) || empty($vaccineType) || empty($vaccinationDate) || empty($price) || empty($payment)) {
          $errorMessage = "All the fields are required";
          break;
      }

      $sql = "INSERT INTO vaccination(ID, name, doB, gender, email, phoneNum, address, vaccineType, vaccinationDate, price, payment)".
              "VALUES ('$ID', '$name', '$doB', '$gender', '$email', '$phoneNum', '$address', '$vaccineType', '$vaccinationDate', '$price', '$payment')";
      $result = $conn->query($sql);

      if (!$result) {
          $errorMessage = "Invalid query" . $conn->error;
          break;
      }

         // request variables // important
          $to = $_REQUEST["email"];
          $subject = "Payment va for Vaccination Appointment Keluarga Sehat";
              
          $message = "<b>Hello " . $_REQUEST["name"] . " Thank you for trust and using our services at Keluarga Sehat!.</b>";
          $message .= "<h3>Please continue your payment by send Rp" . $_REQUEST["price"] . " to 081234567890 via " . $_REQUEST["payment"] . ". We will send you 
                      the vaccination schedule and the queue number after the transaction is complete.</h3>";
              
          $header = "From:Keluarga Sehat \r\n";
          $header .= "Cc:Keluarga Sehat \r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";

          $retval = mail ($to,$subject,$message,$header);
              
          if( $retval == true ) {
            echo "Message sent successfully...";
          }else {
            echo "Message could not be sent...";
          }

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

  <title>Keluarga Sehat Website - Registration Check</title>
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

  <!-- <script language = "javascript" type = "text/javascript">
         function CheckData45() {
            with(document.filepost) {
               if(filea.value ! = "") {
                  document.getElementById('one').innerText = 
                     "Attaching File ... Please Wait";
               }
            }
         }
      </script> -->

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
      <h1><a href="../index.php">Keluarga Sehat<img src="../assets/img/keluargasehat.png" alt="" class="img-fluid"></a></h1>
    </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="../index.php#faq">Why Us?</a></li>
          <li><a class="nav-link scrollto" href="../index.php#pricing">Our Services</a></li>
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
          <li><a href="../index.php">Home</a></li>
          <li><a href="regist-1.php">Registration Form</a></li>
          <li class="active">Registration Check</li>
        </ol>
        <h2>Registration Check</h2>

      </div>
    </section>
    
    <!-- End Breadcrumbs -->

    <section id="contact" class="contact">

      <div class="section-title" data-aos="fade-up">
        <h2>Registration Check</h2>
        <h4>Please check your form submission before book your vaccination</h4>
      </div>

      <div class="row">
        <div class="col-lg-8 mt-5 d-flex m-auto" data-aos="fade-left">
          <form method="POST" role="form" class="php-email-form" action="" enctype ="multipart/form-data">
            <table id="datatablesSimple">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td><?php echo htmlspecialchars($_POST['ID']) ?></td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td><?php echo htmlspecialchars($_POST['name']) ?></td>
                </tr>
                <tr>
                  <td>doB</td>
                  <td><?php echo htmlspecialchars($_POST['doB']) ?></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td><?php echo htmlspecialchars($_POST['gender']) ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><?php echo htmlspecialchars($_POST['email']) ?></td>
                </tr>
                <tr>
                  <td>Phone Number</td>
                  <td><?php echo htmlspecialchars($_POST['phoneNum']) ?></td>
                </tr>
                <tr>
                  <td>Address</td>
                  <td><?php echo htmlspecialchars($_POST['address']) ?></td>
                </tr>
                <tr>
                  <td>Vacine Type</td>
                  <td><?php echo htmlspecialchars($_POST['vaccineType']) ?></td>
                </tr>
                <tr>
                  <td>Vaccination Date</td>
                  <td><?php echo $_POST['vaccinationDate'] ?></td>
                </tr>
                <tr>
                  <td>Price</td>
                  <td><?php echo $_POST['price'] ?></td>
                </tr>
                <tr>
                  <td>Payment with</td>
                  <td><?php echo $_POST['payment'] ?></td>
                </tr>
              </tbody>
            </table>
            <div class="ms-5">
              <input type="submit" value="Submit" name="submit" class="btn btn-success btn-user ms-3"/>
              <a href='regist-1.php'>
                <input type='button' value='Cancel' class='btn btn-danger btn-user'>
              </a>
            </div>
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
                <li><i class="bx bx-chevron-right"></i> <a href="../index.php#faq">FAQ</a></li>
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
  <!-- <script src="../assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
