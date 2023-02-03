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
      document.location = 'email.php'</script>";

  } while (false);

  }

?>