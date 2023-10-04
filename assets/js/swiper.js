let isBeginElement = true
let isEndElement = false
let slidePerView = 3
let isMobile = false

const swiperEl = document.querySelector('swiper-container');
const swiperElTeam = document.querySelector('#team swiper-container');

swiperEl.setAttribute('slides-per-view', '3');
swiperElTeam.setAttribute('slides-per-view', '3');

if (window.innerWidth < 768 || window.outerWidth < 768) {
    swiperEl.setAttribute('slides-per-view', '1.2');
    swiperEl.setAttribute('pagination', 'true');
    swiperElTeam.setAttribute('pagination', 'true');
    swiperElTeam.setAttribute('slides-per-view', '1');
}

function nextSwiper(type) {
    if (type === 'right') {
        swiperEl.swiper.slideNext();
    } else {
        swiperEl.swiper.slidePrev();
    }
}
function nextSwiperTeam(type) {
    if (type === 'right') {
        swiperElTeam.swiper.slideNext();
    } else {
        swiperElTeam.swiper.slidePrev();
    }
}