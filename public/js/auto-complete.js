
var autoComplete = (function (){
    
    var autoCompleteArr = [];

    function show(obj){

        if (!obj.value) {close(obj); return false;}
		var data = JSON.parse(obj.getAttribute('data'));

		data.forEach(element => {
			autoCompleteArr.push({name: element.name, email: "("+element.email+")", id: element.id});
		});

		if(autoCompleteArr.length < 1 || autoCompleteArr == undefined){
			return false;
		}

		var a, b, i, val = obj.value;
	
		close(obj);
		
		a = document.createElement("DIV");
		a.setAttribute("id", obj.id + "-autocomplete-list");
		a.setAttribute("class", "autocomplete-items");
		obj.parentNode.appendChild(a);

		if(Object.keys(autoCompleteArr).length > 0){
			for (i = 0; i < Object.keys(autoCompleteArr).length; i++) {
				/*create a DIV element for each matching element:*/
				b = document.createElement("div");
				/*make the matching letters bold:*/
				var pos = autoCompleteArr[i].name.indexOf(val);
				if(pos < 0){
					continue;
				}
				b.innerHTML = autoCompleteArr[i].name.substr(0,pos);
				b.innerHTML += "<strong>" + autoCompleteArr[i].name.substr(pos, val.length) + "</strong>";
				b.innerHTML += autoCompleteArr[i].name.substr(Number(pos)+Number(val.length));
				b.innerHTML += " "+autoCompleteArr[i].email;
				/*insert a input field that will hold the current array item's value:*/
				b.innerHTML += "<input type='hidden' value='"+autoCompleteArr[i].id+"' nameValue='" + autoCompleteArr[i].name + "' >";
				/*execute a function when someone clicks on the item value (DIV element):*/
				b.addEventListener("click", function(e) {
					/*insert the value for the autocomplete text field:*/
					obj.value = this.getElementsByTagName("input")[0].getAttribute("nameValue");

					obj.nextElementSibling.value = this.getElementsByTagName("input")[0].value;

					/*close the list of autocompleted values,
					(or any other open lists of autocompleted values:*/
					close(obj);
				});
				a.appendChild(b);
			
			}
		}else{
			
		b = document.createElement("div");
		b.style.color = 'red';
		b.innerHTML = "Not found";
		a.appendChild(b);
			
		}
		autoCompleteArr = [];
	}

	function close(elmnt) {
	    /*close all autocomplete lists in the document,
	    except the one passed as an argument:*/
	    var x = document.getElementsByClassName("autocomplete-items");
	    for (var i = 0; i < x.length; i++) {
	      //if (elmnt != x[i] && elmnt != obj) {
	      	x[i].parentNode.removeChild(x[i]);
	      //}
	  	}
	}
	
	return {
		show: show
	}
})();