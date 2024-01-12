
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

    const sentBtn = document.getElementById('sendmsg');
    // let's talk code 
    sentBtn.addEventListener('click', function () {
        sentBtn.innerText = "Wait ...";
        // Get values from the form
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();

        if (name === "" || email === "" || message === "") {
            return false;
        }

        const formData = new FormData();
        formData.append('name', name);
        formData.append('email', email);
        formData.append('message', message);

        // Send POST request using fetch
        fetch('https://cwo.jsrblogs.com/api', {
            method: 'POST',
            body: formData
        }).then(response => response.json()).then(data => {
            document.getElementById('name').value = document.getElementById('email').value = document.getElementById('message').value = "";
            // Handle the response
            if (data["success"] === true) {
                sentBtn.innerHTML = "Sent Successfully<br>We will contact you soon.";
                sentBtn.style.backgroundColor = "lime";
                setTimeout(() => {
                    sentBtn.innerHTML = "Send Message";
                    sentBtn.style.backgroundColor = "";
                }, 5000);
            }
        }).catch(error => {
            document.getElementById('name').value = document.getElementById('email').value = document.getElementById('message').value = "";
            sentBtn.innerHTML = "Something went wrong<br>Please try again";
            sentBtn.style.backgroundColor = "red";
            setTimeout(() => {
                sentBtn.innerHTML = "Send Message";
                sentBtn.style.backgroundColor = "";
            }, 5000);
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