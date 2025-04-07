
function toScroll() {
    let vWidth = window.innerWidth;
    if (vWidth < 1000) {
        window.scroll(0, 1200);
    }
    else {
        window.scroll(0, 860);
    }
}


const sbtn = document.getElementById('sbtn');
const pcards = document.querySelectorAll('.proj-card');
const projh = document.getElementById('proj-head');
const scards = document.querySelectorAll('.service');
const shead = document.getElementById('shead');
const foot = document.getElementById('footer');
const cta = document.getElementById('main');
window.onscroll = function () {
    if (window.scrollY > 1200) {
        pcards.forEach(card => {
            card.style.animation = 'slideRight 1.2s both';
            card.style.opacity = '1';
        });
        projh.style.opacity = '1';
        projh.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 1800) {
        scards.forEach(card => {
            card.style.animation = 'servani 1.2s both';
            card.style.opacity = '1';
        });
        shead.style.opacity = '1';
        shead.style.animation = 'slideRight 1s both';
    }
    if (window.scrollY > 400) {
        cta.style.animation = 'typing 1.6s steps(21),cursor .4s step-end infinite alternate';
        cta.style.opacity = '1';
    }
    if (window.scrollY > 20) {
        sbtn.style.transform = 'translateX(0%) scale(1)';
    }
    else {
        sbtn.style.transform = 'translateX(200%) scale(0.2)';
    }

};

