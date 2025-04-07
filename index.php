

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarterWave</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styles/headres.css">
    <link rel="stylesheet" href="styles/indres.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Baumans&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/0fccdfff4a.js" crossorigin="anonymous"></script>
    <style>
        nav ul li:first-child a {
            opacity: 1;
            pointer-events: none;
        }
    </style>
    <link rel="shortcut icon" href="img/logowb.png" type="image/x-icon">
</head>

<body>
    <nav>
        <div class="logo-container">
            <a href="index.php" class="logo-pic">
                <img src="img/logoww.png" alt="">
            </a>
            <a class="logo" href="index.php">
                <h1>StarterWave</h1>
            </a>
        </div>
        <ul>
            <li>
                <a href="index.php"><img src="img/house-chimney.png" alt="">Home</a>
            </li>
            <li>
                <a href="aboutus.html"><img src="img/info.png" alt="">About Us</a>
            </li>
            <li>
                <a href="portfolio.html"><img src="img/briefcase.png" alt="">Portfolio</a>
            </li>
        </ul>
    </nav>
    <ul class="mob-menu">
        <li>
            <a href="index.php" class="active">
                <img src="img/house-chimney.png" alt="">
                <p>Home</p>
            </a>
        </li>
        <li>
            <a href="aboutus.html">
                <img src="img/info.png" alt="">
                <p>About Us</p>
            </a>
        </li>
        <li>
            <a href="portfolio.html">
                <img src="img/briefcase.png" alt="">
                <p>Portfolio</p>
            </a>
        </li>
    </ul>
    <marquee class="mar1" direction="" scrollamount="20">&#128680;Limited Time Offer!&#128680;
        Get an Amazing <span style="color: rgb(255, 52, 52);">20% OFF</span> on your Website Cost + 6 months of <span
            style="color: red;">FREE Hosting!</span> Act now this Deal <span style="color: red;">won’t Last Long!</span>
    </marquee>
    <div class="para">
        <div class="p-head">
            <h2>Don't worry about Quality and Cost !</h2>
        </div>
        <div class="pcont">
            <p>We are dedicated to delivering a project that exceeds expectations at an affordable cost. As young and
                talented learners, we are driven to create remarkable solutions that stand out in the web world. Trust
                our
                passion and talent to create something extraordinary together!</p>
            <img src="img/professional-development.png" alt="">
        </div>
    </div>
    <div class="para">
        <div class="p-head">
            <h2>Your Website, Our Commitment !</h2>
        </div>
        <div class="pcont">
            <p>We’re with you every step, from shaping your vision to delivering stunning designs and seamless support.
                Even after launch, we ensure your website stays flawless and grows with your business. With seamless
                support and care, we’re not just building a website we’re building your
                success.</p>
            <img src="img/team.png" alt="">
        </div>
    </div>
    <div class="cta">
        <h2 id="main">Together We’ll Rise !</h2>
    </div>
    <div class="con">
        <form action="action.php" method="post">
            <?php
                session_start();
            ?>    
            <div class="input-box">
                <input type="text" name="name" class="inputs"  value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                <span>Name</span>
                <p style="color:red"><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?></p>
            </div>
            <div class="input-box">
                <input type="tel" name="mobile" placeholder="" class="inputs" value="<?php echo htmlspecialchars($_POST['mobile'] ?? ''); ?>" required>
                <span>Mobile Number</span>
                <?php echo isset($_SESSION['mobile']) ? "<p style='color:red;'>{$_SESSION['mobile']}</p>" : ""; ?>
            </div>
            <div class="input-box">
                <input type="email" name="mail" placeholder="" class="inputs"  value="<?php echo htmlspecialchars($_POST['mail'] ?? ''); ?>" required>
                <span>Email</span>
                <?php echo isset($_SESSION['email']) ? "<p style='color:red;'>{$_SESSION['email']}</p>" : ""; ?>
            </div>
            <div class="input-box">
                <input type="text" name="project" placeholder="" class="inputs"  value="<?php echo htmlspecialchars($_POST['project'] ?? ''); ?>" required>
                <span>Project Name</span>
                <?php echo isset($_SESSION['project_name']) ? "<p style='color:red;'>{$_SESSION['project_name']}</p>" : ""; ?>
            </div>
            <div class="input-box">
                <textarea name="description" placeholder="" class="inputs"  value="<?php echo htmlspecialchars($_POST['description'] ?? ''); ?>" required></textarea>
                <span>Describe about the project</span>
                <?php echo isset($_SESSION['project_description']) ? "<p style='color:red;'>{$_SESSION['project_description']}</p>" : ""; ?>
            </div>
            <?php
                session_destroy();
            ?>    
            <button type="submit" value="Submit" id="sub" name="submit">Submit</button>
        </form>
    </div>
    <button onclick="toScroll()" class="scroll-btn" id="sbtn">Rise with Us!</button>
    <div class="projects">
        <h2 id="proj-head">Our Crafts:</h2>
        <div class="proj-cont">
            <a href="#" class="proj-card">
                <img src="img/revlogo.png" alt="">
                <img src="img/logo222.png" alt="">
            </a>
            <a href="#" class="proj-card">
                <img src="img/favicon.png" alt="">
                <img src="img/fulllogotra.png" alt="">
            </a>
            <a href="#" class="proj-card">
                <img src="img/salad.png" alt="">
                <h3>Food Palace</h3>
            </a>
        </div>
    </div>
    <div class="services">
        <h2 id="shead">Our Services:</h2>
        <div class="serv-container">
            <div class="service" id="service1">
                <h3>Frontend Development</h3>
                <div class="serv-img">
                    <img src="img/html.png" alt="">
                    <img src="img/css-3.png" alt="">
                    <img src="img/js.png" alt="">
                    <img src="img/library.png" alt="">
                </div>
            </div>
            <div class="service" id="service2">
                <h3>Backend Development</h3>
                <div class="serv-img">
                    <img src="img/sql-server.png" alt="">
                    <img src="img/mysql.png" alt="">
                    <img src="img/leaf.png">
                    <img src="img/php.png" alt="">
                </div>
            </div>
            <div class="service" id="service3">
                <h3>Digital Marketing</h3>
                <div class="serv-img">
                    <img src="img/seo.png" alt="">
                    <img src="img/sem.png" alt="">
                    <img src="img/social-media.png" alt="">
                    <img src="img/solutions.png" alt="">
                </div>
            </div>
            <div class="service" id="service4">
                <h3>Other Services</h3>
                <div class="serv-img">
                    <img src="img/api.png" alt="">
                    <img src="img/responsive-design.png" alt="">
                    <img src="img/maintainance.png" alt="">
                    <img src="img/customer-support.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <a href="index.php" class="flogo">
            <h1>StarterWave</h1>
        </a>
        <div class="social">
            <h2>Social Media:</h2>
            <a href="https://wa.me/9014709040?text=Hi%20,Let's%20Rise%20Together%20!" target="_blank"><i
                    class="fa-brands fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/k-harsha-vardhan9/" target="_blank"><i
                    class="fa-brands fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/starterwave25" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="contact">
            <h2>Contact Us:</h2>
            <a href="tel:+91 9398927019">+91 9398927019</a>
            <a href="tel:+91 7981629173">+91 7981629173</a>
            <a href="mailto:harshamahitha2079@gmail.com">starterwave25@gmail.com</a>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>

</html>