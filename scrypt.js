document.querySelector(".menu-button").addEventListener('click',function(){
    this.classList.toggle("menu-button_active");
    document.querySelector(".menu-body").classList.toggle("menu-body_active");
})