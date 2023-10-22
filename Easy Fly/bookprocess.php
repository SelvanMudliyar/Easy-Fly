<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
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
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        color: rgb(14, 97, 129);
        }

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f1f1f1;
}

.container {
  position: absolute;
        width: 50%;
        height: 60%;
        overflow-y: scroll;
        left: 25%;
        border-radius: 0px;
        background: rgb(190,210,236);
        background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
        -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
        -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
        box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    font-weight: bold;
}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #0066b2;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0066b2;
    color: white;
}


    </style>
</head>
<body>
    <img src="assets/bg1.jpg">
    <ul>
        <li><a href="home.php">Easy Fly</a></li>
        <li><a href="loginsuccess.php">Search Flight</a></li>
        <li><a href="mybookings.php">My Bookings</a></li>
        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    <?php 
include 'db.php';
$name = $_REQUEST["rname"];
$email = $_REQUEST["remail"];
$age = $_REQUEST["rage"];
$gender = $_REQUEST["rgender"];
$flight_number = $_REQUEST["rflightnumber"];
$airline = $_REQUEST["rairline"];
$source = $_REQUEST["rsource"];
$destination = $_REQUEST["rdestination"];
$date = $_REQUEST["rdate"];
$time = $_REQUEST["rtime"];
$fare = $_REQUEST["rfare"];
$numTickets = 1;

$checkAvailabilityStmt = null;
$updateSeatCountStmt = null;
$saveBookingStmt = null;

try {
    $checkAvailabilityQuery = "SELECT * FROM flight_details WHERE flight_number = ? and flight_date = ? and flight_time = ?";
    $checkAvailabilityStmt = $conn->prepare($checkAvailabilityQuery);
    $checkAvailabilityStmt->bind_param("sss", $flight_number, $date, $time); // Bind parameters using bind_param
    $checkAvailabilityStmt->execute();
    
    $availabilityResult = $checkAvailabilityStmt->get_result();
    
    if ($availabilityResult->num_rows > 0) {
        $availabilityRow = $availabilityResult->fetch_assoc();
        $availableSeats = $availabilityRow["available_seats"];

        if ($availableSeats >= $numTickets) {
            $updatedSeats = $availableSeats - $numTickets;

            $updateSeatCountQuery = "UPDATE flight_details SET available_seats = ? WHERE flight_number = ? and flight_date = ? and flight_time = ?";
            $updateSeatCountStmt = $conn->prepare($updateSeatCountQuery);
            $updateSeatCountStmt->bind_param("isss", $updatedSeats, $flight_number, $date, $time);
            $updateSeatCountStmt->execute();
            $seatnum = $updatedSeats + 1;

            $saveBookingStmt = $conn->prepare("INSERT INTO bookings (name, email, age, gender, flight_number, airline, seatnum, source, destination, flight_date, flight_time, fare) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $saveBookingStmt->bind_param("ssisssisssss", $name, $email, $age, $gender, $flight_number, $airline, $seatnum, $source, $destination, $date, $time, $fare);
            $saveBookingStmt->execute();
?>
            <div class="container">
        <h2>Payment Information</h2>
        <form action="booksucess.php" method="post">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="tel" inputmode="numeric" name="card_number" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx" required>
            </div>
            <div class="form-group">
                <label for="expiration">Expiration Date</label>
                <input type="tel" id="expiration" name="expiration_date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="tel" id="cvv" name="cvv" required>
            </div>
            <button type="submit">Pay Now</button>
        </form>
    </div>
<?php
        } else {
            echo "No available seats.";
        }
    } else {
        echo "No matching flight found.";
    }
    
    $checkAvailabilityStmt->close(); // Close the statement
    $updateSeatCountStmt->close(); // Close the statement
    $saveBookingStmt->close(); // Close the statement
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close(); // Close the connection
?>

                    