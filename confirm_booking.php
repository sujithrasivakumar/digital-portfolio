<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "Invalid access";
    exit;
}

$from  = $_POST['from'];
$to    = $_POST['to'];
$date  = $_POST['date'];
$time  = $_POST['time'];
$seat  = $_POST['seat'];
$amount = 500;

/* UPDATE SEATS — DO NOT COMMENT THIS */
$update = "UPDATE tickets 
           SET available_seats = available_seats - 1 
           WHERE source='$from' 
           AND destination='$to' 
           AND travel_date='$date' 
           AND travel_time='$time' 
           AND available_seats > 0";

$result = mysqli_query($conn, $update);

if (!$result || mysqli_affected_rows($conn) == 0) {
    echo "❌ Seats not available";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Booking Confirmation</h2>

<p><b>From:</b> <?php echo $from; ?></p>
<p><b>To:</b> <?php echo $to; ?></p>
<p><b>Date:</b> <?php echo $date; ?></p>
<p><b>Time:</b> <?php echo $time; ?></p>
<p><b>Seat:</b> Seat <?php echo $seat; ?></p>
<p><b>Amount:</b> ₹<?php echo $amount; ?></p>

<form action="payment.php" method="post">
    <input type="hidden" name="from" value="<?php echo $from; ?>">
    <input type="hidden" name="to" value="<?php echo $to; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="time" value="<?php echo $time; ?>">
    <input type="hidden" name="seat" value="<?php echo $seat; ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <button type="submit">Proceed to Payment</button>
</form>

</body>
</html>



