<?php
include "db.php"; // your DB connection file

if (isset($_POST['add_ticket'])) {

    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $total_seats = $_POST['total_seats'];

    $query = "INSERT INTO tickets 
              (source, destination, travel_date, travel_time, total_seats)
              VALUES 
              ('$source', '$destination', '$date', '$time', '$total_seats')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Ticket Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Ticket</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Add Ticket (Admin)</h2>

<form method="post" class="admin-form">

    <label>Source:</label><br>
    <input type="text" name="source" required><br><br>

    <label>Destination:</label><br>
    <input type="text" name="destination" required><br><br>

    <label>Date:</label><br>
    <input type="date" name="date" required><br><br>

    <label>Time:</label><br>
    <input type="time" name="time" required><br><br>

    <!-- ⭐ CUSTOM SEATS -->
    <label>Total Seats:</label><br>
    <input type="number" name="total_seats" min="1" required><br><br>

    <button type="submit" name="add_ticket">Add Ticket</button>

</form>

</body>
</html>
