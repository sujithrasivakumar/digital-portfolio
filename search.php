<?php
$isSubmitted = ($_SERVER["REQUEST_METHOD"] === "POST");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Ticket</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Search Ticket</h2>

<?php if (!$isSubmitted) { ?>

<!-- ================= SEARCH FORM ================= -->

<form method="post" action="search.php">

    <label>From</label>
    <input type="text" name="from" required>

    <label>To</label>
    <input type="text" name="to" required>

    <label>Date</label>
    <input type="date" name="date" required>

    <label>Time</label>
    <input type="time" name="time" required>

    <button type="submit">Search Ticket</button>
</form>

<?php } else { ?>

<!-- ================= AVAILABLE TICKETS ================= -->

<?php
$from  = $_POST['from'];
$to    = $_POST['to'];
$date  = $_POST['date'];
$time  = $_POST['time'];
?>

<h3>Available Tickets</h3>

<table border="1" cellpadding="10" style="margin:auto;">
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Date</th>
        <th>Time</th>
        <th>Seats</th>
        <th>Action</th>
    </tr>

    <tr>
        <td><?php echo $from; ?></td>
        <td><?php echo $to; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $time; ?></td>
        <td>40</td>
        <td>
            <form method="post" action="select_seat.php">
                <input type="hidden" name="from" value="<?php echo $from; ?>">
                <input type="hidden" name="to" value="<?php echo $to; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="time" value="<?php echo $time; ?>">
                <input type="hidden" name="total_seats" value="40">

                <button type="submit">Book</button>
            </form>
        </td>
    </tr>
</table>

<?php } ?>

</body>
</html>


