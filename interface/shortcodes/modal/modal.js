(function(){
    const toggleModalOne = (e) => {
        e.preventDefault();
        const modalID = e.currentTarget.getAttribute('data-target');
        const modal = document.querySelector( `#${modalID}`);

        if( modal ){
            if(modal.classList.contains('open')) {
                modal.classList.remove('open')
            } else {
                modal.classList.add('open')
            }
        }
    }

    const btnModals = document.querySelectorAll('.trigger-modal');
    if( btnModals ){
        btnModals.forEach( (btn)  => {
           btn.addEventListener('click', toggleModalOne);
        });
    }

    /**
     * Close pop-up if Esc is pressed.
     */
    window.addEventListener("keydown", checkKeyPressed, false);
    function checkKeyPressed(evt) {
        if (evt.key === "Escape" || evt.key === "Esc") {
            const modals = document.querySelectorAll( `.modal-element`);
            if( modals ){
                modals.forEach( (modal)  => {
                    if(modal.classList.contains('open')) {
                        modal.classList.remove('open')
                    }
                });
            }
        }
    }

})();