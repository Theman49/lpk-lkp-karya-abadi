import './bootstrap';

// showing element when scroll down
window.addEventListener('scroll', function() {
    let scroll = window.scrollY
    let elements = document.getElementsByClassName('js-scroll')
    for(let i=0; i<elements.length; i++){
        const el = elements[i]
        if(scroll > el.offsetTop - 350){
            el.style.opacity = 1;
            el.style.visibility = 'visible';
        }
    }
})