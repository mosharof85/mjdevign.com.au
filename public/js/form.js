

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
            
            let currntStep = actionBtn.closest('.stepActive');
            
            let next = 1;
            if(actionBtn.classList.contains('prev_action')){
                next = -1;
            }else{
                if (!validation.validate(currntStep)){
                    return;
                }
            }
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

    function toggledropdown(el) {

        var dropdown = el.parentNode.parentNode.getElementsByClassName('page-type-dropdown')[0];

        var page = null;

        el.childNodes.forEach((opt) => {
            if(opt.value == el.value){
                page = opt;
            }
        });

        var title = dropdown.querySelector('.title');
        var description = dropdown.querySelector('.description');
        var content = dropdown.querySelector('.text-place');
        var image = dropdown.querySelector('.image');
        
        var old_remove = dropdown.querySelector('.prices-portion a');
        var new_remove = old_remove.cloneNode(true);
        old_remove.parentNode.replaceChild(new_remove, old_remove);


        if (el.value === "hide" || el.value === "Leave blank for now" || el.value === "Not sure? Let us decide for you") {
            dropdown.classList.remove("dropdown-content-show");
        }
        else {

            title.innerHTML = page.value;
            description.innerHTML = page.getAttribute('description');
            var price = parseInt(page.getAttribute('price'));

            p_el = document.createElement('input');
            p_el.name = el.name;
            p_el.value = "hide";

            new_remove.addEventListener('click', order.removePageType.bind(0,p_el));

            var page = content.getAttribute('name').split("[");
            // console.log(title.innerHTML);

            content.setAttribute('name', page[0]+"["+title.innerHTML+"]"+"[content]");
            image.setAttribute('name', page[0]+"["+title.innerHTML+"]"+"[image][]");

            //Creatating Dynamic Placeholder For inputs

            // console.log(title.innerHTML);

            if(title.innerHTML === 'About us page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'Online Bookings'){
                content.placeholder = 'Tell us what sort of online bookings you want on your website.';
            }

            else if(title.innerHTML==='Sell Products or Services'){
                content.placeholder = 'Tell us about the products or services you are wanting to sell on your website';
            }

            else if(title.innerHTML === 'Event Manager'){
                content.placeholder = 'Tell us about the type of events that you will need to manage.';
            }

            else if(title.innerHTML === 'Forum'){
                content.placeholder = 'Tell us how you want to use your forum.';
            }

            else if(title.innerHTML === 'Blog Page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'FAQ Page'){
                content.placeholder = 'Enter in frequently asked questions and answers as well as any other text content and information you would like displayed on your FAQ page.';
            }

            else if(title.innerHTML === 'User Form Page'){
                content.placeholder = 'Describe what information you want to obtain from your form and anything else you may want included on this page.';
            }

            else if(title.innerHTML === 'Custom Page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'Gallery Page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'Informative Page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'Testimonial Page'){
                content.placeholder = 'Write what text content and any other information or ideas you would like displayed on this page.';
            }

            else if(title.innerHTML === 'Contact us Page'){
                content.placeholder = 'Write what text content and any other information you would like displayed on your contact page. For example your address, contact details, hours of business. We will include a "contact us" form and a location map.';
            }

            if(price == 0){
                dropdown.querySelector('.prices-portion').style.display = 'none';
            }
            else{
                dropdown.querySelector('.prices-portion').style.display = 'block';
            }
            dropdown.classList.add("dropdown-content-show");
        }
    }

    document.querySelectorAll('.pageTypeCheckbox').forEach(item=>{
        item.addEventListener('click', function () {
            const checkbox = item.querySelector('input');
            if(checkbox.checked){
                const select = item.closest('.dropdown').querySelector('select');
                select.options[select.options.length-1].selected = true;
                select.dispatchEvent(new Event('change', {'bubbles': false}));
            }
        })
    })
    

    document.querySelectorAll('.pagetypes').forEach(item=>{
        item.addEventListener('change', function () {
            if(item.selectedIndex !== item.options.length-1){
                item.nextElementSibling.querySelector('input').checked = false;
            }
        })
    })
