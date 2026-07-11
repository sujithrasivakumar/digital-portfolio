<?php
// get values from previous page
$from = $_POST['from'];
$to = $_POST['to'];
$date = $_POST['date'];
$time = $_POST['time'];

// ⭐ CUSTOM SEAT VALUE
$total_seats = $_POST['total_seats'] ?? 40;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Seat</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Select Seat</h2>

<p><b>From:</b> <?php echo $from; ?></p>
<p><b>To:</b> <?php echo $to; ?></p>
<p><b>Date:</b> <?php echo $date; ?></p>
<p><b>Time:</b> <?php echo $time; ?></p>

<form action="confirm_booking.php" method="post">

    <label>Choose Seat Number:</label><br><br>

    <select name="seat" required>
        <option value="">--Select Seat--</option>

        <?php
        for ($i = 1; $i <= $total_seats; $i++) {
            echo "<option value='$i'>Seat $i</option>";
        }
        ?>
    </select>

    <br><br>

    <!-- PASS DATA AGAIN -->
    <input type="hidden" name="from" value="<?php echo $from; ?>">
    <input type="hidden" name="to" value="<?php echo $to; ?>">
    <input type="hidden" name="date" value="<?php echo $date; ?>">
    <input type="hidden" name="time" value="<?php echo $time; ?>">
    <input type="hidden" name="total_seats" value="<?php echo $total_seats; ?>">

    <button type="submit">Confirm Booking</button>

</form>

</body>
</html>

