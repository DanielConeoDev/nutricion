/*document.addEventListener('DOMContentLoaded', function(){

    const formulario = document.querySelector('#formulario');
    const nit = document.querySelector('#nit')
    const nombre = document.querySelector('#nombre');
    const telefono = document.querySelector('#telefono');
    const email = document.querySelector('#email');
    const prefijo = document.querySelector('#prefijo');
    const estado = document.querySelector('#estado');

    formulario.addEventListener('submit', e => {
        e.preventDefault();

        validarCampos();
    });

    function setError(elemento, mensaje){

        const inputControl = elemento.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = mensaje;
        inputControl.classList.add('error');
        inputControl.classList.remove('success');

    }

    function setSuccess(elemento){
        const inputControl = elemento.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = '';
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    }

    function validarCampos(){
        const inputNit = nit.value.trim();
        const inputnombre = nombre.value.trim();
        const inputTelefono = telefono.value.trim();
        const inputEmail = email.value.trim();

        if(inputNit === ''){
            setError(nit, 'El Nit es requerido');
            nit.classList.add('is-invalid');
        } else {
            setSuccess(nit);
            nit.classList.remove('is-invalid');
        }

        if(inputnombre === ''){
            setError(nombre, 'El nombre es requerido');
            nombre.classList.add('is-invalid');
        } else {
            setSuccess(nombre);
            nombre.classList.remove('is-invalid');
        }

        if(inputTelefono === ''){
            setError(telefono, 'El telefono es requerido');
            telefono.classList.add('is-invalid');
        } else{
            setSuccess(nombre);
            telefono.classList.remove('is-invalid');
        }
    }
});*/