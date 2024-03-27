const register_validation = document.getElementById('register_validation');

if (register_validation) {
    register_validation.addEventListener('click', event => {

        let valid = true;
        // PASSWORD 
        const password_confirm = document.getElementById('password-confirm').value;
        const password = document.getElementById('password').value;

        const pass_error = document.getElementById('pass_error');
        if (password_confirm != password) {
            valid = false
            pass_error.innerText = 'La password non corrisponde'
        }
        if (password.length < 8) {
            valid = false
            pass_error.innerText = 'La password deve essere lunga almeno 8 caratteri'
        }
        if (password == '') {
            valid = false
            pass_error.innerText = 'Inserire la password'
        }

        // EMAIL 

        const email = document.getElementById('email').value;
        const email_error = document.getElementById('email_error');
        let email_array = email.split('@')

        if (!email_array[email_array.length - 1].includes('.')) {
            valid = false
            email_error.innerText = "email non valida"
        }
        if (email == '') {
            valid = false
            email_error.innerText = "Inserire email"
        }

        // NAME 
        const name = document.getElementById('name').value;
        const name_error = document.getElementById('name_error');
        if (name == '') {
            valid = false
            name_error.innerText = "Inserire il nome"
        }
        console.log(valid)
        if (!valid) {
            event.preventDefault();
        }
    });
}