
document.addEventListener("DOMContentLoaded",function(){
    const menuItems_d_or_f = document.querySelectorAll(".product-menu-domestic-foreign")
    const sections_d_or_f = document.querySelectorAll(".product-domestic-and-foreign")

    function onScroll(){
        let scrollPosition_d_or_f = document.documentElement.scrollTop;
        sections_d_or_f.forEach((div,index)=>{
            if(scrollPosition_d_or_f >= div.offsetTop-200 && scrollPosition_d_or_f < div.offsetTop + div.offsetHeight - 200){
                menuItems_d_or_f.forEach(item => item.classList.remove("product-active-menu"));
                menuItems_d_or_f[index].classList.add("product-active-menu");
            }
        });
    }

    const menuKind = document.querySelectorAll(".menu-kind");
    const sectionsKind = document.querySelectorAll(".product-main-option");
    function kindOnScroll(){
        const scrollPositionKind = document.documentElement.scrollTop;
        sectionsKind.forEach((div,index) =>{
            if(scrollPositionKind >= div.offsetTop -200 && scrollPositionKind < div.offsetTop + div.offsetHeight - 200){
                menuKind.forEach(item => item.classList.remove("product-active-menu"));
                menuKind[index].classList.add("product-active-menu");
            }
        });
    }
    document.addEventListener("scroll",onScroll);
    document.addEventListener("scroll",kindOnScroll);
});
// click để đi đến phần muốn xem
function scrollSectionToView(id){
    document.getElementById(id).scrollIntoView({behavior: 'smooth'})


}
// -------------------------------------sliodeshow-----------------------------------------------------------
var slideIndexSeeMore = 0;
showSlides();
function showSlides(){
    var i;
    var slides = document.querySelectorAll(".slideshow-see-more-container .slideshow-see-more");
    var temp;
    for(i = 0; i<slides.length; i++){
        slides[i].style.display ="none";
    }
    slideIndexSeeMore++;
    if(slideIndexSeeMore >= 4){  
        slideIndexSeeMore= 0;
    }
    slides[slideIndexSeeMore].style.display="block";    
    temp=slideIndexSeeMore +4;
    while(temp < slides.length){
        slides[temp].style.display="block";
        temp=temp+4;
    }
    setTimeout(showSlides,3000);
}
