<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid access";
    exit;
}

$from   = $_POST['from'] ?? '';
$to     = $_POST['to'] ?? '';
$date   = $_POST['date'] ?? '';
$time   = $_POST['time'] ?? '';
$seat   = $_POST['seat'] ?? '';
$amount = $_POST['amount'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Success</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Payment Successful ✅</h2>

<form method="post" action="ticket.php">
    <input type="hidden" name="from" value="<?php echo $from; ?>">
    <input type="hidden" name="to" value="<?php echo $to; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="time" value="<?php echo $time; ?>">
    <input type="hidden" name="seat" value="<?php echo $seat; ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <button type="submit">View E-Ticket</button>
</form>

</body>
</html>


