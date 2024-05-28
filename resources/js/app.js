import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const form = document.getElementById('searchform');
if(form){
    const select = document.getElementById('search');
    select.addEventListener('change', ()=>{
        if(select.value !=='all'){
            form.submit();
        }
})

}