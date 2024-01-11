
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
        toggleButton.checked = true;
    } else {
        htmlEle.classList.add('light');
        htmlEle.classList.remove('dark');
    }

    // Hamburger code
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('nav');

    let hamburgerOpen = false;
    hamburger.addEventListener('click', function () {
        if (hamburgerOpen === false) {
            nav.classList.remove('-left-full');
            hamburgerOpen = true;
        } else if (hamburgerOpen === true) {
            nav.classList.add('-left-full');
            hamburgerOpen = false;
        }
    })

    // Popup code
    const Popup = document.getElementById('popup');
    const contactus = document.getElementById('contactbtn');
    const close = document.getElementById('close');

    contactus.addEventListener('click', function () {
        Popup.style.display = 'flex'
    })

    close.addEventListener('click', function () {
        Popup.style.display = 'none';
    })


    // let's talk code 
    function sendData(url, data) {
        return new Promise((resolve, reject) => {
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', url, true);
            xhttp.onreadystatechange = () => {
                if (this.readyState == 4 && this.status == 200) {
                    resolve(this.responseText);
                } else {
                    reject(new Error("Page not found"));
                }
            }
            xhttp.send(data);
        })
    }

    const sendmsg = document.getElementById('sendmsg');

    sendmsg.addEventListener('click', function () {
        sendData("{{url}}", "data").then((data) => {
            console.log(data);
        }).catch((err) => {
            console.error(err);
        })
    })
}

if (document.readyState === 'interactive') {
    init();
} else {
    document.addEventListener('DOMContentLoaded', () => {
        init();
    })
}