function toScroll() {
    window.scroll(0, 505);
}
const sbtn = document.getElementById('sbtn');
const pcards = document.querySelectorAll('.proj-card');
const projh = document.getElementById('proj-head');
const scards=document.querySelectorAll('.service');
const shead=document.getElementById('shead');
const foot=document.getElementById('footer');
window.onscroll = function () {
    if (window.scrollY > 700) {
        pcards.forEach(card => {
            card.style.animation = 'slideRight 1.2s both';
            card.style.opacity = '1';
        });
        projh.style.opacity = '1';
        projh.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 1200) {
        
        scards.forEach(card => {
            card.style.animation = 'servani 1.2s both';
            card.style.opacity = '1';
        });
        shead.style.opacity = '1';
        shead.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 520) {
        sbtn.style.transform = 'translateX(0%) scale(1)';
    }
    else {
        sbtn.style.transform = 'translateX(200%) scale(0.2)';
    }
};



