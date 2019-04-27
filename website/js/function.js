function toggleTheme () {
    const htmlTag = document.getElementsByTagName('html')[0]
    if (htmlTag.hasAttribute('data-theme')) {
        htmlTag.removeAttribute('data-theme')
        return window.localStorage.removeItem("site-theme")
    }

    htmlTag.setAttribute('data-theme', 'light')
    window.localStorage.setItem("site-theme", "light")
}

function applyInitialTheme () {
    const theme = window.localStorage.getItem("site-theme")
    if (theme !== null) {
        const htmlTag = document.getElementsByTagName("html")[0]
        htmlTag.setAttribute("data-theme", theme)
    }
}

applyInitialTheme();

document
    .getElementById("themeSwitch")
    .addEventListener("click", toggleTheme);