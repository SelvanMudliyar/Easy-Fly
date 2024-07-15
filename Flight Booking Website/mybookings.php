<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/d70c1f6414.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <style>
        body{
        overflow-y: scroll;
        font-family: 'Poppins';
        font-weight: 400;
        }

        body::-webkit-scrollbar {
        display: none;
        }

        body {
        -ms-overflow-style: none;  
        scrollbar-width: none;  
        }

        img{
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        background-position: center;
        z-index: -1;
        }

        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        color: rgb(14, 97, 129);
        }

        table {
        font-family: Poppins;
        border-collapse: collapse;
        border-radius: 20%;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
        }

        .book td, .book th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .book tr{
        background-color: #f2f2f2;
        }

        .book tr:hover{
        background-color: #ddd;
        }

        .book th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgb(24, 163, 218);
        color: white;
        }

        h1{
            position: relative;
            left: 5%;
        }
    </style>
</head>
<body>
    <img src="imgs/flight1.jpg">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="loginsuccess.php">Search Flight</a></li>
        <li><a href="mybookings.php">My Bookings</a></li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    <?php
include 'db.php';
session_start();
$email = $_SESSION["email"];

try {
    $query = "SELECT * FROM bookings WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch data from the result set
    $bookings = [];
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <center><h1>My Bookings</h1></center>
    <br>
    <table class="book">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Flight Number</th>
            <th>Airline</th>
            <th>Seat Number</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Time</th>
            <th>Fare</th>
        </tr>
        <?php
        foreach ($bookings as $booking) {
            echo "<tr>";
            echo "<td>{$booking['name']}</td>";
            echo "<td>{$booking['age']}</td>";
            echo "<td>{$booking['gender']}</td>";
            echo "<td>{$booking['flight_number']}</td>";
            echo "<td>{$booking['airline']}</td>";
            echo "<td>{$booking['seatnum']}</td>";
            echo "<td>{$booking['source']}</td>";
            echo "<td>{$booking['destination']}</td>";
            echo "<td>{$booking['flight_date']}</td>";
            echo "<td>{$booking['flight_time']}</td>";
            echo "<td>{$booking['fare']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
