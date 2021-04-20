let clacSection =  document.querySelector('.sec-calc');
let sliders = clacSection.querySelectorAll('.slider');

window.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.slider').forEach(item=>{
        let input = item.querySelector('input');
        let value = (input.value-input.min)/(input.max-input.min)*100;
        input.style.background = 'linear-gradient(to right, #E80566 0%, #E80566 ' + value + '%, #fff ' + value + '%, white 100%)';

        //Calculation
        let supplier = parseInt(document.querySelector('.sec-calc .slider .info.supplier .current').innerText);
        let margin = parseInt(document.querySelector('.sec-calc .slider .info.margin .current').innerText);
        let orders = parseInt(document.querySelector('.sec-calc .slider .info.orders .current').innerText);
        let calcVal = document.querySelector('.sec-calc .right .calc-val span');
        calcVal.innerText = (supplier * margin * orders / 100).toLocaleString('en-US', {maximumFractionDigits:2});
        document.querySelector('.mobile-sum span').innerText = (supplier * margin * orders / 100).toLocaleString('en-US', {maximumFractionDigits:2});
    })
})

document.querySelectorAll('.slider').forEach(item=>{
    let input = item.querySelector('input');
    input.addEventListener('input',()=>{
        let init = parseInt(item.querySelector('.init span').innerText);
        let value = (input.value-input.min)/(input.max-input.min)*100;
        input.style.background = 'linear-gradient(to right, #E80566 0%, #E80566 ' + value + '%, #fff ' + value + '%, white 100%)';
        if(input.value< init){
            input.previousElementSibling.querySelector('.current').innerText = init;
        }
        else{
            input.previousElementSibling.querySelector('.current').innerText = input.value;
        }



        //Calculation
        let supplier = parseInt(document.querySelector('.sec-calc .slider .info.supplier .current').innerText);
        let margin = parseInt(document.querySelector('.sec-calc .slider .info.margin .current').innerText);
        let orders = parseInt(document.querySelector('.sec-calc .slider .info.orders .current').innerText);
        let calcVal = document.querySelector('.sec-calc .right .calc-val span');
        calcVal.innerText = (supplier * margin * orders / 100).toLocaleString('en-US', {maximumFractionDigits:2});
        document.querySelector('.mobile-sum span').innerText = (supplier * margin * orders / 100).toLocaleString('en-US', {maximumFractionDigits:2});
    })
})

