const init = () => {
    const win_width  = document.body.clientWidth;
    const win_height = document.body.clientHeight;

    // set the top position in px of header
    const header = document.getElementById('header');
    let tempHeight = header.clientHeight;
    header.style.top = (win_height - tempHeight) / 2 + 'px';

    // text slider from up to down
    const textSlider = document.getElementById("text-slider-upDown");
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
    }, 3000)

    // duplicate elements
    const blobContainer = document.querySelector('.blob-container');
    blobContainer.insertAdjacentElement('afterend', blobContainer.cloneNode(true));
}
document.readyState === "interactive" ? init() : document.addEventListener('DOMContentLoaded', init);