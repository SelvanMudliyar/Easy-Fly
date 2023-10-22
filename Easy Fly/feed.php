<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
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


.background-img {
    background-image: url('assets/bg1.jpg'); 
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}


.container {
  position: absolute;
        width: 50%;
        height: 80%;
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
  </ul>
    
        <div class="container">
            <h2>Feedback Form</h2>
            <form action="feedprocess.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
