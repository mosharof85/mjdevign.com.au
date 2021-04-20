let accountEditBtns = document.querySelectorAll('.s__account .button span');

accountEditBtns.forEach(btn=>{
    btn.addEventListener('click',()=>{
        let dataDiv = btn.closest('.data');

        dataDiv.nextElementSibling.classList.toggle('active');

        if(dataDiv.nextElementSibling.classList.contains('active')){
            dataDiv.style.display = 'none'
        }
        else{
            dataDiv.style.display = 'block'
        }

    })
})

let accountSaveBtns = document.querySelectorAll('.s__account .action a');

accountSaveBtns.forEach(btn=>{
    btn.addEventListener('click',()=>{
        let actionDiv = btn.closest('.action');

        actionDiv.classList.toggle('active');

        if(!actionDiv.classList.contains('active')){
            actionDiv.previousElementSibling.style.display = 'block'
        }
        else{
            actionDiv.previousElementSibling.style.display = 'none'
        }

    })
})