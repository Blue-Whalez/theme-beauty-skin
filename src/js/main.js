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

document.addEventListener("DOMContentLoaded", function(event) {
    handleModalBox();
});