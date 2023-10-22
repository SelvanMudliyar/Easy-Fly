<?php 
session_start();
if (isset($_SESSION["name"])) {
  $name = $_SESSION["name"];
  echo "<h1>Welcome, $name</h1>";
} else {
  echo "<h1>Welcome</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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

    .text{
      position: absolute;
      left: 2%;
    }

    .text span{ 
      color: rgb(14, 97, 129);
     } 

    .searchbox{
      position: absolute;
      top: 23%;
      right: 2%;
      width: 50%;
      height: 70%;
      border-radius: 10px;
      background: rgb(190,210,236);
      background: radial-gradient(circle, rgba(190,210,236,1) 15%, rgba(255,255,255,1) 83%);
      -webkit-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      -moz-box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
      box-shadow: 9px 13px 11px -6px rgba(0,0,0,0.23);
    }

    .text1{
      position: relative;
      top: 5%;
      text-align: center;
    }

    .inputBx{
      position: relative;
      top: 35px;
      left: 100px;
    }

    p{
      font-family: 'Poppins';
      color: black;
      text-align: left;
      font-weight: bold;
      margin-bottom: 1%;
    }

    .input-group-text{
      border: none ;
      border-bottom: grey solid 2px;
      background-color: white;
      color:gray;
      position: relative;
      top:5px;
    }

    .form-control{
      position: relative;
      border: none ;
      border-bottom: grey solid 2px;
      top:5px;
      height: 45px;
    }

    .flex-nowrap{
      width: 70%;
    }

    .container {
        width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        display: block;
    }

    select {
        width: 70%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        border-bottom: grey solid 2px;
        background-color: white;


    }

    .btn {
      -webkit-border-radius: 24;
      -moz-border-radius: 24;
      border-radius: 15px;
      font-family: Arial;
      color: white;
      font-size: 23px;
      background: #0066b2;
      padding: 10px 20px 10px 20px;
      text-decoration: none;
      border: none;
      width: 50%;
      position: relative;
      left: 65px;
      top: 30px;
      font-family: 'Poppins';
      cursor: pointer;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
      -webkit-transition-property: box-shadow, tranform;
      transition-property: box-shadow, tranform;
    }

    .btn:hover {
      background: #0066b2;
      text-decoration: none;
      color: white;
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
    h1{
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

    <div class="searchbox">
        <h2 class="text1">Domestic Flights</h2>
        <form action="flightsearch.php" method="post">
          <div class="formgroup">
            <div class="inputBx">
              <p>Date</p>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-calendar-days"></i></span>
                <input type="date" class="form-control" aria-label="date" aria-describedby="addon-wrapping" name="rdate" id="date" formControlName="date">
              </div>
              <br>
              <div class="form-group">
                <label for="fromSelect">From</label>
                <select id="fromSelect" name="fromSelect">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Bangalore">Bangalore</option>
                </select>
            </div>
            <div class="form-group">
                <label for="toSelect">Destination</label>
                <select id="toSelect" name="toSelect">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Bangalore">Bangalore</option>
                </select>
            </div>
              <button class="btn" type="submit">Search Flight</button>
            </div>
          </div>
        </form>
    </div>
</body>
</html>
