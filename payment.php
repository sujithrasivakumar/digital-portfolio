<?php
// payment.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid access";
    exit;
}

/* SAFE DATA FETCH (NO ERRORS) */
$from   = $_POST['from']   ?? '';
$to     = $_POST['to']     ?? '';
$date   = $_POST['date']   ?? '';
$time   = $_POST['time']   ?? '';
$seat   = $_POST['seat']   ?? '';
$amount = $_POST['amount'] ?? 500; // default amount
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <link rel="stylesheet" href="style.php">
    <script>
        function showFields(method) {
            document.getElementById('upi').style.display = 'none';
            document.getElementById('card').style.display = 'none';

            if (method === 'UPI') {
                document.getElementById('upi').style.display = 'block';
            }
            if (method === 'Debit Card' || method === 'Credit Card') {
                document.getElementById('card').style.display = 'block';
            }
        }
    </script>
</head>
<body>

<h2>Payment Page</h2>

<p><b>From:</b> <?php echo $from; ?></p>
<p><b>To:</b> <?php echo $to; ?></p>
<p><b>Date:</b> <?php echo $date; ?></p>
<p><b>Time:</b> <?php echo $time; ?></p>
<p><b>Seat:</b> <?php echo $seat; ?></p>
<p><b>Amount:</b> ₹<?php echo $amount; ?></p>

<form method="post" action="payment_success.php">

    <!-- PASS DATA -->
    <input type="hidden" name="from" value="<?php echo $from; ?>">
    <input type="hidden" name="to" value="<?php echo $to; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="time" value="<?php echo $time; ?>">
    <input type="hidden" name="seat" value="<?php echo $seat; ?>">
    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <label>Select Payment Method</label><br>
    <select name="method" onchange="showFields(this.value)" required>
        <option value="">-- Select --</option>
        <option value="UPI">UPI</option>
        <option value="Debit Card">Debit Card</option>
        <option value="Credit Card">Credit Card</option>
    </select>

    <!-- UPI -->
    <div id="upi" style="display:none;">
        <br>
        <input type="text" name="upi_id" placeholder="example@upi">
    </div>

    <!-- CARD -->
    <div id="card" style="display:none;">
        <br>
        <input type="text" name="card_number" placeholder="Card Number"><br><br>
        <input type="text" name="card_name" placeholder="Card Holder Name"><br><br>
        <input type="text" name="expiry" placeholder="MM/YY"><br><br>
        <input type="password" name="cvv" placeholder="CVV">
    </div>

    <br><br>
    <button type="submit">Proceed to Pay</button>
</form>

</body>
</html>




