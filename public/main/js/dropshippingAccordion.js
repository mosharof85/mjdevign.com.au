document.querySelectorAll('.package .accordion .title').forEach(item=>{
    item.addEventListener('click', function () {
        item.classList.toggle('active');
        item.nextElementSibling.classList.toggle('active');
    })
})

document.querySelectorAll('.stores .store a').forEach(item=>{
    item.addEventListener('click', function (e) {
        e.preventDefault();
        let url = item.getAttribute('href');
        let title = item.getAttribute('title');
        let popup = document.querySelector('.popup')
        let iframe = popup.querySelector('iframe');

        popup.querySelector('.popup-title').innerText = title;
        iframe.setAttribute('src', url);

        popup.classList.add('active');
    })
})

document.querySelector('.popup .popup-close').addEventListener('click', function () {
    this.closest('.popup').classList.remove('active');
})

document.querySelector('.popup .popup-back').addEventListener('click', function () {
    this.closest('.popup').classList.remove('active');
})