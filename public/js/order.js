var order = (function (){

    var prev_pagetype = [];
    var pagetype_list = [
        "page_2[pageType]",
        "page_3[pageType]",
        "page_4[pageType]",
        "page_5[pageType]",
    ]

    var promoCodeArr = [];
    var card_el = document.querySelector('.debit-card');
    var _token = card_el.getAttribute('_token');

    //DOM cache
    var orderContent_el = document.querySelector('.orderContainer');
    // var dsicount_el = orderContent_el.querySelector('.discount-amt');

    var features = Array.from(document.querySelectorAll('.features'));
    var includes = Array.from(document.querySelectorAll('.includes'));
    var pagetypes = Array.from(document.querySelectorAll('.pagetypes'));
    var addons = Array.from(document.querySelectorAll('.addons'));

    if(orderContent_el){
        var orderList_el = orderContent_el.querySelector('.orderList');
        var total_el = orderContent_el.querySelectorAll('.total-amt'); 
        var subTotal_el = orderContent_el.querySelector('.sub-total-amt');
        var discount_el = orderContent_el.querySelector('.discount-amt');
        var gst_el = orderContent_el.querySelector('.gst-amt');

        var url = window.location.pathname;

        if(url.includes('account') && addons != null && addons.length > 0 ){
            var initial_value = 0.00 * 1;
            var cart_count = 0;
            var addons_total_el = document.getElementsByClassName('top-total-amt')[0];
            var carts_el = Array.from(document.getElementsByClassName('order-count'));
        }else{
            var initial_value = orderList_el.children[0].querySelector('.bold').innerText.replace('AU$', '') * 1;
        }
            
        var sub_total = initial_value.toFixed(2) * 1;
        var discount = 0.00;
        var gst_percent = 0.00;
        var gst = (gst_percent * sub_total).toFixed(2) * 1;
        var total = initial_value + gst;

        render();
    }else{
        var initial_value = 0 * 1;

        var total_el = document.querySelectorAll('.total-amt'); 
    }
    

    var sub_total = initial_value.toFixed(2) * 1;
    var discount = 0.00;
    var gst_percent = 0.00;
    var gst = (gst_percent * sub_total).toFixed(2) * 1;
    var total = initial_value + gst;

    //Event bind

    if(features != null && features.length > 0){
        features.forEach(feature => {
            feature.addEventListener('change', () => 
            {
                if( feature.checked ){
                    console.info('reached @ checked', feature);
                    _updateOrderList(feature, "f") 
                }else{
                    console.info('reached @ orderlist', orderList_el.children);
                    var items = Array.from(orderList_el.children); 
                    //.info('reached @ items', items);
                    var item = items.find((el) => {
                        if(el.getAttribute('id') === feature.value){
                            return el;
                        }
                    });

                    if(item != null){
                        _removeOrderListItem(item, feature, "f");
                    }
                }
            });
        });
    }
    // //.log(features);

    if(includes != null && includes.length > 0){
        includes.forEach(include => {
            include.addEventListener('change', () => 
            {
                if( include.checked ){
                    console.info('reached @ checked', include);
                    _updateOrderList(include, "i") 
                }else{
                    console.info('reached @ orderlist', orderList_el.children);
                    var items = Array.from(orderList_el.children); 
                    //.info('reached @ items', items);
                    var item = items.find((el) => {
                        if(el.getAttribute('id') === include.value){
                            return el;
                        }
                    });

                    if(item != null){
                        _removeOrderListItem(item, include, "i");
                    }
                }
            });
        });
    }
    // //.log(includes);

    if(pagetypes != null && pagetypes.length > 0){
        pagetypes.forEach(pagetype => {
            pagetype.addEventListener('change', (event) => 
            {   
                var isRepeated = false;

                // if(!event.isTrusted){
                //     console.info('got custom event');
                //     return;
                // }
                if(pagetype.selectedIndex !== 0){
                    pagetype.nextElementSibling.style.display = 'none';
                }
                else{
                    pagetype.nextElementSibling.style.display = 'block';
                }

                if(pagetype.value != "Not sure? Let us decide for you") {

                    pagetype_list.forEach(element => {
                        if (prev_pagetype[element]) {
                            if (prev_pagetype[element].value == pagetype.value) {
                                if (prev_pagetype[pagetype.name]) {
                                    removePageType(prev_pagetype[pagetype.name]);
                                }
                                pagetype.value = "hide";
                                pagetype.dispatchEvent(new Event('change', {'bubbles': false}));
                                isRepeated = true;
                                alert('You can\'t select ' + prev_pagetype[element].value + ' for more than one page.');
                            }
                        }
                    });
                }

                if(isRepeated){
                    return;
                }

                // console.log("pagetype",pagetype);
                // console.log("prev_pagetype",prev_pagetype);
                if(!prev_pagetype[pagetype.name] && pagetype.value != "hide"){
                    // console.info('reached if');
                    ////console.log("pagetype",pagetype);
                    _createPageType(pagetype);
                }
                else if(prev_pagetype[pagetype.name] && pagetype.value != "hide"){
                    // console.info('reached elseif', pagetype);
                    //console.info('reached elseif prev', prev_pagetype[pagetype.name]);
                    removePageType(prev_pagetype[pagetype.name]);
                    //console.log("got page after remove: ", pagetype);
                    _createPageType(pagetype);
                }
                else{
                    // console.info('reached else');
                    removePageType(pagetype);
                }
            });
        });
    }
    // //.log(pagetypes);

    function _createPageType(pagetype){
        ////console.log("reached add with ",pagetype.value);
        //.info('reached @ empty prev_pagetype', pagetype);
            var pages = Array.from(pagetype.children).slice(1);
            var page = pages.find((page) => {
                if(page.value == pagetype.value){
                    return page; 
                }
            });
            prev_pagetype[pagetype.name] = page;
            page.setAttribute('page-no', page.value) ;
            //console.log("page found : ", page, prev_pagetype);
            _updateOrderList(page, "p");
    }

    function removePageType(pagetype){
        //console.log("reached remove with ",pagetype);
        //.info('reached @ orderlist', orderList_el.children);
        var items = Array.from(orderList_el.children); 
        //.info('reached @ items', items);
        
        // console.log("pagetype @ remove ", pagetype)
        if(pagetype.value == "hide"){
            var item = items.find((el) => {
                if(el.getAttribute('id') === prev_pagetype[pagetype.name].getAttribute('page-no')){
                    return el;
                }
            });

            if(item != null){
                _removeOrderListItem(item, prev_pagetype[pagetype.name], "p");
                prev_pagetype[pagetype.name].parentElement.value = "hide";
                prev_pagetype[pagetype.name].parentElement.dispatchEvent(new Event('change', {'bubbles': true}));
                prev_pagetype[pagetype.name] = null;
            }
        }else{
            var item = items.find((el) => {
                if(el.getAttribute('id') === pagetype.getAttribute('page-no')){
                    return el;
                }
            });

            if(item != null){
                _removeOrderListItem(item, pagetype, "p");
            }
        }
    }

    if(addons != null && addons.length > 0){
        addons.forEach(addon => {
            addon.addEventListener('change', () => 
            {   
                if( addon.checked ){
                    
                    console.info('reached @ checked', addon);
                    // console.log("package_stat"+addon.value);
                    if(document.getElementById("package_stat_"+addon.getAttribute('display'))){
                        document.getElementById("package_stat_"+addon.getAttribute('display')).innerHTML = "Remove from cart";
                    }
                    // console.log(packageStat)

                    if(url.includes('account')){
                        cart_count++; 
                    }
                    _updateOrderList(addon, "a");
                }else{
                    // console.info('reached @ unchecked', addon);
                    if(orderContent_el){
                        //.info('reached @ orderlist', orderList_el.children);
                        var items = Array.from(orderList_el.children); 
                        //.info('reached @ items', items);
                        var item = items.find((el) => {
                            if(el.getAttribute('id') === addon.getAttribute('display')){
                                return el;
                            }
                        });

                        if(item != null){
                            _removeOrderListItem(item, addon, "a");
                        }
                    }else{
                        _removeOrderListItem(null, addon, "a");
                    }
                    
                }
            });
        });
    }
    // //.log(addons);

    async function getAccepts(){
        var response = await fetch('/promo', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'accept': 'application/json'
            },
            body: JSON.stringify({_token: _token})
        });

        if (response.ok) {
            let json = await response.json();
            promoCodeArr = json;

        } else {
            console.log("HTTP-Error: " + JSON.stringify(response));
        }
    }

    getAccepts();

    //Renderer
    function render(){
        gst = gst_percent * sub_total;
        gst = gst.toFixed(2) * 1;
        total = sub_total - discount /100 * sub_total + gst;
        if(total <= 0.00){
            total = 0.00 * 1;
        }
        total = total.toFixed(2) *1;
        total_el[1].innerHTML = "AU$ "+total+ "<span class=\"aus\"></span>";
        total_el[0].setAttribute("value", total);
        if(orderContent_el){
            subTotal_el.innerHTML = "AU$ "+sub_total+ "<span class=\"aus\"></span>";
            discount_el.innerHTML = discount+ "%<span class=\"aus\"></span>";
            gst_el.innerHTML = "AU$ "+gst+ "<span class=\"aus\"></span>";
        }

        if(url.includes('account')){
            addons_total_el.innerHTML = "AU$ "+total+ "<span class=\"aus\"></span>";
            carts_el.forEach(cart_el => {
                cart_el.innerHTML = "Cart ("+cart_count+")";
            })
        }
    }

    //Logic

    function _updateOrderList(el, type){
        ////console.log(el);

        if(type == 'p'){
            var name = el.getAttribute('page-no');
        }else if(type == 'a'){
            var name = el.getAttribute('display');
        }else{
            var name = el.getAttribute('value');
        }
        var price = 0;
        price = parseInt(el.getAttribute('price')).toFixed(2) * 1;
        if(price === null || price === 0 || price === ""){
            return;
        }

        if(orderContent_el){
            orderList_el.appendChild(_createOrderListItem(el, name, price, type));
        }
        
        sub_total += price;
        gst = gst_percent * sub_total;
        gst = gst.toFixed(2) * 1;
        total = sub_total - discount * sub_total / 100.0 + gst;
        total = total.toFixed(2) *1;
        render();
    }

    function _removeOrderListItem(item,item_el,type){
        if(item){
            item.remove();
        }

        var el = null;
        //.warn("item: ", item);
        //console.warn("item_el: ", item_el);
        //.warn("pagetypes: ", pagetypes);

        switch (type) {
            case "f":
                el = features.find((el) => el == item_el);
            break;

            case "i":
                el = includes.find((el) => el == item_el);
            break;
        
            case "p":
                el = pagetypes.find((el) => el == item_el.parentElement);
            break;

            case "a":
                el = addons.find((el) => el == item_el);
            break;
        }
        //.warn("el: ", el);
        ////console.log("addon", el);

        if(el){
            
            if(type != "p" ){
                el.checked = false; 
            }

            if(type == "a"){
                if(url.includes('account')){
                    cart_count--; 
                }
                if(document.getElementById("package_stat_"+el.getAttribute('display'))){
                    document.getElementById("package_stat_"+el.getAttribute('display')).innerHTML = "Add To Package";
                }
            }

            sub_total -= parseFloat(item_el.getAttribute('price')).toFixed(`2`) * 1;
            gst = gst_percent * sub_total;
            gst = gst.toFixed(2) * 1;
            total = sub_total - discount * sub_total / 100.0 + gst;
            if(total <= 0.00){
                total = 0.00 * 1;
            }
            total = total.toFixed(2) *1;
            

            render();
            return; 
        };

        //.log('Error Occured @ _removeOrderListItem');
        
    }


    //Component Builder

    function _createOrderListItem(el, name, price, type){
        var item_el = document.createElement('div');
        item_el.classList.add('s_between');
        item_el.setAttribute('id', name);

        var name_el = document.createElement('p');
        name_el.innerHTML = name;

        var price_el = document.createElement('p');
        price_el.classList.add('bold');
        price_el.innerHTML = "AU$ "+price;
        
        var remove_el = document.createElement('span');
        remove_el.classList.add('auss');
        
        var remove_icon = document.createElement('i');
        remove_icon.classList.add('fa', 'fa-trash-o');
        remove_icon.setAttribute('aria-hidden', 'true');

        if(type == 'p'){
            p_el = document.createElement('input');
            p_el.name = el.parentElement.name;
            p_el.value = "hide";

            // console.log("p_el", p_el);

            remove_icon.addEventListener('click', removePageType.bind(0, p_el));
        }else{
            remove_icon.addEventListener('click', _removeOrderListItem.bind(0,item_el,el,type));
        }

        remove_el.appendChild(remove_icon);
        price_el.appendChild(remove_el);
        item_el.appendChild(name_el);
        item_el.appendChild(price_el);

        return item_el;
    }

    // setter | getter
    function getTotal(){
        return total;
    }
    
    function promoCodeOnChange(elem) {
        var val = 0;
        promoCodeArr.forEach(element => {
            if (element.code == elem.value) {
                val = parseFloat(element.discount) ;
                return;
            }
        });
        discount = val;
        render();
        console.log(elem.value);
    }

    return{
        total: getTotal,
        removePageType: removePageType,
        promoCodeOnChange: promoCodeOnChange,
        promo: promoCodeArr
	}
})();