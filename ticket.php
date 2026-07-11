<?php
// ticket.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid access";
    exit;
}

/* SAFE DATA FETCH */
$from   = $_POST['from']   ?? '';
$to     = $_POST['to']     ?? '';
$date   = $_POST['date']   ?? '';
$time   = $_POST['time']   ?? '';
$seat   = $_POST['seat']   ?? '';
$amount = $_POST['amount'] ?? '';
$booking_id = rand(100000, 999999);
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Ticket</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>E-TICKET</h2>

<div style="border:1px dashed #000; padding:20px; width:300px;">
    <p><b>Booking ID:</b> <?php echo $booking_id; ?></p>
    <p><b>From:</b> <?php echo $from; ?></p>
    <p><b>To:</b> <?php echo $to; ?></p>
    <p><b>Date:</b> <?php echo $date; ?></p>
    <p><b>Time:</b> <?php echo $time; ?></p>
    <p><b>Seat:</b> <?php echo $seat; ?></p>
    <p><b>Amount:</b> ₹<?php echo $amount; ?></p>
</div>

<br>
<button onclick="window.print()">Print Ticket</button>
<a href="logout.php">Logout</a>
</body>
</html>