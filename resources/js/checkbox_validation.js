const btn_rest = document.getElementById('btn_rest');

if (btn_rest) {
    btn_rest.addEventListener('click', event => {

        let checkboxs = document.querySelectorAll('.my_check:checked');
        const check_error = document.getElementById('check_error');

        const business_name = document.getElementById('business_name').value;
        const address = document.getElementById('address').value;
        const vat_number = document.getElementById('vat_number').value;


        const business_nameError = document.getElementById('BusinessNameError');
        const addressError = document.getElementById('addressError');
        const vat_numberError = document.getElementById('vat_numberError');


        let valid = true;
        console.log(business_name)
        if (business_name == '') {
            valid = false
            business_nameError.innerText = "Inserire il nome dell'attività"
        }
        if (business_name.length > 150) {
            valid = false
            business_nameError.innerText = 'Il nome dell\'attività deve essere lunga al massimo 150 caratteri'
        }
        if (address == '') {
            valid = false
            addressError.innerText = "Inserire l'indirizzo"
        }
        if (vat_number.length != 11) {
            valid = false
            vat_numberError.innerText = 'il numero di partita iva deve essere lunga 11 caratteri'
        }
        if (vat_number == '') {
            valid = false
            vat_numberError.innerText = "Inserire il numero di partita iva"
        }

        if (checkboxs.length == 0) {
            valid = false
            check_error.innerText = 'Aggiungere almeno una tipologia.'
        }

        if (!valid) {
            event.preventDefault();
        }
    });
}
