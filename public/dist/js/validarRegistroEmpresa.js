document.addEventListener('DOMContentLoaded', function(){

    const formulario = document.querySelector('#formulario');
    const nit = document.querySelector('#nit')
    const nombre = document.querySelector('#nombre');
    const telefono = document.querySelector('#telefono');
    const email = document.querySelector('#email');
    const prefijo = document.querySelector('#prefijo');
    const estado = document.querySelector('#estado');

    formulario.addEventListener('submit', e => {

        if (!validarCampos()) {
            e.preventDefault(); // Evita el envío del formulario si hay campos inválidos
        } else {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "Estás a punto de registrar una empresa",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, enviar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Registrado!',
                        'Tu formulario ha sido enviado.',
                        'success'
                    ).then(() => {
                        formulario.submit();
                    });
                }
            });
            e.preventDefault(); // Previene el envío inicial del formulario para mostrar la alerta
        }
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
        let isValid = true;
        const inputNit = nit.value.trim();
        const inputNombre = nombre.value.trim();
        const inputTelefono = telefono.value.trim();
        const inputEmail = email.value.trim();
        const inputPrefijo = prefijo.value;
        const inputEstado = estado.value;

        if(inputNit === ''){
            setError(nit, 'El Nit es requerido');
            nit.classList.add('is-invalid');
            isValid = false;
        } else {
            setSuccess(nit);
            nit.classList.remove('is-invalid');
        }

        if(inputNombre === ''){
            setError(nombre, 'El nombre es requerido');
            nombre.classList.add('is-invalid');
            isValid = false;
        } else {
            setSuccess(nombre);
            nombre.classList.remove('is-invalid');
        }

        if(inputTelefono === ''){
            setError(telefono, 'El telefono es requerido');
            telefono.classList.add('is-invalid');
            isValid = false;
        } else{
            setSuccess(telefono);
            telefono.classList.remove('is-invalid');
        }

        if(inputEmail === ''){
            setError(email, 'El email es requerido');
            email.classList.add('is-invalid');
            isValid = false;
        } else {
            setSuccess(email);
            email.classList.remove('is-invalid');
        }

        if(inputPrefijo === ''){
            setError(prefijo, 'El prefijo es requerido');
            prefijo.classList.add('is-invalid');
            isValid = false;
        } else {
            setSuccess(prefijo);
            prefijo.classList.remove('is-invalid');
        }

        if(inputEstado === ''){
            setError(estado, 'El estado es requerido');
            estado.classList.add('is-invalid');
            isValid = false;
        } else {
            setSuccess(estado);
            estado.classList.remove('is-invalid');
        }

        return isValid;
    }

    function remover(elemento){
        elemento.addEventListener('input', function(){
            elemento.classList.remove('is-invalid');
            elemento.parentElement.querySelector('.error').innerText = '';
        })
    }

    remover(nit);
    remover(nombre);
    remover(telefono);
    remover(email);
    remover(prefijo);
    remover(estado);

    const btnCerrarBoton = document.querySelector('#cerrarFormulario');
    const btnLimpiar = document.querySelector('#btnLimpiar');

    btnLimpiar.addEventListener('click', limpiarDatos);
    btnCerrarBoton.addEventListener('click', cerrarRegistro);


    function limpiarDatos(){
        inputNit.value = '';
        inputNombre.value = '';
        inputTelefono.value = '';
        inputEmail.value = '';
        inputPrefijo.value = '';
        inputEstado.value = '';
    }

    function cerrarRegistro(){
        eliminarAlertas();
        limpiarDatos()
    }

    //ELIMINAR ALERTAS AL MOMENTO DE CERRAR EL FORMULARIO
    function eliminarAlertas(){

        nit.classList.remove('is-invalid');
        nombre.classList.remove('is-invalid');
        telefono.classList.remove('is-invalid');
        email.classList.remove('is-invalid');
        prefijo.classList.remove('is-invalid');
        estado.classList.remove('is-invalid');
        

        nit.parentElement.querySelector('.error').innerText = '';
        nombre.parentElement.querySelector('.error').innerText = '';
        telefono.parentElement.querySelector('.error').innerText = '';
        email.parentElement.querySelector('.error').innerText = '';
        prefijo.parentElement.querySelector('.error').innerText = '';
        estado.parentElement.querySelector('.error').innerText = '';
    }



    //Eliminar Registro de Empresa

    /* const btnEliminarRegistro = document.querySelectorAll('.eliminar');

    btnEliminarRegistro.addEventListener('click', limpiarDatos); */

});