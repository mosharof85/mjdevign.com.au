//alert("Ganesg");
var validation = (function () {
    //p2op = document.getElementById('lable-page-p2').value;
    // alert(//);
    

    var forms_validate = {
        "webform":[
            
            {name: 'businessName', type:"input",message:"Business name field can not be empty!"},
            {name: 'aboutBusiness', type:"textarea", message:"Tell Us About Your Business, Organisation Or Idea!: This field can not be empty!"},
            {name: 'webUsedFor',type:"textarea", message:"What Will Your Website Be Used For?: This field can not be empty !"},
            {name: 'textContent',type:"textarea", message:" Home Page: Text Content can not be empty !"},
            {id: 'lable-page-p2',type:"select", message:" This can not be empty !"},
            {id: 'lable-page-p3',type:"select", message:" This can not be empty !"},
            {id: 'lable-page-p4',type:"select", message:" This can not be empty !"},
            {id: 'lable-page-p5',type:"select", message:" This can not be empty !"},


        ],
        "landingform":[
            
            {name: 'websitename', type:"input",message:"Business name field can not be empty!"},
            {name: 'aboutBusiness', type:"textarea", message:"Tell Us About Your Business, Organisation Or Idea!: This field can not be empty!"},
            {name: 'landingPageUse',type:"textarea", message:"Landing page use field can not be empty !"},
            {name: 'writeContent',type:"textarea", message:" Landing Page: Text Content can not be empty !"},

        ],
        "dropshippingform":[
            
            {name: 'storeName', type:"textarea",message:"Store name field can not be empty!"},
            {name: 'storeDescription', type:"textarea",message:"Store description field can not be empty!"},
        ],
        "customorder":[
            {name: 'userId', type:"input",target:[
                {name: "email", type:"input",message:"Please enter a Valid User!"},
            ]},
        ],
        "domainform":[
            {name: 'newDomainName', type:"input",target:[
                {name: 'existingDomainName', type:"input",message:"Existing Domain name or New Domain name must be provided!"},
                {name: 'domainNameProvider', type:"input",message:"Domain Name Provider field can not be empty!"},
            ]},
        ],
        "addonsform":[
            {name: 'invoice_id', type:"select",message:"You should choose a package to proceed!"}
        ]
    }
    
    function validate(form){
        var ret = true;
        var form_type = form.getAttribute('id');

        if(!forms_validate[form_type]){
            return true;
        }
        //console.log(form);
        forms_validate[form_type].forEach(obj => {
            if(!ret){
                return;
            }
            if(obj.id){
                var pg = form.querySelector(obj.type+"[id = "+obj.id+"]");
                if(pg === null){
                    return;
                }
    
                pg.style.border= "1px solid #ced4da";
                pg.style.boxShadow = "none";

                if(Array.from(pg.parentElement.children).length > 0){
                    pg.parentElement.children[Array.from(pg.parentElement.children).length - 1].remove;
                }

                // console.log('pg :', pg);
                // alert(pg.value);
                if(pg.value === "" || pg.value === null || pg.value == "hide"){
                // alert("got you");

                    if(obj.target){
                        obj.target.forEach(t_obj => {
                            if(!ret){
                                return;
                            }
                            var target_el = form.querySelector(t_obj.type+"[id = "+t_obj.id+"]");
                            if(target_el.value === "" || target_el.value == null){
                                ret = false;
                                render(pg, t_obj.message);
                                render(target_el, t_obj.message);
                                // alert(t_obj.message);
                            }
                        });
                    }else{
                        ret = false;
                        render(pg, obj.message);
                        // alert(obj.message);
                    }
                    
                }
                
            }else{
                var el = form.querySelector(obj.type+"[name = "+obj.name+"]");
                console.log("form",form);
                if(el === null){
                    return;
                }

                el.style.border= "1px solid #ced4da";
                el.style.boxShadow = "none";

                if(Array.from(el.parentElement.children).length > 0){
                    el.parentElement.children[Array.from(el.parentElement.children).length - 1].remove;
                }

                console.log('el :', el);
                if(el.value === "" || el.value === null){
                    if(obj.target){
                        obj.target.forEach(t_obj => {
                            if(!ret){
                                return;
                            }
                            var target_el = form.querySelector(t_obj.type+"[name = "+t_obj.name+"]");
                            if(target_el.value === "" || target_el.value == null){
                                ret = false;
                                render(el, t_obj.message);
                                render(target_el, t_obj.message);
                                // alert(t_obj.message);
                            }
                        });
                    }else{
                        ret = false;
                        render(el, obj.message);
                        // alert(obj.message);
                    }
                    
                }
            }
            
        });

        return ret;
    }

    function render(el, message_str){

        el.style.border = "0.5px solid #ff13137a";
        el.style.boxShadow = "0.5px 0.5px 5px #ff3f13";

        message = document.createElement('p');
        message.setAttribute('err-msg', 'true');
        message.innerHTML = message_str;

        var isMessage = false;
        Array.from(el.parentElement.children).forEach((c_el) => {
            if(c_el.getAttribute('err-msg') == "true"){
                isMessage = true;
            }
        })

        if(!isMessage){
            el.parentElement.appendChild(message);
        }
        
    }
    
    return{
        validate: validate
    }

})();