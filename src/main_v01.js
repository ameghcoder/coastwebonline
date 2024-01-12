
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
    document.getElementById('sendmsg').addEventListener('click', function () {
        // Get values from the form
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('message', message);

        // Send POST request using fetch
        fetch('https://oceanofcode.000webhostapp.com/api', {
            method: 'POST',
            body: formData
        }).then(response => response.json()).then(data => {
            // Handle the response
            console.log(data);
            // alert(data.message); // You can handle the response as needed
        }).catch(error => {
            console.error('Error:', error);
            // alert('An error occurred. Please try again.');
        });
    });
}

if (document.readyState === 'interactive') {
    init();
} else {
    document.addEventListener('DOMContentLoaded', () => {
        init();
    })
}