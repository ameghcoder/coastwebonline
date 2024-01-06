let toggleButton = document.getElementById('Toggle1');
let htmlEle = document.getElementsByTagName('html')[0];

toggleButton.addEventListener("click", function(){
    if(toggleButton.checked){
        htmlEle.classList.add('dark');
        htmlEle.classList.remove('light');
    } else{
        htmlEle.classList.add('light');
        htmlEle.classList.remove('dark');
    }
})