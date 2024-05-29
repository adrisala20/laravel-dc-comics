import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

//mi prendo il form per la select
const form = document.getElementById('searchform');
if(form){
    const select = document.getElementById('search');
    select.addEventListener('change', ()=>{
        if(select.value !=='all'){
            form.submit();
        }
})
}

//prendo il bottone per rimuovere del delete e del modale
const deleteButton = document.getElementById('comicDelete');
if(deleteButton){
    deleteButton.addEventListener('click', (e)=>{
    e.preventdefault();
    const modale= document.getElementById('modalButton');
    const myModal= new bootstrap.Modal(modale);
    myModal.show();
    const buttonSi = modale.querySelector('btn.btn-primary');
    buttonSi.addEventListener('click', ()=>{
        deleteButton.parentElement.submit();
    })
})

}