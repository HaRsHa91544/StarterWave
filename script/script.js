function toScroll() {
    window.scroll(0, 900);
}
const sbtn = document.getElementById('sbtn');
const pcards = document.querySelectorAll('.proj-card');
const projh = document.getElementById('proj-head');
const scards=document.querySelectorAll('.service');
const shead=document.getElementById('shead');
const foot=document.getElementById('footer');
window.onscroll = function () {
    if (window.scrollY > 1000) {
        pcards.forEach(card => {
            card.style.animation = 'slideRight 1.2s both';
            card.style.opacity = '1';
        });
        projh.style.opacity = '1';
        projh.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 1600) {
        
        scards.forEach(card => {
            card.style.animation = 'servani 1.2s both';
            card.style.opacity = '1';
        });
        shead.style.opacity = '1';
        shead.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 30) {
        sbtn.style.transform = 'translateX(0%) scale(1)';
    }
    else {
        sbtn.style.transform = 'translateX(200%) scale(0.2)';
    }
};



