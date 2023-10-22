<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
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
        position:relative;
        top: 12%;
        left: 10%;
        color: white;
    }

    </style>
</head>
<body>
<img src="assets/bg1.jpg">
  <ul>
    <li><a href="home.php">Easy FLy</a></li>
  </ul>
  <?php
  include 'db.php';
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $feedback = $_REQUEST["feedback"];

    try {
        $query = "INSERT INTO feedback (name, email, feedback ) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$name, $email, $feedback]);

        echo "<h1 class='text'>Thank You For Your Valueable Feedback!!</h1>";
    } catch (Exception $e) {
        echo $e;
    }
    ?>

</body>
</html>
