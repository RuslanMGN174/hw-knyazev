window.onload = function () {
    console.log("DOM fully loaded and parsed")

    const page = document.querySelector('body');
    const themeButton = document.querySelector('#toggleswitch');
    let currTheme = "";
    let theme = "";
    const img = document.querySelector('.theme-icon');

    const handleClick = () => {
        currTheme = page.getAttribute("class");
        page.classList.toggle('dark-theme');
        page.classList.toggle('lite');

        img.src = currTheme === "dark-theme"
            ? "src/images/icons/day-and-night_lite.png"
            : "src/images/icons/day-and-night_dark-theme.png";

        theme = currTheme === "dark-theme" ? "lite" : "dark-theme";
        saveThemeToSession(theme);
    }

    themeButton.addEventListener("click", handleClick)
}

function saveThemeToSession(theme) {
    const Request = new XMLHttpRequest();
    Request.open("POST", "./index.php?theme=" + theme, true);
    Request.send();
}