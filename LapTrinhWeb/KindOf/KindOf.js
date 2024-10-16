//-----------------------------carousel----------------------------------------------
var next_btn_home = document.querySelector('.home-carousel-arrows-next');
var prev_btn_home = document.querySelector('.home-carousel-arrows-prev');
var carousel_home = document.querySelector('.home-carousel');
var list_home = document.querySelector('.home-carousel-list');
var item_home = document.querySelectorAll('.home-carousel-item');
var running_time_home = document.querySelector('.home-carousel-time-running');

let TimeRunning_home = 3000;
let TimeAutoNext = 7000;

prev_btn_home.onclick = function(){
    showslider_home("home-carousel-arrows-prev");
}
next_btn_home.onclick = function(){
    showslider_home("home-carousel-arrows-next")
}
let runTimeOut_home
let runNextAuto_home = setTimeout(() => {
    next_btn_home.click()
}, TimeAutoNext)
function resetTimeAnimation(){
    running_time_home.style.animation = 'none'
    running_time_home.offsetHeight
    running_time_home.style.animation = null
    running_time_home.style.animation = 'runningTime 7s linear 1 forwards'
}
function showslider_home(type){
    let sliderItempDom = list_home.querySelectorAll(".home-carousel-item")
    if(type === "home-carousel-arrows-next"){
        list_home.appendChild(sliderItempDom[0]);
        carousel_home.classList.add("home-carousel-arrows-next");
    }else{
        list_home.prepend(sliderItempDom[sliderItempDom.length - 1]);
        carousel_home.classList.add("home-carousel-arrows-prev");
    }

    clearTimeout(runTimeOut_home)

    runTimeOut_home = setTimeout(()=>{
        carousel_home.classList.remove('home-carousel-arrows-prev');
        carousel_home.classList.remove('home-carousel-arrows-next');
    }, TimeRunning_home)

    clearTimeout(runNextAuto_home)

    runNextAuto_home = setTimeout(()=>{
        next_btn_home.click()
    }, TimeAutoNext)
    resetTimeAnimation()
}
resetTimeAnimation()