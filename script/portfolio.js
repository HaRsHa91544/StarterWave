const slideImg = document.getElementById('slide-img');
const slider = document.querySelector('.slider');

let glogalImgCount;
let globalProjectId;


function openSlide(projectId, imgCount) {
    glogalImgCount = imgCount;
    globalProjectId = projectId;
    slider.style.opacity = '1';
    slider.style.visibility = 'visible';
    if (imgCount <= 6 && projectId === 1) {
        slideImg.src = `img/reverence/${imgCount}.png`;
    }
    else if (imgCount <= 5 && projectId === 2) {
        slideImg.src = `img/budgstay/${imgCount}.png`;
    }
    else if (imgCount <= 4 && projectId === 3) {
        slideImg.src = `img/foodpalace/${imgCount}.png`;
    }
}

function closeSlide() {
    slider.style.opacity = '0';
    slider.style.visibility = 'hidden';
}

function increaseSrcImg() {
    if (glogalImgCount < 6 && globalProjectId === 1) {
        glogalImgCount++;
        slideImg.src = `img/reverence/${glogalImgCount}.png`;
    }
    else if (glogalImgCount < 5 && globalProjectId === 2) {
        glogalImgCount++;
        slideImg.src = `img/budgstay/${glogalImgCount}.png`;
    }
    else if (glogalImgCount < 4 && globalProjectId === 3) {
        glogalImgCount++;
        slideImg.src = `img/foodpalace/${glogalImgCount}.png`;
    }
}

function decreaseSrcImg() {
    if (glogalImgCount > 1 && globalProjectId === 1) {
        glogalImgCount--;
        slideImg.src = `img/reverence/${glogalImgCount}.png`;
    }
    else if (glogalImgCount > 1 && globalProjectId === 2) {
        glogalImgCount--;
        slideImg.src = `img/budgstay/${glogalImgCount}.png`;
    }
    else if (glogalImgCount > 1 && globalProjectId === 3) {
        glogalImgCount--;
        slideImg.src = `img/foodpalace/${glogalImgCount}.png`;
    }
}
