
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
}

if (document.readyState === 'interactive') {
    init();
} else {
    document.addEventListener('DOMContentLoaded', () => {
        init();
    })
}


// Popup code

const Popup = document.getElementById('popup');
const contactus = document.getElementById('contactbtn');
let popupstatus = false;
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
                reject("Page not found");
            }
        }
        xhttp.send(data);
    })
}
const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const sendmsg = document.getElementById('sendmsg');

sendmsg.addEventListener('click', function () {
    sendData("{{url}}", "data").then((data) => {
        console.log(data);
    }).catch((err) => {
        console.error(err);
    })
})