<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>\
    <link 
    rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" 
    integrity="sha384-fZCoUih8XsaUZnNDOiLqnby1tMJ0sE7oBbNk2Xxf5x8Z4SvNQ9j83vFMa/erbVrV" 
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/portfolio.css">
</head>
<body>
    <header class="header">
    <a class="navbar-brand" href="<?php echo Base_url(); ?>Home">
          <img src="assets/img/back.png" align="left" height="40px" class="main-logo main-logo-putih"></a>
        <i class="fa-solid fa-bars" id="menu-icon"></i>
        <nav class="navbar">
            <a href="#intro">Introduction</a>
            <a href="#work">Work Experience</a>
            <a href="#hobby">Hobby</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Sultan Fauzan Ashari</h1>
            <h3>And I'm a <span>College Student</span></h3>
            <p>Hi, guys! Welcome to my website. Here you will know at least some of<br> my entire life story.</p>
            <div class="social-media">
                <a href="https://www.instagram.com/halfsvltan/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sultan-fauzan-ashari-b62749232/"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="facebook.com/Sultan Fauzan Ashari/"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <a href="https://drive.google.com/file/d/1orStH3Tt7pToxlyyElGDSr7sqJuWaHqA/view?usp=sharing" class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <img src="assets/img/home.png" alt="">
        </div>
    </section>

    <section class="intro" id="intro">
        <div class="intro-img">
            <img src="assets/img/intro.png" alt="">
        </div>

        <div class="intro-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>College Student</h3>
            <p>Introduce, my name is Sultan Fauzan Ashari. I was born on March 22, 2002.<br> I am a student of the Information Technology study program<br> at one of the private Universities in Jakarta.<br> I myself live in the West Jakarta area.</p>
            <a href="" class="btn">Read More</a>
        </div>
    </section>

    <section class="work" id="work">
        <h2 class="heading">My Work <span>Experience</span></h2>

        <div class="work-container">
            <div class="work-box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Crew Store</h3>
                <p>I work as a crew store at the Angkringan NKRI Kebon Jeruk shop (West Jakarta). Work from 13.00 WIB to 23.00 WIB. Which starts from product preparation to maintaining the shop and serving customers.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="work-box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Kitchen Crew (Part-Time)</h3>
                <p>I work as a Kitchen Crew (Part-Time) in a Korean restaurant, called Bae Bae Galbi (Tanjung Duren, West Jakarta). Like other parts of the Kitchen Crew, I am in charge of preparing products or ingredients and cooking customer orders.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="work-box">
                <i class="fa-solid fa-utensils"></i>
                <h3>Kitchen Crew (Part-Time)</h3>
                <p>I work as a Kitchen Crew (Part-Time) as well. But, this time I worked in a different restaurant. That is, named Uptown Brew Cafe. Located in Green Lake City, Cipondoh, Tangerang City.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="work-box">
                <i class="fa-solid fa-code"></i>
                <h3>Freelance Web Developer</h3>
                <p>I created a simple website for my brother even though the pay was not much. But, I'm grateful for at least the results themselves.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <section class="hobby" id="hobby">
        <h2 class="heading">My <span>Hobbies</span></h2>
        <div class="hobby-container">
            <div class="hobby-box">
                <img src="assets/img/code.jpg" alt="">
                <div class="hobby-layer">
                    <h4>Ngoding</h4>
                    <p>Coding</p>
                </div>
            </div>
            <div class="hobby-box">
                <img src="assets/img/futsal.jpg" alt="">
                <div class="hobby-layer">
                    <h4>Futsal</h4>
                    <p>Playing Football</p>
                </div>
            </div>
            <div class="hobby-box">
                <img src="assets/img/basket.jpg" alt="">
                <div class="hobby-layer">
                    <h4>Bermain Basket</h4>
                    <p>Playing Basketball</p>
                </div>
            </div>
            <div class="hobby-box">
                <img src="assets/img/windah.jpg" alt="">
                <div class="hobby-layer">
                    <h4>Menonton Windah Basudara</h4>
                    <p>Watch Windah Basudara's Youtube Channel</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        
        <form action="">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Phone Number">
                <input type="text" placeholder="Subject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 | All Right Reserved.</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>