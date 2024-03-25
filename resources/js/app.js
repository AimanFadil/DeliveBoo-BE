import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])



const button_delete = document.querySelectorAll('.btn_delete')

button_delete.forEach((button) => {
    button.addEventListener('click', function () {
        let dish_id = button.getAttribute('data-dishid');
        let dish_name = button.getAttribute('data-dishname');
        let type = button.getAttribute('data-type')
        let text_delete = document.getElementById('text_delete');
        text_delete.innerText = 'sei sicuro di voler eliminare ' + dish_name + '?';
        let url = `${window.location.origin}/admin/${type}/${dish_id}`;
        let form_delete = document.getElementById('form_delete');
        form_delete.setAttribute('action', url);
    })
})

