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

function handleScrollToTop() {
     // When the user scrolls down 20px from the top of the document, show the button
     window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    document.getElementById("movetop").addEventListener('click', function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
}

document.addEventListener("DOMContentLoaded", function(event) {
    handleModalBox();
    handleMobileMenu();
    handleSlider();
    handleScrollToTop();
});
