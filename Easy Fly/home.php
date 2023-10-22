<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="home.css" />
  <title>Flight Ticket Booking Website</title>
</head>

<body>
  <nav>
    <div class="nav__logo" id="home">Easy Fly</div>
    <ul class="nav__links">
      <li class="link"><a href="#">Home</a></li>
      <li class="link"><a href="#About">About</a></li>
      <li class="link"><a href="feed.php">Feedback</a></li>
      <li class="link"><a href="adminlogin.php">Admin</a></li>
      <li class="link"><a href="login.php">Sign in </a></li>
      <li class="link"><a href="#" id="loginLink" onclick="checkLogin()">Search Flights</a></li>
  </ul>
  </nav>

  <script>
function checkLogin() {
    var isLoggedIn = false;
    
    if (!isLoggedIn) {
        alert("LOGIN FIRST!!!"); 
    } else {
        window.location.href = "your_actual_flight_search_url_here";
    }
}
</script>
  <header class="section__container header__container">
    <h1 class="section__header">Find And Book<br />A Great Experience</h1>
    <img src="assets/header.jpg" alt="header" />
  </header>


  <section class="memories">
    <div class="section__container memories__container">
      <div class="memories__header">
        <h2 class="section__header">
          Travel to make memories all around the world
        </h2>
      </div>
      <div class="memories__grid">
        <div class="memories__card">
          <span><i class="ri-calendar-2-line"></i></span>
          <h4>Book & relax</h4>
          <p>
            With "Book and Relax," you can sit back, unwind, and enjoy the
            journey while we take care of everything else.
          </p>
        </div>
        <div class="memories__card">
          <span><i class="ri-shield-check-line"></i></span>
          <h4>Smart Checklist</h4>
          <p>
            Introducing Smart Checklist with us, the innovative solution
            revolutionizing the way you travel with our airline.
          </p>
        </div>
        <div class="memories__card">
          <span><i class="ri-bookmark-2-line"></i></span>
          <h4>Save More</h4>
          <p>
            From discounted ticket prices to exclusive promotions and deals,
            we prioritize affordability without compromising on quality.
          </p>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="section__container footer__container">

      <div class="footer__col" id="About">
        <h3>Easy Fly</h3>
        <p>
          Where Excellence Takes Flight. With a strong commitment to customer
          satisfaction and a passion for air travel, Easy Fly Airlines offers
          exceptional service and seamless journeys.
        </p>
        <p>
          From friendly smiles to state-of-the-art aircraft, we connect the
          world, ensuring safe, comfortable, and unforgettable experiences.
        </p>
      </div>
      <div class="footer__col">
        <h4>INFORMATION</h4>
        <p>Home</p>
        <p>About</p>
        <p>Feedback</p>
      </div>
      <div class="footer__col" id="contact">
        <h4>CONTACT</h4>
        <p>easyfly@gmail.com</p>
        <p>+91-915-554-0702</p>
      </div>
    </div>
    <div class="section__container footer__bar">
      <p>Copyright © 2023 Easy Fly Airlines. All rights reserved.</p>
      <div class="socials">
        <span><i class="ri-facebook-fill"></i></span>
        <span><i class="ri-twitter-fill"></i></span>
        <span><i class="ri-instagram-line"></i></span>
        <span><i class="ri-youtube-fill"></i></span>
      </div>
    </div>
  </footer>
</body>

</html>

