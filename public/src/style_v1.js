function send(url, data){
    return new Promise((res, rej) => {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", url, true);
        xhr.setRequestHeader("x-csrf-token", document.querySelector("meta[name='csrf-token']").getAttribute('content'));
        xhr.onreadystatechange = () => {
            if(xhr.readyState == 4 && xhr.status == 200){
                res(xhr.responseText);
            } else if(xhr.status == 500){
                showMsg("e", "Internal Server Error - Reload Page")
                rej(false);
            }
        }
        xhr.onerror = (e) => {
            showMsg("e", "Something went wrong - Try Again Later");
            rej(false);
        }
        xhr.send(data);
    })
}
/**
 * 
 * @param {string} data The data or text that you want to check or validate
 * @param {string} type Type of data means 
 * @returns 
 */
function checkers(data, type){
    const checkType = ["name", "phone_number", "email", "text"];
    const checkPattern = [
        /^[a-zA-ZÀ-ÖØ-öø-ÿ' -]+$/,
        /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/,
        /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,7}\b/,
        /^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?\t\n ]*$/
    ];
    if(type === checkType[0]){
        return checkPattern[0].test(data);
    } else if(type === checkType[1]){
        return checkPattern[1].test(data);
    } else if(type === checkType[2]){
        return checkPattern[2].test(data);
    } else if(type === checkType[3]){
        return checkPattern[3].test(data);
    }
}
const checkJson = (e) => {
    try{
        return JSON.parse(e);
    } catch{
        return false;
    }
}
const init = () => {
    // check theme mode
    if(localStorage.getItem("theme") !== null){
        if(localStorage.getItem("theme") == "light"){
            document.body.setAttribute("data-theme", "light");
        } else{
            document.body.setAttribute("data-theme", "dark");
            document.getElementById("themeChanger").checked = true;
        }
    }

    // text slider from up to down
    const textSlider = document.getElementById("text-slider-upDown");
    textSlider && function(){
        let tempHei = textSlider.clientHeight;
        let tempTransYHei = 0;
        let tempSlideCountResetter = 0;
        setInterval(()=>{
            if(tempSlideCountResetter == textSlider.children.length - 1){
                tempTransYHei = 0;
                tempSlideCountResetter = -1;
            } else{
                tempTransYHei += (tempHei/3 + 8);
            }
            textSlider.style.transform = `translateY(-${tempTransYHei}px)`;
            tempSlideCountResetter++;
        }, 1000)
    }()

    // duplicate elements
    const blobContainer = document.querySelector('.blob-container');
    blobContainer && blobContainer.insertAdjacentElement('afterend', blobContainer.cloneNode(true));

    // duplicate infinity slider content for infinity effect
    const infinitySlider = document.querySelectorAll('.infinity-slider-container');
    infinitySlider && infinitySlider.forEach(ele => {
        let duplic = ele.children[0].cloneNode(true);
        let _2duplic = duplic.outerHTML + duplic.outerHTML;
        ele.insertAdjacentHTML('beforeend', _2duplic);
    })

    // hover
    const hamburger = document.getElementById("hamburger");
    const hamburgerLineId = document.getElementById("hamburger-line");
    const hamburgerLine = document.querySelectorAll(".hamburgerLine");
    const menuContainer = document.getElementById("menu");
    let menu = false;
    hamburger.addEventListener('click', () => {
        if(!menu){
            hamburgerLine[0].classList.add("w-8");
            hamburgerLine[2].classList.add("w-8");
            hamburgerLine[0].classList.remove("w-10");
            hamburgerLine[2].classList.remove("w-10");
            hamburgerLine[1].classList.add("w-10");
            hamburgerLine[1].classList.remove("w-8");
            hamburgerLineId.classList.remove("items-start");
            hamburgerLineId.classList.add("items-end");
            menuContainer.classList.remove("hidden");
            menuContainer.classList.add("flex");
            menu = true;
        } else if(menu){
            hamburgerLine[0].classList.remove("w-8");
            hamburgerLine[2].classList.remove("w-8");
            hamburgerLine[0].classList.add("w-10");
            hamburgerLine[2].classList.add("w-10");
            hamburgerLine[1].classList.remove("w-10");
            hamburgerLine[1].classList.add("w-8");
            hamburgerLineId.classList.remove("items-end");
            hamburgerLineId.classList.add("items-start");
            menuContainer.classList.add("hidden");
            menuContainer.classList.remove("flex");
            menu = false;
        }
    })

    // branding show case
    const mockupChangeBtn = document.querySelectorAll(".mockup-change-btn");
    const mockupImage = document.querySelectorAll(".mockup-img > img");
    const mockupChanger = name => {
        mockupChangeBtn.forEach(_temp_btn => {
            if(_temp_btn.getAttribute("data-pathName") == name){
                _temp_btn.classList.add("active__selected--box");
            } else{
                _temp_btn.classList.remove("active__selected--box");
            }
        })
        mockupImage.forEach(_temp_img => {
            let _create_url = _temp_img.getAttribute("data-baseUrl");
            _create_url = _create_url.replace("{{REPLACE}}", name);
            _temp_img.setAttribute("src", _create_url);
        })
    }
    mockupChangeBtn.forEach(btn => {
        btn.addEventListener("click", function() {
            let tempBtn = btn.getAttribute("data-pathName");
            mockupChanger(tempBtn);
        })
    })
    
    // click image to zoom
    const imgClickZoom = document.querySelectorAll("img.img_to_model");
    const imgModel = document.getElementById("image-model");
    const rmModelBtn = document.getElementById("remove-model");
    const imgModelUrl = document.getElementById("model-image-url");
    imgClickZoom.forEach(img => {
        img.addEventListener("click", (e) => {
            let _url = e.target.getAttribute("src");
            imgModelUrl.setAttribute("src", _url);
            imgModel.classList.remove("hidden");
            imgModel.classList.add("flex");
        })
    })
    rmModelBtn.addEventListener("click", () => {
        imgModelUrl.setAttribute("src", "#");
        imgModel.classList.add("hidden");
        imgModel.classList.remove("flex");
    })

    // send form details
    const sendButton = document.getElementById("sendForm");
    sendButton && sendButton.addEventListener("click", ()=>{
        const custName = checkers(document.getElementById("cust_name").value, "name") ? document.getElementById("cust_name").value : false;
        const custEmail = checkers(document.getElementById("cust_email").value, "email") ? document.getElementById("cust_email").value : false;
        const custPhoneNumber = checkers(document.getElementById("cust_phone").value, "phone_number") ? document.getElementById("cust_phone").value : false;
        const custMsg = checkers(document.getElementById("cust_msg").value, "text") ? document.getElementById("cust_msg").value : false;
        const custService = document.getElementById("cust_services").value;
        const custCountryDial = document.getElementById("cust_country").value;
        const custCountryCode = document.querySelector(`option[value="${custCountryDial}"]`).getAttribute("data-countrycode");

        const msgbox = document.getElementById("msgbox");
        if(custName && custEmail && custPhoneNumber && custMsg && custService && custCountryDial && custCountryCode){
            const dataObj = {
                name: custName,
                email: custEmail,
                tel: custPhoneNumber,
                msg: custMsg,
                service: custService,
                countrydial: custCountryDial,
                countrycode: custCountryCode
            }
            const formData = new FormData();
            formData.append("data", JSON.stringify(dataObj));

            send("/api/submit", formData).then((r) => {
                let respJsn = checkJson(r);
                if(respJsn){
                    if(respJsn['flag'] === 's'){
                        sendButton.innerText = respJsn['msg'];
                        sendButton.style.background = "lime";
                    } else{
                        sendButton.innerText = respJsn['msg'];
                        sendButton.style.background = "red";
                    }
                } else{
                    sendButton.innerText = "Something went wrong, Try again Later or Email contact@coastweb.online";
                    sendButton.style.background = "red";
                }
                sendButton.setAttribute("disabled", "true");
            }).catch((e) => {
                console.error("F-C-Side Error");
            })
        } else{
            if(!custName){
                msgbox.innerText = "Invalid Name value";
            } else if(!custPhoneNumber){
                msgbox.innerText = "Invalid Phone Number value";
            } else if(!custEmail){
                msgbox.innerText = "Invalid Email value";
            } else if(!custMsg){
                msgbox.innerText = "Invalid Message value";
            } else{
                msgbox.innerText = "Invalid Values, Try Again";
            }
            setTimeout(() => {
                msgbox.innerText = "";
            }, 3000);
        }
    })

    // toggle changer
    const themeChanger = document.getElementById("themeChanger");
    themeChanger.addEventListener("change", (e) => {
        if(e.target.checked){
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        } else{
            document.body.setAttribute("data-theme", "light");
            localStorage.setItem("theme", "light");
        }
    })
}
document.readyState === "interactive" ? init() : document.addEventListener('DOMContentLoaded', init);