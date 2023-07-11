const formulario = document.getElementById('formulario');
const nombre = document.getElementById('nombre');
const peso = document.getElementById('peso');
const fecha = document.getElementById('fecha');
const btnEnviar = document.getElementById('btn-enviar');



const edad = document.getElementById('edad');
const calcularedad = (fecha) =>{
    const fecha = new Date();
    const diaactual = parseInt(fechaActual.getDate());
    const mesactual = parseInt(fechaActual.getMonth()) + 1;
    const añoactual = parseInt(fechaActual.getFullYears());

    const diaNacimiento = parseInt(String(fecha).substring(0,4));
    const mesNacimiento = parseInt(String(fecha).substring(5,7));
    const añoNacimiento = parseInt(String(fecha).substring(8,10));

    let edad = añoactual -añoNacimiento;
    if (mesactual < mesNacimiento){
        edad --;
    } else if (mesactual = mesNacimiento){
        if (diaactual < diaNacimiento){
            edad --;
        }
    }
    return edad;
}



const soloNumeros = (e) => {
    if ((e.keyCode < 48 || e.keyCode > 57) && e.keyCode) {
        e.preventDefault()
    }
}

const soloLetras = (e) => {
    const key = e.keyCode || e.which;
    const tecla = String.fromCharCode(key).toLowerCase();
    const letras = "áéíÓÚabcdefghijklmnñopqrstuvwxyz";
    const especiales = ['8', '32', '37', '39', '46'];
    let tecla_especiales = false;

    for (const i in especiales) {
        if (key == especiales[i]) {
            tecla_especiales = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especiales) {
        e.preventDefault()
    }
}

window.addEventListener('load', function (){
    fecha.addEventListener('change', function(){

    })
})



const validacion = (e) => {
    e.preventDefault();

    if (nombre.value == "") {
        alert("Ingrese el nombre");
        nombre.focus();
        return false;
    }

    if (peso.value == "") {
        alert("Ingrese el peso");
        peso.focus();
        return false;
    }

    if (fecha.value == "") {
        alert("Ingrese la fecha");
        fecha.focus();
        return false;
    }

    if (fecha == "") {
        alert("La fecha ingresada no es válida");
        fecha.focus();
        return false;
    }

    formulario.submit();
}

nombre.addEventListener('keypress', soloLetras);
peso.addEventListener('keypress', soloNumeros);
fecha.addEventListener('keypress', soloNumeros);

formulario.addEventListener('submit', validacion);
