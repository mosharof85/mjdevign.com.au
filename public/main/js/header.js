$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });
});

// $(function() {
//     $(window).on("load", function() {
//         if($(window).scrollTop() > 50  && $(window).width()>991) {
//             $("header").addClass("active");
//         } else {
//             $("header").removeClass("active");
//         }
//     });
// });

window.addEventListener('DOMContentLoaded', ()=>{
    let toggler = document.querySelector('header .toggler');
    let nav = document.querySelector('header nav')
    toggler.addEventListener('click', ()=>{
        nav.classList.toggle('mx');

        if(nav.classList.contains('mx')){

            let needMaxHeight = nav.firstElementChild.clientHeight * 2;
            nav.style.maxHeight = needMaxHeight + 'px'
            $("header").addClass("active");
        }
        else{
            nav.style.maxHeight = '0px'
            $("header").removeClass("active");
        }
    })
})


window.addEventListener('DOMContentLoaded', function () {
    if(screen.width>991){
        let header = document.querySelector('header > div');
        header.querySelector('nav').style.height = header.clientHeight+'px';
    }
})

window.addEventListener('resize', function () {
    if(screen.width>991){
        let header = document.querySelector('header > div');
        header.querySelector('nav').style.height = header.clientHeight+'px';
    }
})