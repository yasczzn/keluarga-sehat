<?php 

include '../function/connection.php';

$vaccineType = "";
$stock = "";
$date = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $vaccineType = $_POST['vaccineType'];
    $stock = $_POST['stock'];
    $date = $_POST['date'];

    do {
        if (empty($vaccineType) || empty($stock) || empty($date)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "INSERT INTO vaccine_stock(vaccineType, stock, date)".
                "VALUES ('$vaccineType', '$stock', '$date')";
        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query" . $conn->error;
            break;
        }

        $vaccineType = "";
        $stock = "";
        $date = "";

        echo "<script>alert('Vaccination data submitted!')
        document.location = 'vaccine-stock-table.php'</script>";

    } while (false);

}
?>
