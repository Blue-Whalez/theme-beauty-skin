import "../css/style.css"

/* 3rd party packages */
import Flickity from 'flickity';


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
    var elem = document.querySelector('.main-carousel');
    var flkty = new Flickity( elem, {
    // options
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true,
    autoPlay: 2500,

    pauseAutoPlayOnHover: false
    });
}

function handleScroll() {
    let btnBackToTop = document.getElementById("movetop");
    let siteHeader = document.getElementsByClassName("site-header")[0];
     // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        handleScrollFunction(btnBackToTop, siteHeader);
    };

    function handleScrollFunction(btnBackToTop, siteHeader) {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnBackToTop.style.display = "block";
            siteHeader.classList.add('header--effect');
            
        } else {
            btnBackToTop.style.display = "none";
            siteHeader.classList.remove('header--effect');
        }
    }

    btnBackToTop.addEventListener('click', function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
}

document.addEventListener("DOMContentLoaded", function(event) {
    handleModalBox();
    handleMobileMenu();
    handleSlider();
    handleScroll();
});

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }