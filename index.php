<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radit | Personal Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;600;700;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <header>
        <nav>
            <ul class="left-nav">
                <li><a href="#about">ABOUT ME</a></li>
                <li><a href="#skill">SKILLS</a></li>
                <li><a href="#achievement">ACHIEVEMENTS</a></li>
            </ul>
            <div class="mid-nav">
                <img src="img/LOGO.SVG">
            </div>
            <div class="right-nav">
                <div class="right-nav-link">
                    <a href="#social">SOCIALS</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="landing-page-container">
            <div class="welcome-text">
                <p>Hey! My name is</p>
                <h1>Raditya A.<br>Rachmadie</h1>
                <p>Web Developer in-training</p>
            </div>
            <div class="welcome-img">
                <img src="img/standing.png">
            </div>
        </div>

        <div class="about-container" id="about">
            <div class="about-img">
                <img src="img/sitting.png">
            </div>
            <div class="about-wrapper">
                <h2>About me.</h2>
                <p>Hey! welcome to my personal website. My name is Raditya Atallahasyrif Rachmadie, but you can call me Radit. I’m studying at SMK Telkom 1 Medan, taking their Software Engineering Class. I have been doing web development (particularly in Front-End) for about a year now. I am no expert but i am willing to learn.</p>
                <h3>"TRUST THE PROCESS"</h3>
            </div>
        </div>

        <div class="skill-container" id="skill">
            <div class="skill-wrapper">
                <h2><span>my</span>Skills</h2>
                <div class="logo-wrapper">
                    <div class="html"></div>
                    <div class="css"></div>
                    <div class="js"></div>
                    <div class="php"></div>
                    <div class="python"></div>
                    <div class="java"></div>
                    <div class="english"></div>
                    <div class="german"></div>
                </div>
            </div>
        </div>

        <div class="achievement-container" id="achievement">
            <h2>ACHIEVEMENTS</h2>
            <h3>Academic</h3>
            <div class="card-wrapper">
                <div class="card ostn"></div>
                <div class="card on-eng"></div>
                <div class="card on-his"></div>
                <div class="card on-infor"></div>
            </div>
        </div>

        <div class="social-container" id="social">
            <h2>Follow me<br>on my<br>Socials</h2>
            <div class="social-link-wrapper">
                <div class="insta"></div>
                <div class="twt"></div>
                <div class="github"></div>
            </div>
        </div>
    </main>

    <footer>
        <div class="logo">
            <img src="img/logo.svg">
        </div>
        <div class="information">
            <div class="email"></div>
            <div class="address"></div>
            <div class="school"></div>
        </div>
    </footer>

    <script>
        feather.replace()
    </script>
</body>
</html>