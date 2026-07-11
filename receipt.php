<?php
include "db.php";
session_start();

$method = $_POST['payment_method'];
$amount = $_POST['amount'];

$from  = $_POST['from'];
$to    = $_POST['to'];
$date  = $_POST['date'];
$time  = $_POST['time'];
$seat  = $_POST['seat'];

$status = "Success";

/* store payment */
$query = "INSERT INTO payments
(amount, payment_method, payment_status, payment_date)
VALUES
('$amount', '$method', '$status', NOW())";

mysqli_query($conn, $query);

$payment_id = mysqli_insert_id($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>🧾 Payment Receipt</h2>

<p>
<b>Payment ID:</b> <?php echo $payment_id; ?><br>
<b>Status:</b> Successful<br>
<b>Amount:</b> ₹<?php echo $amount; ?><br>
<b>Method:</b> <?php echo $method; ?><br><br>

<b>From:</b> <?php echo $from; ?><br>
<b>To:</b> <?php echo $to; ?><br>
<b>Date:</b> <?php echo $date; ?><br>
<b>Time:</b> <?php echo $time; ?><br>
<b>Seat:</b> <?php echo $seat; ?>
</p>

<br>
<br><br>

<a href="ticket.php?
payment_id=<?php echo $payment_id; ?>
&from=<?php echo $from; ?>
&to=<?php echo $to; ?>
&date=<?php echo $date; ?>
&time=<?php echo $time; ?>
&seat=<?php echo $seat; ?>
&amount=<?php echo $amount; ?>">
Generate E-Ticket
</a>
<br><br>
</body>
</html>
