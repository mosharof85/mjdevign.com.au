window.addEventListener('DOMContentLoaded',()=>{
    let tbls = document.querySelectorAll('.overflow-holder');
    // tbls.push(document.querySelector('.my-order .grid-table'));
    // tbls.push(document.querySelector('.services .products .grid-container'));
    // tbls.push(document.querySelector('.services .dropshipping-package .grid'));
    // tbls.push(document.querySelector('.overflow-holder'));

    let padding = 90;
    if(screen.width<=600){
        padding = 60;
    }
    if(screen.width<=450){
        padding = 30;
    }
    let screenWidth = screen.width - padding;

    let boolOverflow = false;
    for (let i = 0; i<tbls.length; i++){
        if(tbls[i].clientWidth>screenWidth){
            boolOverflow = true
            break;
        }
    }

    if(boolOverflow){
        if(!document.body.classList.contains('screen-overflow')){
            document.body.classList.add('screen-overflow')
        }
    }
    else{
        if(document.body.classList.contains('screen-overflow')){
            document.body.classList.remove('screen-overflow')
        }
    }
})

window.addEventListener('resize',()=>{
    let tbls = document.querySelectorAll('.overflow-holder');
    // tbls.push(document.querySelector('.my-order .grid-table'));
    // tbls.push(document.querySelector('.services .products .grid-container'));
    // tbls.push(document.querySelector('.services .dropshipping-package .grid'));
    // tbls.push(document.querySelector('.overflow-holder'));

    let padding = 90;
    if(screen.width<=600){
        padding = 60;
    }
    if(screen.width<=450){
        padding = 30;
    }
    let screenWidth = screen.width - padding;

    let boolOverflow = false;
    for (let i = 0; i<tbls.length; i++){
        if(tbls[i].clientWidth>screenWidth){
            boolOverflow = true
            break;
        }
    }

    if(boolOverflow){
        if(!document.body.classList.contains('screen-overflow')){
            document.body.classList.add('screen-overflow')
        }
    }
    else{
        if(document.body.classList.contains('screen-overflow')){
            document.body.classList.remove('screen-overflow')
        }
    }
})