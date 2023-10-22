<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        html,body{
            background: rgb(240,255,255);
            
            height: 100%;
            background-repeat: no-repeat;
            overflow-y:hidden;
            font-family: 'Poppins';
            font-weight: 400;
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
            color: white;
        }

        .log{
            width: 73%;
            height: 70%;
            background-color: #0066b2;
            position: relative;
            bottom: 860px;
            left: 180px;
            filter: drop-shadow(10px,30px,90px,black);
            box-shadow: 10px 10px 10px rgba(0,0,0,0.3);
            top:5%;
            border-radius: 30px 30% 30% 30px;
        }

        .log img{
            position: relative;
            top: 13%;
            left: 5%;
            width: 40%;
            height: 70%;
        }

        .form1
        {
            width: 45%;
            height:100%;
            background-color: white;
            position: relative;
            bottom: 70%;
            left:55.1%;
            border-radius: 25% 25% 25% 25%;
            text-align: center;
        }

        h2
        {
            padding-top: 80px;
            padding-bottom: 10px;
            font-family: 'Poppins';
            font-weight: bolder;
            font-size: 38px;
        }

        .btn
        {
            margin: 3px;
            top: 25px;
            width: 150px;
            background-color: white;
        }

        .container
        {
            position: absolute;
            bottom: 16%;
        }

        .inputBx
        {
            position: relative;
            top: 20px;
            left: 70px;
        }

        p
        {
            font-family: 'Poppins';
            color: black;
            text-align: left;
            font-weight: bold;
            margin-bottom: 1%;
        }

        .input-group-text
        {
            border: none ;
            border-bottom: grey solid 2px;
            background-color: white;
            color:gray;
            position: relative;
            top:5px;
        }

        .form-control
        {
            position: relative;
            border: none ;
            border-bottom: grey solid 2px;
            top:5px;

        }

        .flex-nowrap
        {
            width: 70%;
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
            right: 65px;
            bottom: 15px;
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

        .account{
            position: relative;
            left: 5%;
        }
        .account a{
            text-decoration: none;
            color: black;
        }

        .account a span{
            color: #0066b2;
        }

    </style>
</head>
<body>
    <ul>
        <li><a href="home.php">Easy Fly</a></li>
        <li style="float:right"><a class="active" href="login.php">Login</a></li>
    </ul>
    <div class="log">
        <img src="assets/logo.png">
        <div class="form1">
            <div class="container">
                
                <form action="loginprocess.php" method = "post">
                <div class="formgroup">
                
                <div class="inputBx">
                <h2>Login</h2>
                    <p>Username/ Email</p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                        <input type="email" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="rusername" id="username" formControlName="username">
                    </div>
                    <br>
                    <p>Password</p>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="rpassword" formControlName="password">
                    </div>
                    <br>
                    <button class="btn" type="submit">Log In</button>
                    <br><br>
                    <p class = "account"><a href = "signup.php">Don't have an account? <span>Sign Up</span></a></p>

                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>