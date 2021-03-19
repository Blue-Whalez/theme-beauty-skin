function handleModalBox() {
    let modal = document.getElementById('modalBox');
    if ( modal ) {
        let btnOpenBox = document.getElementById('openModalBox');
        let btnCloseBox = document.getElementById('closeModalBox');

        btnOpenBox.addEventListener('click', function(e){
            e.preventDefault();
            modal.style.display = "block";
        });
        btnCloseBox.addEventListener('click', function() {
            modal.style.display = "none";
        });
        window.onclick = function (event) {
            if(event.target == modal) {
                modal.style.display = "none";
            }
        }
    }
    
}

function handleMobileMenu() {
    let toogleMenuMobile = document.getElementById('toogle-menu-mobile');
    let siteNavigation = document.getElementById('site-navigation');
    if ( toogleMenuMobile && siteNavigation) {
        toogleMenuMobile.addEventListener('click', function() {
            let isActive = siteNavigation.classList.contains('open-menu');
            if(!isActive) {
                siteNavigation.classList.add('open-menu');
            } else {
                siteNavigation.classList.remove('open-menu');
            }

        })
    }
}

function handleSlider() {
    var slider = tns({
        container: '.my-slider',
        items: 3,
        nav: false,
        mode: 'carousel',
        mouseDrag: true,
        speed: 500,
        autoplayButtonOutput: false,
        autoPlayTimeout: 3500,
        swipeAngle: 10,
        controls: false,
        autoplay: true,
        arrowKeys: true,
        autoWidth: true,
        mouseDrag: true,
        preventScrollOnTouch: "force",
        autoplayHoverPause: true,
    });
}

document.addEventListener("DOMContentLoaded", function(event) {
    handleModalBox();
    handleMobileMenu();
    handleSlider();
});
