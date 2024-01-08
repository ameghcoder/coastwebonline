let toggleButton = document.getElementById('Toggle1');
let htmlEle = document.getElementsByTagName('html')[0];

toggleButton.addEventListener("click", function () {
    if (toggleButton.checked) {
        htmlEle.classList.add('dark');
        htmlEle.classList.remove('light');
        localStorage.setItem('theme', 'dark');
    } else {
        htmlEle.classList.add('light');
        htmlEle.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
})

function init() {
    if (localStorage.getItem('theme') === 'dark') {
        htmlEle.classList.add('dark');
        htmlEle.classList.remove('light');
    } else {
        htmlEle.classList.add('light');
        htmlEle.classList.remove('dark');
    }
}

if (document.readyState === 'interactive') {
    init();
} else {
    document.addEventListener('DOMContentLoaded', () => {
        init();
    })
}