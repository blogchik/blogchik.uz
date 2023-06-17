<header class="header">

    <div class="header__side">

        <a href="./" class="header__logo">
            <img src="./assets/images/logo-rgb.png" alt="Logo">
        </a>

    </div>

    <div class="header__side menu">

        <span class="header__hamburger" id="hamburger_toggle" onclick="hamburger_toggle()">

            <i class="fi fi-rr-menu-burger"></i> Menu

        </span>

        <ul class="header__menu">

            <li class="header__menu_item">

                <a href="./about">About</a>

            </li>

            <li class="header__menu_item">

                <a href="./projects">Projects</a>

            </li>

            <li class="header__menu_item">

                <a href="./resume">Resume</a>

            </li>

            <li class="header__menu_item">

                <a href="./gallery">Gallery</a>

            </li>
        
        </ul>

    </div>

    <div class="header__side">

        <span class="header__theme_toggle" id="theme_toggle" onclick="theme_toggle()">

            <i class="fi fi-rr-moon-stars moon"></i>
            <i class="fi fi-rr-sun sun"></i>

        </span>

    </div>

</header>

<div class="hamburger_menu" id="hamburger_menu">

    <div class="hamburger_menu__background" id="hamburger_toggle" onclick="hamburger_toggle()"></div>

    <div class="hamburger_menu__content">

        <div class="hamburger_menu__head">

            <p class="title">
                Navigation
            </p>

            <span class="hamburger_close" id="hamburger_toggle" onclick="hamburger_toggle()">
                <i class="fi fi-rr-cross-small"></i>
            </span>

        </div>

        <ul class="hamburger_menu__menu">

            <li class="hamburger_menu__menu_item">

                <a href="./about" onclick="hamburger_toggle()">About</a>

            </li>

            <li class="hamburger_menu__menu_item">

                <a href="./projects" onclick="hamburger_toggle()">Projects</a>

            </li>

            <li class="hamburger_menu__menu_item">

                <a href="./resume" onclick="hamburger_toggle()">Resume</a>

            </li>

            <li class="hamburger_menu__menu_item">

                <a href="./gallery" onclick="hamburger_toggle()">Gallery</a>

            </li>
        
        </ul>

    </div>

</div>