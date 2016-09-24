<?php

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

