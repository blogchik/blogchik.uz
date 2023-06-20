<!DOCTYPE html>
<html lang="uz">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property=”og:type” content=”website” />
    <meta property="og:title" content="The personal website of Jabborov Abduroziq" />
    <meta property=”og:description” content=”Portfolio, Resume, Gallery and etc.” />
    <meta property=”og:image” content=”https://blogchik.uz/assets/images/ogimage.png” />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:alt" content="Cover Image" />
    <meta property=”og:url” content=”https://blogchik.uz” />

    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:title” content=”The personal website of Jabborov Abduroziq” />
    <meta name=”twitter:description” content=”Portfolio, Resume, Gallery and etc.” />
    <meta name=”twitter:image” content=”https://blogchik.uz/assets/images/ogimage.png” />
    <meta name=”twitter:url” content=”https://blogchik.uz” />

    <title>Jabborov Abduroziq - Personal Website</title>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="icon" type="image/svg+xml" href="./assets/images/logo.svg" />

    <link rel="stylesheet" href="./style/modern-normalize.css">
    <link rel="stylesheet" href="./style/utils.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/components/header.css">
    <link rel="stylesheet" href="./style/components/footer.css">
    <link rel="stylesheet" href="./style/components/hero.css">

</head>
<body>

<?php

include "./src/web/header.php";

?>

<div class="container">

    <div class="section hero">

        <div class="side">

            <div class="avatar">

                <img src="./assets/images/avatar.png" alt="Avatar">

            </div>

        </div>

        <div class="side">

            <h1 class="title">
                Full Stack Web Developer from <span><img data-toggle="tooltip" data-placement="bottom" title="Flag of Uzbekistan" class="flag" src="./assets/images/flag-uzbekistan.png" alt="flag-uzbekistan"> Uzbekistan</span>
            </h1>

        </div>
        
        <div class="side">

            <p class="description">
            Hello, my name is <span>Abduroziq Jabborov</span>. I'm 19 years old and I'm a web developer. My interest in programming started from a young age and this field has become a significant part of my life. I'm always eager to learn new technologies, solve problems, and find creative solutions.
            In web development, I strive to improve myself every day and aim to find the best solution for each project. My goal is to create intuitive, fast, and efficient websites for users.
            </p>

        </div>

        <div class="side">

            <div class="socials">

                <a data-toggle="tooltip" data-placement="bottom" title="@JabborovsBlog" href="https://t.me/JabborovsBlog" class="social" target="_blank">
                    <i class="fi fi-brands-telegram"></i>
                </a>

                <a data-toggle="tooltip" data-placement="bottom" title="@jabborov.abduroziq" href="https://instagram.com/jabborov.abduroziq" class="social" target="_blank">
                    <i class="fi fi-brands-instagram"></i>
                </a>

                <a data-toggle="tooltip" data-placement="bottom" title="@JabborovsTwit" href="https://twitter.com/JabborovsTwit" class="social" target="_blank">
                    <i class="fi fi-brands-twitter"></i>
                </a>

                <a data-toggle="tooltip" data-placement="bottom" title="blogchik" href="https://github.com/blogchik" class="social" target="_blank">
                    <i class="fi fi-brands-github"></i>
                </a>

            </div>

        </div>

    </div>

    <div class="sec-line">

        <!-- <p class="marquee">
        JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER | JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER | JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER
        </p> -->

        <marquee class="marquee" direction="right">
        JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER | JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER | JABBOROV ABDUROZIQ | BLOGCHIK | WEB DEVELOPER | UX/UI DESIGNER
        </marquee>

    </div>

</div>

<?php

include "./src/web/footer.php";

?>

<script src="./src/js/main.js"></script>

</body>
</html>