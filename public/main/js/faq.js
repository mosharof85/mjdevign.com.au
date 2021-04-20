window.addEventListener('DOMContentLoaded', ()=>{
    let faqLQs = document.querySelectorAll('.sec-faq .faq .left .item-q');
    faqLQs.forEach(q=>{
        q.addEventListener('click', (e)=>{
            let currentQ = document.querySelector('.sec-faq .faq .left .item.active');
            let clickedQ = q.parentElement;
            if(currentQ && currentQ == clickedQ){
                clickedQ.classList.toggle('active');
            }
            else{
                if(currentQ){
                    currentQ.classList.remove('active');
                }
                clickedQ.classList.add('active');
            }
        })
    })


    let faqRQs = document.querySelectorAll('.sec-faq .faq .right .item-q');
    faqRQs.forEach(q=>{
        q.addEventListener('click', ()=>{
            let currentQ = document.querySelector('.sec-faq .faq .right .item.active');
            let clickedQ = q.parentElement;
            if(currentQ && currentQ == clickedQ){
                clickedQ.classList.toggle('active');
            }
            else{
                if(currentQ){
                    currentQ.classList.remove('active');
                }
                clickedQ.classList.add('active');
            }
        })
    })
})