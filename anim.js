// Close navbar when a link is clicked
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', () => {
      document.getElementById('check').checked = false; // Uncheck the checkbox
    });
  });

const carouselslider = document.querySelector(".carouselslider"),
firstImg = carouselslider.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapperslider i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carouselslider scroll left value
    let scrollWidth = carouselslider.scrollWidth - carouselslider.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carouselslider.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carouselslider.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carouselslider scroll left else add to it
        carouselslider.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
        console.log('click');
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carouselslider.scrollLeft - (carouselslider.scrollWidth - carouselslider.clientWidth) > -1 || carouselslider.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carouselslider left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carouselslider.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carouselslider.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carouselslider.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carouselslider.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carouselslider to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carouselslider.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carouselslider.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carouselslider.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carouselslider.addEventListener("mousedown", dragStart);
carouselslider.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carouselslider.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carouselslider.addEventListener("touchend", dragStop);

new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

function animateCount(element, target, duration) {
    let start = 0;
    let range = target - start;
    let increment = target > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / range));

    let timer = setInterval(function() {
        start += increment;
        element.innerText = start;
        if (start == target) {
            clearInterval(timer);
        }
    }, stepTime);
}

// Ambil semua elemen dengan class 'detail-number'
const numbers = document.querySelectorAll('.detail-number');

// Jalankan animasi saat halaman selesai dimuat
window.addEventListener('load', function() {
    numbers.forEach(function(number) {
        let target = +number.getAttribute('data-target'); // Ambil nilai target dari data-target
        animateCount(number, target, 2000); // 3 detik untuk menghitung
    });
});