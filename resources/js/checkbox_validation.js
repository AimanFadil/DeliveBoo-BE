const btn_rest = document.getElementById('btn_rest');

if (btn_rest) {
    btn_rest.addEventListener('click', event => {

        let checkboxs = document.querySelectorAll('.my_check:checked');
        const check_error = document.getElementById('check_error');


        if (checkboxs.length == 0) {
            check_error.innerText = 'Aggiungere almeno una tipologia.'
            event.preventDefault();
        }
    });
}
