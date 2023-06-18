window.onload = function(){

    const theme = localStorage.getItem("theme");
    const theme_toggle = document.querySelector("#theme_toggle");

    theme && document.body.classList.add(theme);
    theme && theme_toggle.classList.add(theme);

}

function theme_toggle(){

    const theme = localStorage.getItem("theme");
    const theme_toggle = document.querySelector("#theme_toggle");

    if(theme == "theme-light"){

        localStorage.setItem("theme", "theme-dark");
        document.body.classList.remove("theme-light");
        theme_toggle.classList.remove("theme-light");

    }else{

        localStorage.setItem("theme", "theme-light");
        document.body.classList.add("theme-light");
        theme_toggle.classList.add("theme-light");

    }

}

function hamburger_toggle(){

    const hamburger_menu = document.querySelector("#hamburger_menu");

    if(hamburger_menu.className == "hamburger_menu active"){

        hamburger_menu.className = "hamburger_menu";

    }else{

        hamburger_menu.className = "hamburger_menu active";

    }

}