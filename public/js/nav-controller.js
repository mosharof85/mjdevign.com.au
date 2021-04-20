let navLinks = Array.from(document.querySelectorAll('.nav a'));
let options = Array.from(document.querySelectorAll('.option'));

var urlParams;
(window.onpopstate = function () {
    var match,
        pl     = /\+/g,  // Regex for replacing addition symbol with a space
        search = /([^&=]+)=?([^&]*)/g,
        decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
        query  = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query))
        urlParams[decode(match[1])] = decode(match[2]);
})();

console.log(urlParams["id"]);

if(urlParams["id"]){
    options[urlParams["id"]].classList.add('default');
    navLinks[urlParams["id"]].querySelector('span').style.fontWeight = '700';
    navLinks[0].querySelector('span').style.fontWeight = '400';
}
else{
    options[0].classList.add('default');
    navLinks[0].querySelector('span').style.fontWeight = '700';
}

if(urlParams["id"]=='0'){
    navLinks[0].querySelector('span').style.fontWeight = '700';
}


navLinks.forEach(link=>{
    link.addEventListener('click', (e)=>{
        e.preventDefault();
        let index = navLinks.indexOf(link);
        let currenIndex = options.indexOf(document.querySelector('.option.default'))

        console.log(index);
        console.log(currenIndex);

        if(index != currenIndex){


            $( options[currenIndex] ).fadeOut( "", function() {
                options[currenIndex].classList.remove('default');
                navLinks[currenIndex].querySelector('span').style.fontWeight = '400';
            });

            $( options[index] ).fadeIn( "", function() {
                options[index].classList.add('default');
                navLinks[index].querySelector('span').style.fontWeight = '700';
            });
        }
    })
})