
window.addEventListener('DOMContentLoaded', function () {
    const infoRight = document.querySelector('.sec-info .out-container .right');
    if(infoRight) {
        if(screen.width>991){
            document.querySelector('.sec-info').style.height = (infoRight.clientHeight + 74) + 'px';
            infoRight.style.width = document.querySelector('.sec-info .section-container .right').clientWidth + 'px';
        }
        else{
            document.querySelector('.sec-info').style.height = (infoRight.clientHeight + 0) + 'px';
        }
    }

    //

    if(screen.width < 992){
        var bodyRect = document.body.getBoundingClientRect(),
            responsiveImg = document.querySelector('.sec-hero .section-container .left p img'),
            elemRect = responsiveImg.getBoundingClientRect(),
            offset   = elemRect.top - bodyRect.top,
            responsiveImageHeight = responsiveImg.clientHeight,
            secHeroHeight = document.querySelector('.sec-hero').offsetHeight ;

        if(responsiveImageHeight - (secHeroHeight - offset)){
            document.querySelector('.sec-hero').style.paddingBottom =  responsiveImageHeight - (secHeroHeight - offset) + 'px'
        }
    }
})

window.addEventListener('resize', function () {
    const infoRight = document.querySelector('.sec-info .out-container .right');
    if(infoRight) {
        if(screen.width>991){
            document.querySelector('.sec-info').style.height = (infoRight.clientHeight + 74) + 'px';
            infoRight.style.width = document.querySelector('.sec-info .section-container .right').clientWidth + 'px';
        }
        else{
            document.querySelector('.sec-info').style.height = (infoRight.clientHeight + 0) + 'px';
        }
    }

    //

    if(screen.width < 992){
        var bodyRect = document.body.getBoundingClientRect(),
            responsiveImg = document.querySelector('.sec-hero .section-container .left p img'),
            elemRect = responsiveImg.getBoundingClientRect(),
            offset   = elemRect.top - bodyRect.top,
            responsiveImageHeight = responsiveImg.clientHeight,
            secHeroHeight = document.querySelector('.sec-hero').offsetHeight ;

        if(responsiveImageHeight - (secHeroHeight - offset)){
            document.querySelector('.sec-hero').style.paddingBottom =  responsiveImageHeight - (secHeroHeight - offset) + 30 + 'px'
        }
    }
})