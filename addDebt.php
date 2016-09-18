<?php

$servername = "localhost";
$username = "root";
$password = "tehdebtpimp";
$dbname = "debtwork";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$debtor = $_POST['debtor'];
$creditor = $_POST['creditor'];
$amount = $_POST['amount'];
$memo = $_POST['memo'];
$date = $_POST['date'];

$sql = "INSERT INTO debt(debtor, creditor, amount, memo, date)
VALUES ('$debtor', '$creditor', '$amount', '$memo', '$date')";

if ($conn->query($sql) === TRUE) {
    header("Location: main.php");
} else {
    header("Location: main.php");
}


$conn->close();

?>

