let packages = Array.from(document.querySelectorAll('.sec-package .nav ul li'));
let packageOptions = Array.from(document.querySelectorAll('.sec-package .package'));

packages.forEach(btn=>{
    btn.addEventListener('click',(e)=>{
        e.preventDefault();
        let index = packages.indexOf(btn);
        let currentIndex = packages.indexOf(document.querySelector('.sec-package .nav ul li.default'));

        if(currentIndex != index){

            packageOptions[currentIndex].classList.remove('default');
            packages[currentIndex].classList.remove('default');
            packageOptions[index].classList.add('default');
            packages[index].classList.add('default');
        }
    })
})