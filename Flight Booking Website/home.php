<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet"  />
  <title>Flight Ticket Booking Website</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

:root {
  --primary-color: #3d5cb8;
  --primary-color-dark: #334c99;
  --text-dark: #0f172a;
  --text-light: #64748b;
  --extra-light: #f1f5f9;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 5rem 1rem;
}

.section__header {
  font-size: 2.5rem;
  font-weight: 600;
  text-align: center;
  line-height: 3rem;
  color: var(--text-dark);
}

.btn {
  padding: 0.75rem 2rem;
  outline: none;
  border: none;
  font-size: 1rem;
  font-weight: 500;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 2rem;
  cursor: pointer;
  transition: 0.3s;
}

.btn:hover {
  background-color: var(--primary-color-dark);
}

a {
  text-decoration: none;
}

img {
  width: 100%;
  display: flex;
}

body {
  font-family: "Poppins", sans-serif;
}

nav {
  max-width: var(--max-width);
  margin: auto;
  padding: 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
}

.nav__logo {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
}

.nav__links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 2rem;
}

.link a {
  font-weight: 500;
  color: var(--text-light);
  transition: 0.3s;
}

.link a:hover {
  color: var(--text-dark);
}
.memories {
  background-color: var(--extra-light);
}

.memories__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
}

.memories__header .section__header {
  max-width: 600px;
}

.memories__header .view__all {
  padding: 1rem 2rem;
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-dark);
  background: transparent;
  white-space: nowrap;
  outline: none;
  border: 1px solid var(--text-light);
  border-radius: 2rem;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.memories__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 5rem;
}

.memories__card {
  padding: 3rem 2rem;
  text-align: center;
  border-radius: 5rem;
  background-color: var(--white);
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.05);
}

.memories__card span {
  display: inline-block;
  padding: 20px 32px;
  margin-bottom: 2rem;
  font-size: 3rem;
  color: var(--white);
  background-color: var(--primary-color);
  border-radius: 100%;
}

.memories__card:nth-child(2) span {
  background-color: #e98b6d;
}

.memories__card:nth-child(3) span {
  background-color: #ffcca3;
}

.memories__card h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--text-dark);
}

.memories__card p {
  color: var(--text-light);
  line-height: 1.75rem;
}

.footer {
  background-color: var(--primary-color);
}

.footer__container {
  display: grid;
  grid-template-columns: 2fr repeat(2, 1fr);
  gap: 5rem;
}

.footer__col h3 {
  font-size: 1.5rem;
  font-weight: 500;
  color: var(--white);
  margin-bottom: 1rem;
}

.footer__col h4 {
  font-size: 1.2rem;
  font-weight: 500;
  color: var(--white);
  margin-bottom: 1rem;
}

.footer__col p {
  color: var(--extra-light);
  margin-bottom: 1rem;
  cursor: pointer;
  transition: 0.3s;
}

.footer__col p:hover {
  color: var(--white);
}

.footer__bar {
  padding: 0.5rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  border-top: 1px solid var(--extra-light);
}

.footer__bar p {
  font-size: 0.9rem;
  color: var(--extra-light);
}

.socials {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.socials span {
  font-size: 1.2rem;
  color: var(--extra-light);
}

@media (width < 1200px) {
  .section__container.header__container,
  .section__container.plan__container,
  .section__container.lounge__container {
    overflow: hidden;
  }

  .memories__grid {
    gap: 3rem;
  }
}

@media (width < 900px) {
  nav .btn {
    display: none;
  }

  .header__container img {
    min-width: 900px;
    margin-left: 50%;
    transform: translateX(-50%);
  }

  .booking__container form {
    grid-template-columns: repeat(2, 1fr);
  }

  .plan__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  .plan__image {
    min-height: 600px;
    grid-area: 1/1/2/2;
  }

  .memories__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
  }

  .lounge__container {
    grid-template-columns: repeat(1, 1fr);
  }

  .lounge__image {
    min-height: 600px;
  }

  .travellers__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .footer__container {
    gap: 2rem;
  }
}
@media (width <style 600px) {
  .nav__links {
    display: none;
  }

  .booking__nav span {
    padding: 1rem 0.5rem;
  }

  .booking__container form {
    grid-template-columns: repeat(1, 1fr);
  }

  .memories__header {
    flex-direction: column;
  }

  .memories__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  .lounge__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  .travellers__grid {
    grid-template-columns: repeat(1, 1fr);
  }

  .footer__container {
    grid-template-columns: 1fr;
  }

  .footer__bar {
    flex-direction: column;
    text-align: center;
  }
}
</style>


</head>

<body>
  <nav>
    <div class="nav__logo">Easy Fly</div>
    <ul class="nav__links">
      <li class="link"><a href="#">Home</a></li>
      <li class="link"><a href="#About">About</a></li>
      <li class="link"><a href="#Trips">My Trips</a></li>
      <li class="link"><a href="#Offers" onclick="msg()">Offers</a></li>
      <li class="link"><a href="#feed.php">Feedback</a></li>
      <li class="link"><a href="adminlogin.php">Admin</a></li>
      <li class="link"><a href="login.php">Sign in </a></li>

    </ul>

    <button class="btn"><a href="#contact"></a>CONTACT</button>
  </nav>
  <header class="section__container header__container">
    <h1 class="section__header">Find And Book<br />A Great Experience</h1>
    <img src="assets/header.jpg" alt="header" />
  </header>
 
      <script>
        function msg() {
          alert("No Offers available");
        }
        
      </script>

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
        <p>Mytrips</p>
        <p>Offers</p>
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

