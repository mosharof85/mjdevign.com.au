
$(document).ready(() => {
    window.show = (id) => {
        if (id == 1) {
            $('#reg_new').removeClass('d-none')
            $('#already_own').addClass('d-none')
        } else {
            $('#reg_new').addClass('d-none')
            $('#already_own').removeClass('d-none')
        }
    }

    window.checked = () => {
        console.log(this)
    }

    show(1)
})

let steps = Array.from(document.querySelectorAll('.stepsMain .stepActive'));
    document.querySelectorAll('.nextBtn a:not(.btn_checkout)').forEach(actionBtn=>{
        actionBtn.addEventListener('click', (e)=>{
            e.preventDefault();

            let next = 1;
            if(actionBtn.classList.contains('prev_action')){
                next = -1;
            }
            let currntStep = actionBtn.closest('.stepActive');
            let currentIndex = steps.indexOf(currntStep);
            let nextIndex = currentIndex + next;

            if(nextIndex>=0){
                currntStep.classList.remove('active');
                if(!currntStep.classList.contains('passed')){
                    currntStep.classList.add('passed');
                }

                $(currntStep.querySelector('.bodyContainer')).slideUp('slow');
                $(steps[nextIndex].querySelector('.bodyContainer')).slideDown('slow', function () {
                    steps[nextIndex].classList.add('active');
                    setTimeout(function () {
                        steps[nextIndex].scrollIntoView({
                            behavior: 'smooth'
                        });
                    },100)
                });
                
                
            }
        })
    })



let checkbox__alreay = document.querySelector('.domain-alreay__checkbox .form-check-input');
let msg__already = document.querySelector('.domain-alreay__msg');

checkbox__alreay.addEventListener('click',()=>{
    if(checkbox__alreay.checked){
        msg__already.style.display = 'block';
    }
    else{
        msg__already.style.display = 'none';
    }
})

let featureInputs = Array.from(document.querySelectorAll('.add-feature td input'));
let featureBoxs = Array.from(document.querySelectorAll(".add-feature-container .optionalRow"))
let featureRemoves = Array.from(document.querySelectorAll('.add-feature-container .optionalRow .link-remove'))
featureInputs.forEach(chk=>{
    chk.addEventListener('click', ()=>{
        let index = featureInputs.indexOf(chk);

        if(chk.checked){
            featureBoxs[index].style.display = 'flex';
        }
        else{
            featureBoxs[index].style.display = 'none'
        }
    })
})

featureRemoves.forEach(btn=>{
    btn.addEventListener('click', (e)=>{
        // e.preventDefault();
        let index = featureRemoves.indexOf(btn);

        featureBoxs[index].style.display = 'none';
        featureInputs[index].checked = false;
        featureInputs[index].dispatchEvent(new Event('change'));

    })
})

let pagesInputs = Array.from(document.querySelectorAll('.add-pages td input'));
let pagesBoxs = Array.from(document.querySelectorAll(".add-pages-container .optionalRow"))
let pagesRemoves = Array.from(document.querySelectorAll('.add-pages-container .optionalRow .link-remove'))

pagesInputs.forEach(chk=>{
    chk.addEventListener('click', ()=>{
        let index = pagesInputs.indexOf(chk);

        if(chk.checked){
            if(pagesBoxs[index]){
                pagesBoxs[index].style.display = 'flex';
            }
        }
        else{
            if(pagesBoxs[index]){
                pagesBoxs[index].style.display = 'none';
            }
        }
    })
})

pagesRemoves.forEach(btn=>{
    btn.addEventListener('click', (e)=>{
        // e.preventDefault();
        let index = pagesRemoves.indexOf(btn);

        pagesBoxs[index].style.display = 'none';
        pagesInputs[index].checked = false;
        pagesInputs[index].dispatchEvent(new Event('change'));
        
    })
})
