var el = document.createElement('link');
if(window.innerWidth < 768){
    el.rel ='stylesheet'
    el.href='pages/assets/css/mobile.css'
    var btn = document.querySelector('#btn-toggle');
    btn.addEventListener('click', function(e){
        var menu = document.querySelector('nav > ul');
        menu.classList.toggle('showMenu')
    })
}
document.head.appendChild(el);