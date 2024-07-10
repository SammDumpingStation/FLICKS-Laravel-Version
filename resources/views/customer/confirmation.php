<?php
function generateReferenceID()
{
    $prefix = "flicks";
    $year = date("Y");
    $randomNumber = mt_rand(100000, 999999);
    $referenceID = $prefix . $year . $randomNumber;
    return $referenceID;
}
session_start();
include_once '../../classes/dbh.class.php';
$dbhconnect = new Dbh();

$buttons = $_POST['buttons'] ?? null;
$cancel = $_GET['cancel'] ?? null;
if (isset($cancel) && $cancel === 'cancel') {
    header('Location: book_ticket.php');
}
if (isset($buttons)) {
    if ($buttons === 'cancel') {
        header('Location: seat_selection.php');
    } elseif ($buttons === 'confirm') {
        //Customer Information to database
        $firstName = $_POST['first-name'] ?? null;
        $lastName = $_POST['last-name'] ?? null;
        $email = $_POST['email'] ?? null;
        $phoneNumber = $_POST['phone-number'] ?? null;

        // Validation
        $fnameVerdict = !empty($firstName) ? true : "First name is required.";
        $lnameVerdict = !empty($lastName) ? true : "Last name is required.";
        $emailVerdict = !empty($email) ? true : "Email is required.";
        $phoneVerdict = !empty($phoneNumber) ? true : "Phone number is required.";

        // Check if all fields are valid
        if ($fnameVerdict === true && $lnameVerdict === true && $emailVerdict === true && $phoneVerdict === true) {
        try {
            $customerQuery = "INSERT INTO customer(user_type, first_name, last_name, email, phone_number, created_at) VALUES (:userType, :fname, :lname, :email, :pnum, NOW());";
            $cusStmt = $dbhconnect->connection()->prepare($customerQuery);
            $cusStmt->bindParam(":userType", $userType, PDO::PARAM_STR);
            $cusStmt->bindParam(":fname", $firstName, PDO::PARAM_STR);
            $cusStmt->bindParam(":lname", $lastName, PDO::PARAM_STR);
            $cusStmt->bindParam(":email", $email, PDO::PARAM_STR);
            $cusStmt->bindParam(":pnum", $phoneNumber, PDO::PARAM_STR);

            if (!$cusStmt->execute()) {
                throw new Exception("Failed to insert movie data");
                header('Location: confirmation?error=database.php');
            }

            $customerIDQuery = "SELECT id FROM customer ORDER BY id DESC LIMIT 1;";
            $IDstmt = $dbhconnect->connection()->prepare($customerIDQuery);
            $IDstmt->execute();
            $customerIDResult = $IDstmt->fetch(PDO::FETCH_ASSOC);

            if (!$IDstmt->execute()) {
                throw new Exception("Failed to get movie data");
                header('Location: confirmation?error=database.php');
            }

            //Reservation Information to database
            $quantity = $_SESSION['quantity'] ?? null;
            $totalCost = $_SESSION['cost-plus-tax'] ?? null;
            $seatsChosen = $_SESSION['seats-selected'] ?? null;
            $timeSelected = $_SESSION['time-selected'] ?? null;
            $timeWithoutAMPM = date("h:i", strtotime($timeSelected));
            $referenceID = generateReferenceID();
            $cinemaID = $_SESSION['cinema-number'] ?? null;
            $customerID = $customerIDResult['id'];
            $status = 'pending';

            $reservationQuery = "INSERT INTO reservation (quantity, total_cost, seats_chosen, time_selected, reference_id, customer_id, cinema_id, date_reserved, status) VALUES (:quantity, :total_cost, :seats_chosen, :time_selected, :reference_id, :customer_id, :cinema_id, NOW(), :status)";
            $reservationStmt = $dbhconnect->connection()->prepare($reservationQuery);
            $reservationStmt->bindParam(":quantity", $quantity, PDO::PARAM_INT);
            $reservationStmt->bindParam(":total_cost", $totalCost, PDO::PARAM_INT);
            $reservationStmt->bindParam(":seats_chosen", serialize($seatsChosen), PDO::PARAM_STR);
            $reservationStmt->bindParam(":time_selected", $timeWithoutAMPM, PDO::PARAM_STR);
            $reservationStmt->bindParam(":reference_id", $referenceID, PDO::PARAM_STR);
            $reservationStmt->bindParam(":customer_id", $customerID, PDO::PARAM_INT);
            $reservationStmt->bindParam(":status", $status, PDO::PARAM_STR);
            $reservationStmt->bindParam(":cinema_id", $cinemaID, PDO::PARAM_INT);

            if (!$reservationStmt->execute()) {
                throw new Exception("Failed to insert movie data");
                header('Location: confirmation?error=database.php');
            }

            $reservationIDQuery = "SELECT id FROM reservation ORDER BY id DESC LIMIT 1;";
            $resIDstmt = $dbhconnect->connection()->prepare($reservationIDQuery);
            $resIDstmt->execute();
            $reservationIDResult = $resIDstmt->fetch(PDO::FETCH_ASSOC);

            if (!$resIDstmt->execute()) {
                throw new Exception("Failed to get movie data");
                header('Location: confirmation?error=database.php');
            }

            //Payment Data Variables
            $method = $_POST['methods'];
            $status = 'pending';
            $reservationID = $reservationIDResult['id'];

            $paymentQuery = "INSERT INTO payment (method, status, reservation_id) VALUES (:method, :status, :reservation_id);";
            $paymentStmt = $dbhconnect->connection()->prepare($paymentQuery);
            $paymentStmt->bindParam(":method", $method, PDO::PARAM_STR);
            $paymentStmt->bindParam(":status", $status, PDO::PARAM_STR);
            $paymentStmt->bindParam(":reservation_id", $reservationID, PDO::PARAM_INT);

            if (isset($method)) {
                $str = $method;
                $str = str_replace("-", " ", $str);
                $sentenceMethod = ucwords($str);
                $sentenceStatus = ucwords($status);
                $_SESSION['reference-id'] = $referenceID;
                $_SESSION['method'] = $sentenceMethod;
                $_SESSION['status'] = $sentenceStatus;
            }

            if (!$paymentStmt->execute()) {
                throw new Exception("Failed to get movie data");
                header('Location: confirmation?error=database.php');
            } else {

                header('Location: summary.php');
            }
        } catch (\Throwable $th) {
            die("Query Failed. " . $th->getMessage());
        }
    }
} }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once '../../includes/css_links.php'?>
  <link rel="stylesheet" href="../../public/css/Customer/confirmation.css">
  <title>Confirmation</title>
</head>
<body>
  <?php include '../../includes/navbar.php'?>


</body>
</html>
