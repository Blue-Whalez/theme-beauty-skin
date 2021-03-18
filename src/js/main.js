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

document.addEventListener("DOMContentLoaded", function(event) {
    handleModalBox();
    handleMobileMenu();
});