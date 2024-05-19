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
const init = () => {
    const [windowWidth, windowHeight] = [window.innerWidth, window.innerHeight];

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
        // const custName = document.getElementById("cust_name");
        // const custEmail = document.getElementById("cust_email");
        // const custCountry = document.getElementById("cust_name");
        // const custName = document.getElementById("cust_name");
        // const custName = document.getElementById("cust_name");
        // const custName = document.getElementById("cust_name");
        // const custName = document.getElementById("cust_name");
        send("/api/submit", formData).then((r) => {
            let respJsn = checkJson(r);
            if(respJsn){
                showMsg(respJsn['flag'], respJsn['msg']);
                if(respJsn['flag'] == 's'){
                    document.getElementById("popupCongrat").classList.add("flex");
                    document.getElementById("popupCongrat").classList.remove("hidden");
                    countDownForResendEmail();
                }
                resendButton();
            } else{
                showMsg("e", "Something goes wrong - Try again Later");
                console.log("F-T-Side Error");
            }
        }).catch((e) => {
            showMsg("e", "Something goes wrong - Try again later");
            console.log("F-C-Side Error");
        })
    })
}
document.readyState === "interactive" ? init() : document.addEventListener('DOMContentLoaded', init);